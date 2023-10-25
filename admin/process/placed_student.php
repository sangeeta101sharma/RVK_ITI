<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    //upload logo
    $image=$_FILES['image']['name'];
    $image_tmpname=($_FILES['image']['tmp_name']);
    $IMAGE = "pictures/".$image;
    move_uploaded_file($image_tmpname, $IMAGE);
    
    $allowed = array('jpeg', 'png', 'jpg');
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        $_SESSION['status']=2; 
        $_SESSION['msg'] = 'Invalid file type. Only JPG, JPEG and PNG types are accepted.';
        header('location:../placed_student.php');
        exit();
    }

    $id = $_POST['id'];
    $doctor = $_POST['doctor'];
    $specialist = $_POST['specialist'];
    $contact = $_POST['contact'];
    $weekly = $_POST['weekly'];
    $morning = $_POST['morning'];

        /* doctor validation */

        if(isset($doctor) && !empty($doctor)){  
            if(!preg_match("/^['a-zA-Z-' .]*$/",$doctor)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in  Name field.";     
                header('location:../placed_student.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="Name, field is required.";
            header('location:../placed_student.php');
            exit();
        }
        /* Post validation*/

        if(isset($specialist) && !empty($specialist)){  
            if(!preg_match("/^['a-zA-Z0-9' - , : () ]*$/",$specialist)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in Post field.";     
                header('location:../placed_student.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="Post, field is required.";
            header('location:../placed_student.php');
            exit();
        }
          /* Contact validation */
          if(isset($contact) && !empty($contact)){
            if(!preg_match("/^([0-9]{10})$/",$contact)){
             $arr1 = array("status"=>2,"msg"=>"Enter valid contact number.");
            echo json_encode($arr1);
            return;
                }
        }
        else{
            $arr1 = array("status"=>2,"msg"=>"Contact Number is Required.");
            echo json_encode($arr1);
            return;
        } 
        /* Email validation 

            if(isset($email) && !empty($email)){
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $arr2 = array("status"=>2, "msg"=>"Enter valid  email.");
                echo json_encode($arr2);
                return;
                }
        }
            else{
            $arr2 = array("status"=>2, "msg"=>"Email field is required.");
            echo json_encode($arr2);
            return;
        }*/
        /* Address validation 

        if(isset($weekly) && !empty($weekly)){  
            if(!preg_match("/^['a-zA-Z' - , . &]*$/",$weekly)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in Address field.";     
                header('location:../placed_student.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="Address, field is required.";
            header('location:../placed_student.php');
            exit();
        }
*/
 
    if($_POST['action']=="INSERT"){
        $sql = "INSERT INTO `placed_student_tbl` (`image`, `doctor`, `specialist`, `contact`, `weekly`, `morning`) VALUES ('$IMAGE', '$doctor', '$specialist', '$contact', '$weekly', '$morning')";
    }else
    if($_POST['action']=="UPDATE"){
        $sql = "UPDATE `placed_student_tbl`SET `image`='$IMAGE', 
        `doctor`='$doctor',
         `specialist`='$specialist',
         `contact`='$contact',
         `weekly`='$weekly',
         `morning`='$morning'
          where id= $id";
    }

     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $_SESSION['status'] = 1;
        $_SESSION['msg']  = " Record Submitted...";
        header('location:../placed_student.php');
        exit();
    }else{
        $_SESSION['status']  = 2;
        $_SESSION['msg']  = "Something went wrong!!!";
        header('location:../placed_student.php');
        exit();
    }
}

?>