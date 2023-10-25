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

            <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(pictures/gallery.jpg);
            background-size:cover;background-position: center;background-repeat: no-repeat;">

                <div class="container">

                    <div class="dez-bnr-inr-entry">

                        <h1 class="text-white">Photo GALLERY </h1>

                    </div>

                </div>

            </div>

            <!-- inner page banner END -->

            <!-- Breadcrumb row -->

            <div class="breadcrumb-row">

                <div class="container">

                    <ul class="list-inline">

                        <li><a href="index.php">Home</a></li>

                        <li>Photo Gallery </li>

                    </ul>

                </div>

            </div>

            <!-- Breadcrumb row END -->



            <div class="clearfix">

                <div class="content-area">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-12 col-sm-12" style="min-height: 150px;">

                                <div class="container">
                                    <div class="section-full bg-white content-inner our-achievements">

                                        <div class="container">

                                            <div class="section-head text-center ">

                                                <h2 class="h2 text-uppercase"> OUR GALLERY</h2>

                                                <div class="dez-separator-outer ">

                                                    <div class="dez-separator bg-primary style-liner"></div>

                                                </div>

                                            </div>

                                            <div class="section-content text-center ">

                                                <div class="clearfix">

                                                    <ul id="masonry"
                                                        class="row dez-gallery-listing gallery-grid-4 m-b0 gallery lightgallery"
                                                        style="position: relative; height: 236px;">
                                                        <?php
$i=1;
$sql= "SELECT * FROM gallery_tbl";
$result= mysqli_query($connection, $sql) or die("Query Failed.");
while($row = mysqli_fetch_array($result)){
?>
                                                        <li class="card-container col-lg-3 col-lg-3 col-sm-6 jumping"
                                                            style="position: absolute; left: 0px; top: 0px;">

                                                            <div class="dez-gallery-box">

                                                                <div
                                                                    class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">
                                                                    <a href="javascript:void(0);">
                                                                        <img width="480" height="430"
                                                                            src="<?php echo $row['gallery'];?>" alt="">
                                                                    </a>

                                                                    <div class="overlay-bx">
                                                                        <h5 style="color:white;padding-top:5px;"><?php echo $row['remark'];?></h5>
                                                                        <div class="overlay-icon">
                                                                            <span data-exthumbimage="<?php echo $row['gallery'];?>"
                                                                                data-src="<?php echo $row['gallery'];?>"
                                                                                class="icon-bx-xs check-km">
                                                                                <i class="fa fa-picture-o"></i>
                                                                            </span>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </li>
                                                        <?php }?>
                                                    </ul>

                                                </div>

                                                <div class="m-tb30"> <a
                                                        href="https://www.gitialiganjlko.org/index/album"
                                                        class="site-button">View More</a> </div>

                                            </div>

                                        </div>

                                    </div>
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