<?php
include("connection.php");
 
$id=$_GET['id'];
  echo $sql= "SELECT * FROM trade_tbl where id=$id";  
  $result= mysqli_query($connection, $sql) or die("Query Failed.");
   $row = mysqli_fetch_array($result);

      $sql ="DELETE FROM trade_tbl where id=$id";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = " Deleted Successfully...";
        header('location:../trade.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../trade.php?status='.$status.'&msg='.$message);
        exit();
    }

 
?>