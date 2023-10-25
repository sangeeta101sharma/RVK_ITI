<?php
include("connection.php");

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    $date = date('Y-m-d H:i:s');
  
/*name validation */

if(isset($name) && !empty($name)){  
    if(!preg_match("/^['a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space are allowed";     
        $array = array("status"=>2,"msg"=> $nameErr);
        echo json_encode($array);
        return;   
        }
}else{
    $array = array("status"=>2,"msg"=>"Name  field is required.");
    echo json_encode($array);
    return;
}
/* Phone validation
if(isset($phone) && !empty($phone)){
    if(!preg_match("/^([0-9]{10})$/",$phone)){
        $phoneErr = "Enter valid contact number. ";
        $arr1 = array("status"=>2,"msg"=>$phoneErr);
        echo json_encode($arr1);
        return;
    }
}
else{
    $arr1 = array("status"=>2,"msg"=>"Contact Number is Required.");
    echo json_encode($arr1);
    return;
} */
/* Email validation */

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
}
/* Address validation 

if(isset($address) && !empty($address)){
    if(!preg_match("/^([a-zA-Z0-9 \b % # . , ?])*$/",$address)) {
        $addressErr = "In Address field only letters,numbers, white space and some special symbols are allowed";     
        $arr3 = array("status"=>2,"msg"=> $addressErr);
        echo json_encode($arr3);
        return;   
        }
}
else{
    $arr3 = array("status"=>2, "msg"=>"Address field is required.");
    echo json_encode($arr3);
    return;
}*/

/* message validation

if(isset($message) && !empty($message)){
    if(!preg_match("/^([a-zA-Z0-9 \b % # . , ? & * \n ])*$/",$message)) {
        $messageErr = "Only letters,numbers and symbols (% , # . ? & * \n) are allowed";     
        $arr3 = array("status"=>2,"msg"=> $messageErr);
        echo json_encode($arr3);
        return;   
        }
}
else{
    $arr3 = array("status"=>2, "msg"=>"message field is required.");
    echo json_encode($arr3);
    return;
} */

       $sql = "INSERT INTO `enquiry_tbl`( `name`,`contact`, `email`, `address`,  `message`, `updated_at`) 
       VALUES ('$name','$contact',' $email','$address', '$message','  $date ')";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
     if ($result)
     {
         $arr = array("status"=>1,"msg"=>"Thanks for Contact Us.. ");
         echo json_encode($arr);
     }
     else{
     $arr = array("status"=>2,"msg"=>"Enquiry Failed.");
     echo json_encode($arr);
     }
?>