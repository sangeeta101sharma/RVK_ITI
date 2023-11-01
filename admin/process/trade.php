<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    $id = $_POST['id'];
    $trade_name = $_POST['trade_name'];
   
        /*Trade Name validation */
        if(isset($trade_name) && !empty($trade_name)){  
            if(!preg_match("/^['a-zA-Z0-9' .]*$/",$trade_name)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in  Trade Name field.";     
                header('location:../trade.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="Trade Name, field is required.";
            header('location:../trade.php');
            exit();
        } 
    

    if($_POST['action']=="INSERT"){
        $sql = "INSERT INTO `trade_tbl` (`trade_name`) VALUES ('$trade_name')";
    }else
    if($_POST['action']=="UPDATE"){
        $sql = "UPDATE `trade_tbl` SET `id`='$id',`trade_name`='$trade_name' WHERE id=$id";
    }

     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $_SESSION['status'] = 1;
        $_SESSION['msg']  = "Trade Added Successfully..!!";
        header('location:../trade.php');
        exit();
    }else{
        $_SESSION['status']  = 2;
        $_SESSION['msg']  = "Something went wrong...!!!";
        header('location:../trade.php');
        exit();
    }
}

?>