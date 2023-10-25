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
            <div class="dez-bnr-inr overlay-black-middle" style="background-image:url('pictures/contact.jpg');
            background-size:cover;background-position: center;background-repeat: no-repeat;">
                <div class="container">
                    <div class="dez-bnr-inr-entry">
                        <h1 class="text-white">Contact&nbsp;</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact&nbsp;</li>
                    </ul>
                </div>
            </div>

            <div class="clearfix">
                <div class="content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12" style="min-height: 150px;">
                                <style>
                                .contaner {
                                    max-width: 600px;
                                    margin: 0 auto;
                                    margin-bottom: 40px;
                                    padding: 20px;
                                    background-color: #ffffff;
                                    border: 1px solid #ccc;
                                    border-radius: 5px;
                                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                                }

                                h1 {
                                    text-align: center;
                                }

                                .contact-form {
                                    display: flex;
                                    flex-direction: column;
                                }

                                .form-group {
                                    margin-bottom: 20px;
                                }

                                label {
                                    font-weight: bold;
                                }

                                input[type="text"],
                                textarea {
                                    width: 100%;
                                    padding: 10px;
                                    border: 1px solid #ccc;
                                    border-radius: 5px;
                                }

                                textarea {
                                    resize: vertical;
                                }

                                .submit-btn {
                                    background-color: #007BFF;
                                    color: #fff;
                                    border: none;
                                    padding: 10px 20px;
                                    border-radius: 5px;
                                    cursor: pointer;
                                }

                                .submit-btn:hover {
                                    background-color: #0056b3;
                                }
                                #contact{
                                    color:orangered;
                                    font-size:25px;
                                    font-weight:bold;
                                    height:auto;
                                    width:100%;
                                    flex-direction:row;
                                    text-align:center;
                                    border-left:2px solid blue;
                                }
                                #contact:hover{
                                        color:white;
                                }
                                #contact .fa{
                                    color:white;
                                    font-size:25px;
                                    font-weight:bold;
                                    margin-right:15px;
                                }
                                #contact .fa:hover{
                                    color:orangered;
                                    font-size:25px;
                                    font-weight:bold;
                                    margin-right:15px;
                                }
                                #contact h5{
                                    color:crimson;
                                    margin-top:50px;
                                }
                                </style>
                                <div class="contaner">
                                    <h1>Contact Us</h1>
                                    <form class="contact-form">
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" id="name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="contact">Contact:</label>
                                            <input type="text" id="contact" name="contact" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" id="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">address:</label>
                                            <input type="text" id="address" name="address" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message:</label>
                                            <textarea id="message" name="message" rows="6" required></textarea>
                                        </div>
                                        <button type="submit" onclick="submitform()" class="submit-btn">Submit</button>
                                    </form>
                                </div>

                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
                                </script>
                                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                                <script type="text/javascript" src="JQUERY.js"></script>
                                <!-- form AJAX -->
                                <script>
                                function submitform() {
                                    event.preventDefault();
                                    var Name = document.getElementById("name").value;
                                    console.log(Name);
                                    var Contact = document.getElementById("contact").value;
                                    console.log(Contact);
                                    var Email = document.getElementById("email").value;
                                    console.log(Email);
                                    var Address = document.getElementById("address").value;
                                    console.log(Address);
                                    var Message = document.getElementById("message").value;
                                    console.log(Message);

                                    var dataStringer = "name=" + Name +
                                        "&contact=" + Contact +
                                        "&email=" + Email +
                                        "&address=" + Address +
                                        "&message=" + Message;
                                    console.log(dataStringer);
                                    $.ajax({
                                        url: "admin/process/enquiry.php",
                                        type: "POST",
                                        cache: false,
                                        data: dataStringer,
                                        success: function(result) {
                                            console.log(result);
                                            var d = $.parseJSON(result);
                                            if (d.status == 1) {
                                                swal('', d.msg, 'success');
                                                location.reload();
                                            } else {
                                                swal('', d.msg, 'error');
                                            }
                                        }
                                    });
                                }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact area END -->
                <?php
 $i=1;
$sql= "SELECT * FROM contact_us_tbl";
$result= mysqli_query($connection, $sql) or die("Query Failed.");
while($row = mysqli_fetch_array($result)){
?>


                <div class="dez-bnr-inr overlay-black-middle" style="background-image: linear-gradient(
    to bottom,
    rgba(255, 255, 0, 0.1),
    rgba(0, 0, 255, 0.1)
  ), url('pictures/contact.jpg');background-size:cover;background-position: center;background-repeat: no-repeat;">
                <div class="container">
                  <div class="row d-flex"> 
                    <div class="col-sm-12 col-lg-12 col-md-12" style="min-height: 250px;  display: flex;
  flex-direction: row;">
                        <div class="col-sm-3 " id="contact"> <i class="fa fa-location-arrow" aria-hidden="true"></i>Name
                        <h5><?php echo $row['office_location'];?></h5>
                    </div>
                        <div class="col-sm-3 " id="contact"> <i class="fa fa-map-marker" aria-hidden="true"></i>Address
                        <h5>  <?php echo $row['address'];?></h5>
                    </div>
                        <div class="col-sm-3" id="contact"> <i class="fa fa-phone" aria-hidden="true"></i>Contact
                        <h5>  <?php echo $row['contact'];?></h5>
                    </div>
                        <div class="col-sm-3" id="contact"><i class="fa fa-envelope" aria-hidden="true"></i>Email
                        <h5>  <?php echo $row['email'];?></h5>
                    </div>
                    </div>
                  </div>
                </div>
            </div>
            <?php }?>
            </div>
            <!-- Content END--
<?php include('include/footer.php');?>
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
            }); /*ready*/
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