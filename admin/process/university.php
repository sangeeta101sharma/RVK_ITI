<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    $id = $_POST['id'];
    $university_name = $_POST['university_name'];
    $University_code = $_POST['University_code'];
    $university_website = $_POST['university_website'];


        /*University Name validation */
        if(isset($university_name) && !empty($university_name)){  
            if(!preg_match("/^['a-zA-Z0-9' .]*$/",$university_name)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in  University Name field.";     
                header('location:../university.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="university Name, field is required.";
            header('location:../university.php');
            exit();
        } 
    

        /* Contact validation
        if(isset($contact) && !empty($contact)){
            if(!preg_match("/^['0-9']{10}*$/",$contact)){
                $_SESSION['status'] =2;
                $_SESSION['msg'] ="Only 10 digits are allowed in Contact field.";
                header('location:../university.php');
                exit();
                }
        }
        else{
            $_SESSION['status'] =2;
                $_SESSION['msg'] ="Contact field is Required.";
                header('location:../university.php');
                exit();
        } */

    if($_POST['action']=="INSERT"){
        $sql = "INSERT INTO `university_tbl` (`university_name`, `University_code`, `university_website`) VALUES ('$university_name', '$University_code', '$university_website')";
    }else
    if($_POST['action']=="UPDATE"){
        $sql = "UPDATE `university_tbl` SET `id`='$id',
        `university_name`='$university_name',
        `University_code`='$University_code',
        `university_website`='$university_website'
         WHERE id=$id";
    }

     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $_SESSION['status'] = 1;
        $_SESSION['msg']  = "University Added Successfully..!!";
        header('location:../university.php');
        exit();
    }else{
        $_SESSION['status']  = 2;
        $_SESSION['msg']  = "Something went wrong...!!!";
        header('location:../university.php');
        exit();
    }
}

?>