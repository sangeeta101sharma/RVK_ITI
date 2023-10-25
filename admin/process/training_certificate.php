<?php
include("connection.php");
$certificate_No= $_POST['certificate_No'];

 $sql="INSERT INTO `training_certificate_tbl`(`certificate_No`) 
 VALUES ('$certificate_No')";
$result=mysqli_query($connection,$sql) or die("Query Failed.");
if($result){
    $ARRAY=array("status"=>1,"message"=>"Your Data has been Accepted...!!");
    echo json_encode($ARRAY);
   
}
else{
    $ARRAY=array("status"=>2,"message"=>"Your Data has been Failed...!!");
    echo json_encode($ARRAY);
}
?>