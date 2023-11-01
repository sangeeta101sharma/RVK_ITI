<?php
session_start(); // Starting Session
include("connection.php");


if (isset($_POST['enrollmentNo']) && !empty($_POST['enrollmentNo'])) {
    $enrollmentNo=$_POST['enrollmentNo'];


    $sql="SELECT * FROM students_registration_tbl WHERE enrollment_no='$enrollmentNo'";    
    $result=mysqli_query($connection,$sql) or die("Query Failed.");
    if(mysqli_num_rows($result)>0){   
        $row=mysqli_fetch_array($result);    
        $ARRAY=array("status"=>1,"message"=>"Enrollment Verify Successfully..!!","data"=>$row);
        echo json_encode($ARRAY);       
    }else{
        $ARRAY=array("status"=>2,"message"=>"OOPs! Record not found.");
        echo json_encode($ARRAY);
    }
 }


else{
    $ARRAY=array("status"=>2,"message"=>"Enrollment Verification , Failed...!!");
    echo json_encode($ARRAY);
}
?>

