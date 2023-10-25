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

            <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(pictures/method.png);
            background-size:cover;background-position: center;background-repeat: no-repeat;">

                <div class="container">

                    <div class="dez-bnr-inr-entry">

                        <h1 class="text-white">Tech Methods</h1>

                    </div>

                </div>

            </div>

            <!-- inner page banner END -->

            <!-- Breadcrumb row -->

            <div class="breadcrumb-row">

                <div class="container">

                    <ul class="list-inline">

                        <li><a href="index.php">Home</a></li>

                        <li>Tech Method </li>

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
	   	  <div class="terms">
            <h1>Rules and Regulation</h1>
			  				<ul class="terms_list1">
				<li>After admission every Student is issued an identity card.</li>
				<li>A student is always required to keep his/her ID card whenever he/she is in the institute.</li>
				<li>The student who has not paid his/her fees on time is considered to be a fee defaulter.</li>
				<li>A fee defaulter is not authorized to attend the class and can only resume in his/her batch after paying the fees Non Payment of The Fees.</li>
				<li>The institute is not liable to arrange for the cover up sessions, the student has missed because of</li>
				<li>Fee once paid is neither refundable nor transferrable.</li>
				<li>Every student is expected to maintain 100 % attendance record to get full benefit of the course. However minimum 90 % attendance should be maintained at any cost.</li>
				<li>Smoking/Chewing Pan/Tobacco is strictly prohibited and fine is Rs. 500.00</li>
				<li>Student should be in discipline and should maintain the decorum of the Study Centre</li>
				
				</ul>
				
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