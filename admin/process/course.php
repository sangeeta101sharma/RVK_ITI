<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    $id = $_POST['id'];
    $courseName = $_POST['courseName'];
    $uni_organ = $_POST['uni_organ'];
    $course_short_name = $_POST['course_short_name'];
    $course_fee = $_POST['course_fee'];
    $duration = $_POST['duration'];
    $eligibility = $_POST['eligibility'];
   
        /*course Name validation 
        if(isset($courseName) && !empty($course_name)){  
            if(!preg_match("/^['a-zA-Z0-9' .]*$/",$courseName)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in  course Name field.";     
                header('location:../course.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="course Name, field is required.";
            header('location:../course.php');
            exit();
        } 
    */

    if($_POST['action']=="INSERT"){
        $sql = "INSERT INTO `course_tbl` (`courseName`, `uni_organ`, `course_short_name`, `course_fee`, `duration`, `eligibility`) VALUES ('$courseName', '$uni_organ', '$course_short_name', '$course_fee', '$duration', '$eligibility')";
    }else
    if($_POST['action']=="UPDATE"){
        $sql = "UPDATE `course_tbl` SET `id`='$id',
        `courseName`='$courseName',
        `uni_organ`='$uni_organ',
        `course_short_name`='$course_short_name',
        `course_fee`='$course_fee',
        `duration`='$duration',
        `eligibility`='$eligibility' 
        WHERE id=$id";
    }

     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $_SESSION['status'] = 1;
        $_SESSION['msg']  = "Course Added Successfully..!!";
        header('location:../course.php');
        exit();
    }else{
        $_SESSION['status']  = 2;
        $_SESSION['msg']  = "Something went wrong...!!!";
        header('location:../course.php');
        exit();
    }
}

?>