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

            <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(pictures/certificate2.jpg);
            background-size:cover;background-position: center;background-repeat: no-repeat;">

                <div class="container">

                    <div class="dez-bnr-inr-entry">

                        <h1 class="text-white"> Exam Certificate Verification &nbsp;</h1>

                    </div>

                </div>

            </div>

            <!-- inner page banner END -->

            <!-- Breadcrumb row -->

            <div class="breadcrumb-row">

                <div class="container">

                    <ul class="list-inline">

                        <li><a href="index.php">Home</a></li>

                        <li> Certificate Verification &nbsp;</li>

                    </ul>

                </div>

            </div>

            <!-- Breadcrumb row END -->



            <div class="clearfix">

                <div class="content-area">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-12 col-sm-12" style="min-height: 150px;">
                                <style>
                                .form-contaner {
                                    max-width: 400px;
                                    margin: 0 auto;
                                    padding: 20px;
                                    margin-bottom: 40px;
                                    background-color: lightgray;
                                    border-radius: 5px;
                                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                                }

                                form {
                                    display: flex;
                                    flex-direction: column;
                                }

                                label {
                                    margin-bottom: 5px;
                                }

                                input {
                                    padding: 10px;
                                    margin-bottom: 10px;
                                    border: 1px solid #ccc;
                                    border-radius: 3px;
                                }

                                button {
                                    padding: 10px 20px;
                                    background-color: #fff;
                                    color: blue;
                                    border: none;
                                    border-radius: 3px;
                                    cursor: pointer;
                                    font-weight: bold;
                                    font-size: 22px;
                                }

                                button:hover {
                                    background-color: #0056b3;
                                    color: #FFF;
                                }
                                </style>

                                <div class="form-contaner">
                                <?php if(isset ($msg) && !empty($msg)){?>
                                <div class="alert <?php echo ($status == 1) ? 'alert-success' : 'alert-danger' ?>" role="alert">
                                  
                                </div>
                                <?php } ?>
                                    <form action="admin/exam_certificate_verification.php" method="POST">
                                        <label for="certificate">Certificate Verification</label>
                                        <input type="text" id="certificate" name="certificate" placeholder="Enter Your Certificate No">
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                                    <!-- popup table start-->

    <style>
        /* CSS for the popup form */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .input-group {
            display: flex;
            flex-wrap: wrap;
        }

        .input-group .input-field {
            flex: 0 0 50%; /* Two columns */
            padding: 10px;
        }

        .input-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .popup-button {
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>

    <button id="open-popup" class="popup-button">Open Popup</button>

    <div id="popup" class="popup">
        <div class="popup-content">
            <h2>Certificate Verification Successfull </h2>
            <div class="input-group">
                <div class="input-field">
                    <label for="input1">Student Name</label>
                    <input type="text" id="input1" name="input1">
                </div>
                <div class="input-field">
                    <label for="input2">Enrollment No.</label>
                    <input type="text" id="input2" name="input2">
                </div>
                <div class="input-field">
                    <label for="input3">Course Name</label>
                    <input type="text" id="input3" name="input3">
                </div>
                <div class="input-field">
                    <label for="input4">Course Duration </label>
                    <input type="text" id="input4" name="input4">
                </div>
                <div class="input-field">
                    <label for="input5">Education Period</label>
                    <input type="text" id="input5" name="input5">
                </div>
                <div class="input-field">
                    <label for="input6">Grade</label>
                    <input type="text" id="input6" name="input6">
                </div>
            </div>
            <button id="close-popup" class="popup-button">Close</button>
        </div>
    </div>

    <script>
        // JavaScript to open and close the popup
        document.getElementById("open-popup").addEventListener("click", function() {
            document.getElementById("popup").style.display = "block";
        });

        document.getElementById("close-popup").addEventListener("click", function() {
            document.getElementById("popup").style.display = "none";
        });
    </script>

                                    <!-- popup table end -->


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