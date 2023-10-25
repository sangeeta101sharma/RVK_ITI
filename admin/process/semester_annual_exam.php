<?php
include("connection.php");


/* $id=$_POST['id']; */
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$course = $_POST['course'];
$address = $_POST['address'];
$message = $_POST['message'];

    /* admin_name validation 
    if(isset($admin_name) && !empty($admin_name)){  
        if(!preg_match("/^['a-zA-Z-' ]*$/",$admin_name)) {
            $admin_nameErr = "Only letters and white space are allowed";     
             $arr = array("status"=>2,"msg"=> $admin_nameErr);
             echo json_encode($arr);
             return;   
            }
    }else{
         $arr = array("status"=>2,"msg"=>"Name  field is required.");
         echo json_encode($arr);
         return;
    }*/
    
    /* Contact validation
if(isset($contact) && !empty($contact)){
    if(!preg_match("/^([0-9]{10})$/",$contact)){
        $contatErr = "Enter valid contact number. ";
        $arr1 = array("status"=>2,"msg"=>$contatErr);
        echo json_encode($arr1);
        return;
    }
}
else{
    $arr1 = array("status"=>2,"msg"=>"Contact Number is Required.");
    echo json_encode($arr1);
    return;
} */
/* Email validation 

if(isset($email) && !empty($email)){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailErr = "Enter valid  email.";
        $arr2 = array("status"=>2, "msg"=>$emailErr);
        echo json_encode($arr2);
        return;
    }
}
else{
    $arr2 = array("status"=>2, "msg"=>"Email field is required.");
    echo json_encode($arr2);
    return;
}*/


  $sql="INSERT INTO `semester_annual_exam_tbl` (`name`, `contact`, `email`, `course`, `address`, `message`)
   VALUES ('$name', '$contact', '$email', '$course', '$address', '$message')";


$result= mysqli_query($connection,$sql) or die("Query Failed.");
if ($result)
{
    $arr = array("status"=>1,"msg"=>"Your data has been Updated. ");
    echo json_encode($arr);
}
else{
$arr = array("status"=>2,"msg"=>"Try again");
echo json_encode($arr);
}




?>