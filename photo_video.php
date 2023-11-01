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
            <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(pictures/placed_stu.jpg);
            background-size:cover;background-position: center;background-repeat: no-repeat;">
                <div class="container">
                    <div class="dez-bnr-inr-entry">
                        <h1 class="text-white">Videos &nbsp;</h1>
                    </div>
                </div>
            </div>
             
                        <!-- Breadcrumb row -->

                        <div class="breadcrumb-row">

<div class="container">

    <ul class="list-inline">

        <li><a href="index.php">Home</a></li>

        <li>Video Gallery </li>

    </ul>

</div>

</div>

<!-- Breadcrumb row END -->



                    <div class="container">
                        <div class="row">
                        <?php
                            $i=1;
                            $sql= "SELECT * FROM video_tbl";
                            $result= mysqli_query($connection, $sql) or die("Query Failed.");
                            while($row = mysqli_fetch_array($result)){
                        ?>
                            <div class="col-lg-3 col-sm-12 m-b30 ">
                                <div class="border-1 p-a15 text-center text-white ">
                                    <p class="m-b0"><?php echo $row['video'];?></p>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
           
            <!-- Content END-->
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

</html>