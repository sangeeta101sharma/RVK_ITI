<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
            $Holiday_name= $_POST['holiday_name'];
            $Start_date= $_POST['start_date'];
            $End_date= $_POST['end_date'];

    /* title validation 

    if(isset($remark) && !empty($remark)){  
        if(!preg_match("/^['a-zA-Z-' ]*$/",$remark)) {
            $_SESSION['status'] =2;
            $_SESSION['msg'] = "Only letters and white space are allowed in title field.";     
            header('location:../holiday.php');
            exit();
            }
    }else{
        $_SESSION['status']=2; 
        $_SESSION['msg'] ="Remark field is required.";
        header('location:../holiday.php');
        exit();
    }*/
       
 

      $sql = "INSERT INTO `holiday_tbl` (`holiday_name`, `start_date`, `end_date`) 
      VALUES ('$Holiday_name', '$Start_date', '$End_date');";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $_SESSION['status']= 1;
        $_SESSION['msg'] = "Data Inserted Successfully...";
        header('location:../holiday.php');
        exit();
    }else{
        $_SESSION['status'] = 2;
        $_SESSION['msg'] = "Something went wrong!!!";
        header('location:../holiday.php');
        exit();
    }
}

?>