<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    $id = $_POST['id'];
    $TradeName = $_POST['TradeName'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $subject_code = $_POST['subject_code'];
    $subject_name = $_POST['subject_name'];
   
        /*subject Name validation 
        if(isset($subjectName) && !empty($subject_name)){  
            if(!preg_match("/^['a-zA-Z0-9' .]*$/",$subjectName)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in  subject Name field.";     
                header('location:../subject.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="subject Name, field is required.";
            header('location:../subject.php');
            exit();
        } 
    */

    if($_POST['action']=="INSERT"){
        $sql = "INSERT INTO `subject_tbl` (`TradeName`, `course`, `semester`, `subject_code`, `subject_name`) VALUES ('$TradeName', '$course', '$semester', '$subject_code', '$subject_name')";
    }else
    if($_POST['action']=="UPDATE"){
        $sql = "UPDATE `subject_tbl` SET `id`='$id',
        `TradeName`='$TradeName',
        `course`='$course',
        `semester`='$semester',
        `subject_code`='$subject_code',
        `subject_name`='$subject_name'
         WHERE id=$id";
    }

     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $_SESSION['status'] = 1;
        $_SESSION['msg']  = "Subject Added Successfully..!!";
        header('location:../subject.php');
        exit();
    }else{
        $_SESSION['status']  = 2;
        $_SESSION['msg']  = "Something went wrong...!!!";
        header('location:../subject.php');
        exit();
    }
}

?>