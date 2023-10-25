<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    //upload logo
    $image=$_FILES['image']['name'];
    $image_tmpname=($_FILES['image']['tmp_name']);
    $IMAGE = "file/".$image;
    move_uploaded_file($image_tmpname, $IMAGE);
    
    $allowed = array('doc','pdf');
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        $_SESSION['status']=2; 
        $_SESSION['msg'] = 'Invalid file type, Only .DOC and .PDF types are accepted.';
        header('location:../fitter.php');
        exit();
    }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $donate_field = $_POST['donate_field'];
   /*  $donate_amount = $_POST['donate_amount'];
    $donate_articles = $_POST['donate_articles'];
    $date = $_POST['date']; */

        /* name validation */

        if(isset($name) && !empty($name)){  
            if(!preg_match("/^['a-zA-Z-' .]*$/",$name)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in Univ. Name field.";     
                header('location:../fitter.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="Univ. Name, field is required.";
            header('location:../fitter.php');
            exit();
        } 
        /* Contact validation */
        if(isset($contact) && !empty($contact)){
            if(!preg_match("/^['a-zA-Z-' .]*$/",$contact)){
                $_SESSION['status'] =2;
                $_SESSION['msg'] ="Only letters and white space are allowed in Course field";
                header('location:../fitter.php');
                exit();
                }
        }
        else{
            $_SESSION['status'] =2;
                $_SESSION['msg'] ="Course field is Required.";
                header('location:../fitter.php');
                exit();
        }
         /* donate_field validation 
        if(isset($donate_field) && !empty($donate_field)){  
            if(!preg_match("/^['a-zA-Z0-9' ]*$/",$donate_field)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] ="Only letters,numbers and white space are allowed in Donate Field.";
                header('location:../fitter.php');
                 exit(); 
             }
        }else{ 
            $_SESSION['status'] =2;
            $_SESSION['msg'] ="Donate Field  field is required.";
            header('location:../fitter.php');
            exit();
            }*/
                   /* donate_amount validation 

        if(isset($donate_amount) && !empty($donate_amount)){  
            if(!preg_match("/^['a-zA-Z0-9' - , . & $]*$/",$donate_amount)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in Donate Amount field.";     
                header('location:../fitter.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="Donate Amount, field is required.";
            header('location:../fitter.php');
            exit();
        }*/
        /* donate_articles validation 

        if(isset($donate_articles) && !empty($donate_articles)){  
            if(!preg_match("/^['a-zA-Z-' - , : () ]*$/",$donate_articles)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in Donate Articles field.";     
                header('location:../fitter.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="Donate Articles, field is required.";
            header('location:../fitter.php');
            exit();
        }*/
 

 
    if($_POST['action']=="INSERT"){
        $sql = "INSERT INTO `fitter_tbl` (`image`, `name`, `contact`, `address`, `donate_field`) 
        VALUES ('$IMAGE', '$name', '$contact', '$address', '$donate_field')";
    }else
    if($_POST['action']=="UPDATE"){
        $sql = "UPDATE `fitter_tbl` SET `id`='$id',
        `image`='$IMAGE',
        `name`='$name',
        `contact`='$contact',
        `address`='$address',
        `donate_field`='$donate_field' 
        WHERE id=$id";
    }

     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $_SESSION['status'] = 1;
        $_SESSION['msg']  = " Record Submitted...";
        header('location:../fitter.php');
        exit();
    }else{
        $_SESSION['status']  = 2;
        $_SESSION['msg']  = "Something went wrong!!!";
        header('location:../fitter.php');
        exit();
    }
}

?>