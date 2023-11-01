<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $college_code = $_POST['college_code'];
    
    //upload logo
    $photo=$_FILES['photo']['name'];
    $photo_tmpname=($_FILES['photo']['tmp_name']);
    $PHOTO = "pictures/".$photo;
    move_uploaded_file($photo_tmpname, $PHOTO);
 
    $allowed = array('jpeg','jpg','png');
    $ext = pathinfo($photo, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        $_SESSION['status']=2; 
        $_SESSION['msg'] = 'Invalid file type, Only .jpeg,jpg and .png types are accepted.';
        header('location:../students_registration.php');
        exit();
    } 


    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $aadhar_no = $_POST['aadhar_no'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $course_name = $_POST['course_name'];
    $course_duration = $_POST['course_duration'];
    $trade = $_POST['trade'];
    
    //upload graduation certificate
    $graduation=$_FILES['graduation']['name'];
    $graduation_tmpname=($_FILES['graduation']['tmp_name']);
    $GRADUATION = "file/".$graduation;
    move_uploaded_file($graduation_tmpname, $GRADUATION);
     
    $allowed = array('doc','pdf');
    $ext = pathinfo($graduation, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        $_SESSION['status']=2; 
        $_SESSION['msg'] = 'Invalid file type, Only .doc and pdf types are accepted.';
        header('location:../students_registration.php');
        exit();
    }
    
    //upload 12th certificate
    $class_12=$_FILES['class_12']['name'];
    $class_12_tmpname=($_FILES['class_12']['tmp_name']);
    $CLASS_12 = "file/".$class_12;
    move_uploaded_file($class_12_tmpname, $CLASS_12);
    
     $allowed = array('doc','pdf');
    $ext = pathinfo($class_12, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        $_SESSION['status']=2; 
        $_SESSION['msg'] = 'Invalid file type, Only .doc and pdf types are accepted.';
        header('location:../students_registration.php');
        exit();
    } 
    //upload 10th certificate
    $class_10=$_FILES['class_10']['name'];
    $class_10_tmpname=($_FILES['class_10']['tmp_name']);
    $CLASS_10 = "file/".$class_10;
    move_uploaded_file($class_10_tmpname, $CLASS_10);
    
    $allowed = array('doc','pdf');
    $ext = pathinfo($class_10, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        $_SESSION['status']=2; 
        $_SESSION['msg'] = 'Invalid file type, Only .doc and pdf types are accepted.';
        header('location:../students_registration.php');
        exit();
    }
//$date= new Date().getFullYear();
$date = date('Y');
$enrollment_no =   $college_code. "/".$date."/".rand(10000,99999);

        /* name validation */

        if(isset($name) && !empty($name)){  
            if(!preg_match("/^['a-zA-Z-' .]*$/",$name)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in   Name field.";     
                header('location:../students_registration.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] =" Name, field is required.";
            header('location:../students_registration.php');
            exit();
        } 
        /*father name validation */

        if(isset($father_name) && !empty($father_name)){  
            if(!preg_match("/^['a-zA-Z-' .]*$/",$father_name)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in Father   Name field.";     
                header('location:../students_registration.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="  Father Name, field is required.";
            header('location:../students_registration.php');
            exit();
        } 
        /*  mother name validation */

        if(isset($mother_name) && !empty($mother_name)){  
            if(!preg_match("/^['a-zA-Z-' .]*$/",$mother_name)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in Mother   Name field.";     
                header('location:../students_registration.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="Mother Name, field is required.";
            header('location:../students_registration.php');
            exit();
        } 
      /*   aadhar_no validation 
        if(isset($aadhar_no) && !empty($aadhar_no)){
            if(!preg_match("/^['0-9']{12}*$/",$aadhar_no)){
                $_SESSION['status'] =2;
                $_SESSION['msg'] ="Only 12 digits are allowed in Aadhar Number field.";
                header('location:../students_registration.php');
                exit();
                }
        }
        else{
            $_SESSION['status'] =2;
                $_SESSION['msg'] ="Aadhar field is Required.";
                header('location:../students_registration.php');
                exit();
        } */
        /* Contact validation
        if(isset($contact) && !empty($contact)){
            if(!preg_match("/^['0-9']{10}*$/",$contact)){
                $_SESSION['status'] =2;
                $_SESSION['msg'] ="Only 10 digits are allowed in Contact field.";
                header('location:../students_registration.php');
                exit();
                }
        }
        else{
            $_SESSION['status'] =2;
                $_SESSION['msg'] ="Contact field is Required.";
                header('location:../students_registration.php');
                exit();
        } */
           /* Email validation */

        if(isset($email) && !empty($email)){
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $_SESSION['status']=2;
                $_SESSION['message']="Enter valid  email.";
                header('location:../students_registration.php');
                exit();
            }
        }
        else{
            $_SESSION['status']=2;
            $_SESSION['message']="Email field is Required.";
            header('location:../students_registration.php');
            exit();
        }


 
    if($_POST['action']=="INSERT"){
        $sql = "INSERT INTO `students_registration_tbl` (`enrollment_no`,`college_code`,`name`, `photo`, `father_name`, `mother_name`, `aadhar_no`, `contact`, `email`, `address`, `course_name`, `course_duration`, `trade`, `graduation`, `class_12`, `class_10`) 
        VALUES ( '$enrollment_no','$college_code','$name', '$PHOTO', '$father_name', '$mother_name', '$aadhar_no', '$contact', '$email', '$address', '$course_name', '$course_duration', '$trade', '$GRADUATION', '$CLASS_12', '$CLASS_10');";
    }else
    if($_POST['action']=="UPDATE"){
        $sql = "UPDATE `students_registration_tbl` SET 
        `id`='$id',
        `enrollment_no`='$enrollment_no',
        `college_code`='$college_code',
        `name`='$name',
        `photo`='$PHOTO',
        `father_name`='$father_name',
        `mother_name`='$mother_name',
        `aadhar_no`='$aadhar_no',
        `contact`='$contact',
        `email`='$email',
        `address`='$address',
        `course_name`='$course_name',
        `course_duration`='$course_duration',
        `trade`='$trade',
        `graduation`='$GRADUATION',
        `class_12`='$CLASS_12',
        `class_10`='$CLASS_10' 
        WHERE id=$id";
    }

     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $_SESSION['status'] = 1;
        $_SESSION['msg']  = " Registration Successfull...!!";
        header('location:../students_registration.php');
        exit();
    }else{
        $_SESSION['status']  = 2;
        $_SESSION['msg']  = "Something went wrong...!!!";
        header('location:../students_registration.php');
        exit();
    }
}

?>