<?php
include("connection.php");
$id=$_GET['id'];
   //delete image from folder
  echo $sql= "SELECT * FROM  electrician_tbl where id=$id";  
  $result= mysqli_query($connection, $sql) or die("Query Failed.");
   $row = mysqli_fetch_array($result);
  /*  $doctor_list=$row['doctor_list'];

    unset($doctor_list); */

      $sql ="DELETE FROM  electrician_tbl where id=$id";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = " Deleted Successfully...";
        header('location:../electrician.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../electrician.php?status='.$status.'&msg='.$message);
        exit();
    }

 
?>