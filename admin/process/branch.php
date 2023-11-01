<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    $id = $_POST['id'];
    $branch_name = $_POST['branch_name'];
    echo $branch_name;
    $director_name = $_POST['director_name'];
    
    //upload logo
    $photo=$_FILES['photo']['name'];
    $photo_tmpname=($_FILES['photo']['tmp_name']);
    $PHOTO = "pictures/".$photo;
    move_uploaded_file($photo_tmpname, $PHOTO);
 
    $allowed = array('jpeg','jpg','png');
    $ext = pathinfo($photo, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        $_SESSION['status']=2; 
        $_SESSION['msg'] = 'Invalid file type, Only .jpeg,jpg and .png types are accepted.';
        header('location:../branch.php');
        exit();
    } 

    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $login_pass = $_POST['login_pass'];

    $date = date('Y');
    $branch_code =   "BRAN"."/".$date."/".rand(10000,99999);

        /*Branch Name validation */
        if(isset($branch_name) && !empty($branch_name)){  
            if(!preg_match("/^['a-zA-Z0-9' .]*$/",$branch_name)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in  Branch Name field.";     
                header('location:../branch.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="Branch Name, field is required.";
            header('location:../branch.php');
            exit();
        } 
        /*Director Name validation */
        if(isset($director_name) && !empty($director_name)){  
            if(!preg_match("/^['a-zA-Z0-9' .]*$/",$director_name)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in  Director's Name field.";     
                header('location:../branch.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="Director's Name, field is required.";
            header('location:../branch.php');
            exit();
        } 

        /* Contact validation
        if(isset($contact) && !empty($contact)){
            if(!preg_match("/^['0-9']{10}*$/",$contact)){
                $_SESSION['status'] =2;
                $_SESSION['msg'] ="Only 10 digits are allowed in Contact field.";
                header('location:../branch.php');
                exit();
                }
        }
        else{
            $_SESSION['status'] =2;
                $_SESSION['msg'] ="Contact field is Required.";
                header('location:../branch.php');
                exit();
        } */
           /* Email validation */

        if(isset($email) && !empty($email)){
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $_SESSION['status']=2;
                $_SESSION['message']="Enter valid  email.";
                header('location:../branch.php');
                exit();
            }
        }
        else{
            $_SESSION['status']=2;
            $_SESSION['message']="Email field is Required.";
            header('location:../branch.php');
            exit();
        }


 
    if($_POST['action']=="INSERT"){
        $sql = "INSERT INTO `branch_tbl` (`branch_code`,`branch_name`, `director_name`, `photo`, `contact`, `email`, `city`, `state`, `address`, `pincode`, `login_pass`) VALUES ('$branch_code','$branch_name', '$director_name', '$photo', '$contact', '$email', '$city', '$state', '$address', '$pincode', '$login_pass');";
    }else
    if($_POST['action']=="UPDATE"){
        $sql = "UPDATE `branch_tbl` SET 
        `id`='$id',
        `branch_code`='$branch_code',
        `branch_name`='$branch_name',
        `director_name`='$director_name',
        `photo`='$photo',
        `contact`='$contact',
        `email`='$email',
        `city`='$city',
        `state`='$state',
        `address`='$address',
        `pincode`='$pincode',
        `login_pass`='$login_pass' 
        WHERE id=$id";
    }

     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $_SESSION['status'] = 1;
        $_SESSION['msg']  = "Branch Added Successfully..!!";
        header('location:../branch.php');
        exit();
    }else{
        $_SESSION['status']  = 2;
        $_SESSION['msg']  = "Something went wrong...!!!";
        header('location:../branch.php');
        exit();
    }
}

?>