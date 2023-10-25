<?php include('admin/process/connection.php');?>
<?php include("include/site_data.php");?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="utf-8">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $line['favicon'];?>" />

    <title><?php echo  $title ;?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">

    <link rel="stylesheet" type="text/css" href="css/lightgallery.min.css">

    <link rel="stylesheet" type="text/css" href="css/scrollbar.css">

    <link rel="stylesheet" type="text/css" href="css/switcher.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.min.css">

    <link rel="stylesheet" type="text/css" href="css/hover.css">

    <link rel="stylesheet" type="text/css" href="css/templete.min.css">

    <link rel="stylesheet" type="text/css" href="css/settings.css">

    <link rel="stylesheet" type="text/css" href="css/navigation.css">

    <link rel="stylesheet" type="text/css" href="css/contrast.css">

</head>

<body id="bg">
    <div class="page-wraper">

        <!-- header -->

        <?php include('include/header.php');?>
        <!-- Content -->

        <style>
        .overlay-black-dark:after,
        .overlay-black-light:after,
        .overlay-black-middle:after {

            background: rgb(0 0 0 / 65%);

        }

        table {
            text-align: center !important;
        }
        </style>

        <div class="page-content">

            <!-- inner page banner -->

            <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(pictures/feedback.jpg);
            background-size:cover;background-position: center;background-repeat: no-repeat;">

                <div class="container">

                    <div class="dez-bnr-inr-entry">

                        <h1 class="text-white">Students Feedback &nbsp;</h1>

                    </div>

                </div>

            </div>

            <!-- inner page banner END -->

            <!-- Breadcrumb row -->

            <div class="breadcrumb-row">

                <div class="container">

                    <ul class="list-inline">

                        <li><a href="index.php">Home</a></li>

                        <li>Students Feedback &nbsp;</li>

                    </ul>

                </div>

            </div>

            <!-- Breadcrumb row END -->



            <div class="clearfix">

                <div class="content-area">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-12 col-sm-12" style="min-height: 150px;">
                                <!DOCTYPE html>
                                <html>

                                <head>
                                    <style>
                                    /* Style the form container */
                                    .form-contaner {
                                        max-width: 400px;
                                        margin: 0 auto;
                                        padding: 20px;
                                        margin-bottom: 40px;
                                        background-color: #f4f4f4;
                                        border: 1px solid #ddd;
                                        border-radius: 5px;
                                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                                    }

                                    /* Style form elements */
                                    .form-contaner input[type="text"],
                                    .form-contaner textarea {
                                        width: 100%;
                                        padding: 10px;
                                        margin: 5px 0;
                                        border: 1px solid #ccc;
                                        border-radius: 5px;
                                    }

                                    .form-contaner textarea {
                                        resize: none;
                                        /* Prevent resizing of the textarea */
                                    }

                                    /* Style buttons */
                                    .form-contaner button {
                                        background-color: #4CAF50;
                                        color: #fff;
                                        border: none;
                                        border-radius: 5px;
                                        padding: 10px 20px;
                                        margin: 5px;
                                        cursor: pointer;
                                    }

                                    .form-contaner button:hover {
                                        background-color: #45a049;
                                    }
                                    </style>
                                    <div class="form-contaner">
                                        <form>
                                            <label for="name">Name :</label>
                                            <input type="text" id="name" name="name">

                                            <label for="email">Email :</label>
                                            <input type="text" id="email" name="email">

                                            <label for="subject">mobile No :</label>
                                            <input type="text" id="contact" name="contact">

                                            <label for="feedback">Feedback :</label>
                                            <textarea id="feedback" name="feedback" rows="4"></textarea>

                                            <button type="submit" onclick="submitform()">Submit</button>
                                            <button type="reset">Reset</button>
                                        </form>
                                    </div> 
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
                                    <script  type="text/javascript" src="JQUERY.js"></script>
                     <!-- form AJAX -->
                    <script>
                        function submitform(){
                            event.preventDefault();
                            var Name = document.getElementById("name").value;
                            
                            var Email = document.getElementById("email").value;
                          
                            var Contact = document.getElementById("contact").value;
                            
                            var Feedback = document.getElementById("feedback").value; 
                    
                           var dataStringer = "name="+Name+
                           "&email="+Email+ 
                            "&contact="+Contact+
                            "&feedback="+Feedback;
                           console.log(dataStringer);
                           $.ajax({
                                url:"admin/process/student_feedback.php",
                                type:"POST",
                                cache:false,
                                data:dataStringer,
                                success:function(result){
                                  console.log(result);
                               var d = $.parseJSON(result);
                                if(d.status == 1){
                                   swal('', d.msg, 'success'); 
                                   location.reload();
                                }else{
                                    swal('', d.msg, 'error');  
                                }  
                                }
                            }) ; 
                        }
                       
                    </script>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- contact area END -->

            </div>

            <!-- Content END--

  <!-- Footer -->

            <?php include('include/footer.php');?>

        </div>

        <!-- JavaScript  files ========================================= -->

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.php"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/jquery.bootstrap-touchspin.js"></script>
        <script src="js/masonry.filter.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/lightgallery-all.js"></script>
        <script src="js/revolution.extension.video.min.js"></script>
        <script src="js/rev.slider.js"></script>
        <script src="js/customJS.js"></script>
        <script>
        jQuery(document).ready(function() {

            'use strict';

            dz_rev_slider_1();

        });
        $('.carousel').carousel({

            interval: 6000,

            pause: "true"

        });
        </script>

        <script>
        $(document).ready(function() {

            $("#myModal").modal('show');

        });
        </script>

        <script>
        $(document).ready(function() {

            $("#myModal").modal('show');

        });
        </script>
</body>

</html>