<?php
include("connection.php");
 
$id=$_GET['id'];
   //delete image from folder
  echo $sql= "SELECT * FROM holiday_tbl where id=$id";  
  $result= mysqli_query($connection, $sql) or die("Query Failed.");
   $row = mysqli_fetch_array($result);
   $gallery=$row['document'];

    unset($gallery);

      $sql ="DELETE FROM holiday_tbl where id=$id";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = " Deleted Successfully...";
        header('location:../holiday.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../holiday.php?status='.$status.'&msg='.$message);
        exit();
    }

 
?>