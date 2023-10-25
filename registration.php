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

                        <h1 class="text-white">Registration&nbsp;</h1>

                    </div>

                </div>

            </div>

            <!-- inner page banner END -->

            <!-- Breadcrumb row -->

            <div class="breadcrumb-row">

                <div class="container">

                    <ul class="list-inline">

                        <li><a href="index.php">Home</a></li>

                        <li>REGISTRATION&nbsp;</li>

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
                                    .contaner {
                                        max-width: 600px;
                                        margin: 0 auto;
                                        padding: 20px;
                                        background-color: #f4f4f4;
                                        border: 1px solid #ccc;
                                        border-radius: 5px;
                                        margin-bottom: 40px;
                                    }

                                    label,
                                    input,
                                    select {
                                        display: block;
                                        margin-bottom: 10px;
                                    }

                                    input[type="text"],
                                    select {
                                        width: 100%;
                                        padding: 10px;
                                    }

                                    input[type="file"] {
                                        width: 100%;
                                        padding: 10px;
                                        border: 1px solid #ccc;
                                    }

                                    .submit-button {
                                        background-color: #4CAF50;
                                        color: white;
                                        padding: 10px 20px;
                                        border: none;
                                        border-radius: 5px;
                                        cursor: pointer;
                                    }

                                    .submit-button:hover {
                                        background-color: #45a049;
                                    }
                                    </style>
                                    <div class="contaner">
                                        <h2>Submit Resume</h2>
                                        <form enctype="multipart/form-data">
                                            <label for="name">Name:</label>
                                            <input type="text" id="name" name="name" required>

                                            <label for="email">Email:</label>
                                            <input type="text" id="email" name="email" required>

                                            <label for="phone">Phone:</label>
                                            <input type="text" id="phone" name="phone" required>

                                            <label for="address">Address:</label>
                                            <input type="text" id="address" name="address" required>

                                            <label for="department">Job Applied For:</label>
                                            <select   id="job" name="job">
                                                <option value="Hardware">Hardware</option>
                                                <option value="MCSE">MCSE</option>
                                                <option value="CCNA">CCNA</option>
                                            </select>


                                            <label for="location">Desired Location:</label>
                                            <input type="text" id="location" name="location" >

                                            <label for="expected_salary">Expected Salary:</label>
                                            <input type="text" id="expected_salary" name="expected_salary" >

                                            <label for="experience">Experience (years):</label>
                                            <input type="text" id="experience" name="experience" >

                                            <label for="company_name">Previous Company Name:</label>
                                            <input type="text" id="company_name" name="company_name" >

                                            <label for="previous_salary">Salary in Previous Company:</label>
                                            <input type="text" id="previous_salary" name="previous_salary" >

                                            <label for="resume">Upload Resume:</label>
                                            <input type="file" id="resume" name="resume" >

                                            <button type="submit" onclick="submitform()" class="submit-button">Submit</button>
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
                                    var Email = document.getElementById("email").value;
                                    console.log(Email);
                                    var Phone = document.getElementById("phone").value;
                                    console.log(Phone);
                                    var Address = document.getElementById("address").value;
                                    console.log(Address);
                                    var Job = document.getElementById("job").value;
                                    console.log(Job);
                                    var Location = document.getElementById("location").value;
                                    console.log(Location);
                                     var Expected_salary = document.getElementById("expected_salary").value;
                                    console.log(Expected_salary);
                                    var Experience = document.getElementById("experience").value;
                                    console.log(Experience);
                                    var Company_name = document.getElementById("company_name").value;
                                    console.log(Company_name);
                                    var Previous_salary = document.getElementById("previous_salary").value;
                                    console.log(Previous_salary);
                                    var Resume = document.getElementById("resume").value;
                                    console.log(Resume);

                                    var dataStringer = "name=" +Name +
                                        "&email=" +Email +
                                        "&phone=" +Phone +
                                        "&address=" +Address +
                                        "&job=" +Job+
                                        "&location=" +Location +
                                        "&expected_salary=" +Expected_salary +
                                        "&experience=" +Experience +
                                        "&company_name=" +Company_name +
                                        "&previous_salary=" +Previous_salary +
                                        "&resume=" +Resume;
                                    console.log(dataStringer);
                              $.ajax({
                                        url: "admin/process/registration.php",
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