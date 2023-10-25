<?php
include("connection.php");
 
$id=$_GET['id'];
   $sql= "SELECT * FROM semester_annual_exam_tbl where id=$id";  
  $result= mysqli_query($connection, $sql) or die("Query Failed.");
   $row = mysqli_fetch_array($result);

      $sql ="DELETE FROM semester_annual_exam_tbl where id=$id";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = " Deleted Successfully...";
        header('location:../semester_annual_exam.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../semester_annual_exam.php?status='.$status.'&msg='.$message);
        exit();
    }

 
?>