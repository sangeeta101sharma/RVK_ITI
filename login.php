<?php include('admin/process/connection.php');?>
<?php include("include/site_data.php");?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="utf-8">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $line['favicon'];?>s" />

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

            <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(pictures/regis.webp);
            background-size:cover;background-position: center;background-repeat: no-repeat;">

                <div class="container">

                    <div class="dez-bnr-inr-entry">

                        <h1 class="text-white">Login&nbsp;</h1>

                    </div>

                </div>

            </div>

            <!-- inner page banner END -->



    <style>
             .login-containe {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            margin-top:20px;
            margin-bottom:20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-containe h6 {
            margin: 0;
            padding: 0 0 20px;
            color:brown;
            font-size:17px;
            font-size:bold;
          
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="login-containe">
        <h6>Welcome To Online Test Login</h6>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="username">Log in</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Testcode</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="email">Password</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
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


<!-- Mirrored from www.gitialiganjlko.org/Page?page_id=90&page_title=Funds%20Status by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 07:54:28 GMT -->

</html>