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
                        <h1 class="text-white">Placed Students &nbsp;</h1>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="index.php">Home</a></li>
                        <li>Placed Students &nbsp;</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
            <div class="clearfix">
                <div class="content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12" style="min-height: 150px;">
                                
                                <!-- card Start -->
                                <style>
                                  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap');
.card {
  position: relative;
  width: 350px;
  height: 190px;
  background: #333;
  transition: 0.5s;
  float:left;
  margin-top:20px;
  margin-bottom:20px;
  margin:10px;
}

.card:hover {
  height: 450px;
}

.card .lines {
  position: absolute;
  inset: 3px;
  background: #000;
  overflow: hidden;
}

.card .lines::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 600px;
  height: 120px;
  background: linear-gradient(transparent, #45f3ff, #45f3ff, #45f3ff, transparent);
  animation: animate 4s linear infinite;
}

.card .lines::after {
  content: '';
  position: absolute;
  inset: 3px;
  background: #292929;
}

.card .imageBox {
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 150px;
  height: 150px;
  background: #000;
  transition: 0.5s;
  z-index: 10;
  overflow: hidden;
}

.card:hover .imageBox {
  width: 250px;
  height: 250px;
}

.card .imageBox::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 500px;
  height: 150px;
  transform: translate(-50%, -50%);
  background: linear-gradient(transparent, #ff3c7b, #ff3c7b, #ff3c7b, transparent);
  animation: animate 4s linear infinite;
}

.card .imageBox::after {
  content: '';
  position: absolute;
  inset: 3px;
  background: #292929;
}

.card .imageBox img {
  position: absolute;
  top: 10px;
  left: 10px;
  height: 10px;
  width: calc(100% - 20px);
  height: calc(100% - 20px);
  filter: grayscale(1);
  transition: 0.5s;
  z-index: 1;
}

.card:hover .imageBox img {
  filter: grayscale(0);
}


@keyframes animate {
  0% {
    transform: translate(-50%, -50%) rotate(0deg);
  }
  100% {
    transform: translate(-50%, -50%) rotate(360deg);
  }
}

.card .content {
  position: absolute;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  transition: 0.5s;
}

.card .content .details {
  width: 100%;
  text-align: center;
  transition: 0.5s;
  transform: translateY(115px);
}

.card:hover .content .details {
  transform: translateY(100px);
}

.card .content .details h2 {
  font-size: 1.2rem;
  font-weight: 600;
  color: #45f3ff;
  line-height: 1.2rem;
}

.card .content .details h2 span {
  font-size: 0.75rem;
  font-weight: 500;
  color: #fff;
}

.card .content .details .info {
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  align-items: center;
  margin: 30px 0;
}

.card .content .details .info h3 {
  font-size: 1rem;
  color: #45f3ff;
  line-height: 1.2rem;
  font-weight: 600;
  text-align: center;
}

.card .content .details .info h3 span {
  font-size: 0.8rem;
  font-weight: 400;
  color: #fff;
}

.card .content .details .actions {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 20px
}

.card .content .details .actions button {
  min-width: 100px;
  padding: 10px 0;
  border: none;
  outline: none;
  background: #45f3ff;
  font-size: 1rem;
  font-weight: 500;
  color: #222;
  cursor: pointer;
  opacity: 0.8;
  transition: 0.5s;
}

.card .content .details .actions button:nth-child(2) {
  background: #fff;
}

.card .content .details .actions button:hover {
  opacity: 1;
}

.card .content .details .actions button:active {
  opacity: 1;
  transform: scale(0.98);
}
                                </style>
            
            <?php
$i=1;
$sql= "SELECT * FROM  placed_student_tbl";
$result= mysqli_query($connection, $sql) or die("Query Failed.");
while($row = mysqli_fetch_array($result)){
?>

  <div class="card">
    <div class="lines"></div>
    <div class="imageBox">
      <img src="<?php echo $row['image'];?>" alt="avatar">
    </div>
    <div class="content">
      <div class="details">
        <h2>  <?php echo $row['doctor'];?>  </h2>
        <h2><span><b><i>Position: </i></b><?php echo $row['specialist'];?></span></h2>
        <h2><span><b><i>Contact:  <?php echo $row['contact'];?></i></b></span></h2>
        <h2><span><b><i>Email: <?php echo $row['weekly'];?></i></b></span></h2>
        <h2><span><b><i>Address: <?php echo $row['morning'];?></i></b></span></h2>
      </div>
    </div>
  </div>
<?php } ?>
 

                                <!-- card end -->
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