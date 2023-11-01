<?php
include("connection.php");

    $name = $_POST['name'];
    //echo $name;
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $job = $_POST['job'];
    $location = $_POST['location'];
    $expected_salary = $_POST['expected_salary'];
    $experience = $_POST['experience'];
    $company_name = $_POST['company_name'];
    $previous_salary = $_POST['previous_salary'];

    $resume=$_FILES['resume']['name'];
    $resume_tmpname=($_FILES['resume']['tmp_name']);
    $RESUME ="file/".$resume;
    move_uploaded_file($resume_tmpname, $RESUME );

    $allowed = array('doc','pdf');
    $ext = pathinfo($resume, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        $resumeErr="Invalid file type, Only .doc and pdf types are accepted.";
        $res=array("status"=>2,"msg"=>$resumeErr);
        echo json_encode($res);
        return;
    }

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

       $sql ="INSERT INTO `registration_tbl` (`name`, `email`, `phone`, `address`, `job`, `location`, `expected_salary`, `experience`, `company_name`, `previous_salary`, `resume`, `updated_at`) 
       VALUES ('$name', '$email', '$phone', '$address', '$job', '$location', '$expected_salary', '$experience', '$company_name', '$previous_salary', ' $RESUME', '$date')";

     $result=mysqli_query($connection,$sql)or die("Query Failed.");
     if ($result)
     {
         $arr = array("status"=>1,"msg"=>"Resume Submitted Successfully.... !!");
         echo json_encode($arr);
     }
     else{
     $arr = array("status"=>2,"msg"=>"OOPs! Data Submission Failed.");
     echo json_encode($arr);
     }
?>