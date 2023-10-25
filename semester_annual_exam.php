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

            <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(pictures/exam.png);
            background-size:cover;background-position: center;background-repeat: no-repeat;">

                <div class="container">

                    <div class="dez-bnr-inr-entry">

                        <h1 class="text-white">Apply For Semester/ Annual Exam &nbsp;</h1>

                    </div>

                </div>

            </div>

            <!-- inner page banner END -->

            <!-- Breadcrumb row -->

            <div class="breadcrumb-row">

                <div class="container">

                    <ul class="list-inline">

                        <li><a href="index.php">Home</a></li>

                        <li>Exam &nbsp;</li>

                    </ul>

                </div>

            </div>

            <!-- Breadcrumb row END -->



            <div class="clearfix">

                <div class="content-area">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-12 col-sm-12" style="min-height: 150px;">
                                <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
                                <div class="container">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="name"
                                                        name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="contact" class="form-label">Contact</label>
                                                    <input type="text" class="form-control" id="contact"
                                                        name="contact">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="email"
                                                        name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="course" class="form-label">Course</label>
                                                    <select class="form-select" id="course" name="course">
                                                        <option value="Select Course">Select Course</option>
                                                        <option value="ITI FITTER">ITI FITTER</option>
                                                        <option value="TIT ELECTRICIAN">ITI ELECTRICIAN</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <textarea class="form-control" id="address" name="address"
                                                rows="4"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message" class="form-label">Message</label>
                                            <textarea class="form-control" id="message" name="message"
                                                rows="4"></textarea>
                                        </div>
                                        <button type="submit" onclick="submitform()" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>

                                <script
                                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
                                </script>
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
                                    var Course = document.getElementById("course").value;
                                    console.log(Course);
                                    var Address = document.getElementById("address").value;
                                    console.log(Address);
                                    var Message = document.getElementById("message").value;
                                    console.log(Message);
                        
                                    var dataStringer = "name=" +Name+
                                        "&contact=" +Contact+
                                        "&email=" +Email+
                                        "&course=" +Course+
                                        "&address=" +Address+
                                        "&message=" +Message;
                                    console.log(dataStringer);
                              $.ajax({
                                         url: "admin/process/semester_annual_exam.php",
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