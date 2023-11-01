<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
  //upload favicon
  $favicon=$_FILES['favicon']['name'];
  $favicon_tmpname=($_FILES['favicon']['tmp_name']);
  $FAVICON = "images/".$favicon;
  move_uploaded_file($favicon_tmpname, $FAVICON);
  
  $allowed = array('jpeg', 'png', 'jpg');
  $ext = pathinfo($favicon, PATHINFO_EXTENSION);
  if (!in_array($ext, $allowed)) {   
  $_SESSION['status'] = 2;
  $_SESSION['message'] = "Invalid file type. Only JPG, JPEG and PNG types are accepted.";
  header('location:../site_setting.php');
  exit();
  }

    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];

        /* Contact validation 
if(isset($contact) && !empty($contact)){
    if(!preg_match("/^([0-9]{10})$/",$contact)){
        $_SESSION['status']=2;
        $_SESSION['message'] = "Enter valid contact number.";
        header('location:../site_setting.php');
        exit();
    }
}
else{
    $_SESSION['status']=2;
    $_SESSION['message'] = "Contact Number is Required.";
    header('location:../site_setting.php');
    exit();
}*/
   /* Email validation */

if(isset($email) && !empty($email)){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $_SESSION['status']=2;
        $_SESSION['message']="Enter valid  email.";
        header('location:../site_setting.php');
        exit();
    }
}
else{
    $_SESSION['status']=2;
    $_SESSION['message']="Email field is Required.";
    header('location:../site_setting.php');
    exit();
}
if($_POST['action']=="UPDATE"){
   echo $sql = "UPDATE `site_setting_tbl` SET 
     `favicon`='$FAVICON',
     `contact`=$contact,
     `email`='$email',
     `address`='$address'
     WHERE id='$id'";
}
if($_POST['action']=="INSERT"){
    $sql = "INSERT INTO `site_setting_tbl` SET 
     `favicon`='$FAVICON',
     `contact`=$contact,
     `email`='$email',
     `address`='$address'";
}
  
 
$result=mysqli_query($connection,$sql) or die("Query Failed.");
    if ($result){
        
        $_SESSION['status'] = 1;
        $_SESSION['message'] = "Updated successfully...";
        header('location:../site_setting.php');
        exit();
    }else{
        $_SESSION['status'] = 2;
        $_SESSION['message'] = "Something went wrong!!!";
        header('location:../site_setting.php');
        exit();
    }
 
}

?>