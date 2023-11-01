<?php 
session_start();
include("include/config.php");?>
<?php include("process/connection.php");?>
<?php include("include/function.php");?>
<?php


if(!isLoggedIn()){
    
    header("location:login.php?status=2&msg=Login First");
    exit();
}
?>
<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id=$_GET['id'];
    $sql= "SELECT * FROM  fitter_tbl where id=$id";
    $result= mysqli_query($connection, $sql) or die("Query Failed.");
    if(mysqli_num_rows($result)==0){
         header("location:fitter.php?status=2&msg=Oops! Record not found..");
    }
    $row = mysqli_fetch_array($result);
}
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
data-sidebar-image="none" data-preloader="disable">
<head>
    <meta charset="utf-8" />
    <title><?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo $favicon;?>">
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- header start -->
        <?php include("include/header.php");?>
        <!-- header end -->

        <!-- menu start -->
        <?php include("include/menu.php");?>
        <!-- menu end -->

        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- content  start here -->

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">ITI FITTER </h4>

                                </div><!-- end card header -->

                                <div class="card-body">
                                    <?php if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){?>
                                    <div class="alert <?php echo ($_SESSION['status']== 1) ? 'alert-success' : 'alert-danger' ?>"
                                        role="alert">

                                        <?php echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                        unset($_SESSION['status']);
                                        ?>

                                    </div>
                                    <?php } ?>
                                    <div class="live-preview">
                                        <form action="process/fitter.php" enctype="multipart/form-data"
                                            method="POST">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="photoUpload" class="form-label"> Upload File
                                                        </label>
                                                        <input type="file" class="form-control" id="image"
                                                            name="image" required>
                                                            <p style="color:red;"> Only DOC  and PDF  File type  are accepted.</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label"> Univ. Name</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['name'] : ""; ?>" required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="contact" class="form-label">Courses</label>
                                                        <input type="text" class="form-control" id="contact"
                                                            name="contact"  value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['contact'] : ""; ?>" required>
                                                    </div>
                                                </div>
                                                  <!--end col-->
                                                  <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="address" class="form-label">Eligibilty</label>
                                                        <input type="text" class="form-control" id="address"
                                                            name="address"  value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['address'] : ""; ?>" required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="donate_field" class="form-label">Duration(In Month) </label>
                                                        <input type="text" class="form-control" id="donate_field"
                                                            name="donate_field"  value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['donate_field'] : ""; ?>" required>
                                                    </div>
                                                </div>
                                                <!--end col
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="donate_amount" class="form-label">Donate Amount</label>
                                                        <input type="text" class="form-control" id="donate_amount"
                                                            name="donate_amount"  value="<?php //echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['donate_amount'] : ""; ?>" >
                                                    </div>
                                                </div>-->
                                                <!--end col
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="donate_articles" class="form-label">Donate Articles</label>
                                                        <input type="text" class="form-control" id="donate_articles"
                                                            name="donate_articles"  value="<?php //echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['donate_articles'] : ""; ?>" >
                                                    </div>
                                                </div>-->
                                                <!--end col
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="date" class="form-label">Date</label>
                                                        <input type="date" class="form-control" id="date"
                                                            name="date"  value="<?php// echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['date'] : ""; ?>" >
                                                    </div>
                                                </div>-->
                                              
                                                <!--end col-->
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                <input type="hidden" id="action" name="action" value="<?php echo(isset($_GET['id']) && !empty($_GET['id'])) ?"UPDATE":"INSERT";?>">
                                                 <input type="hidden" id="id" name="id" value="<?php echo(isset($_GET['id']) && !empty($_GET['id'])) ?$_GET['id']:0 ;?>">
                                                    <button type="submit" class="btn btn-primary"
                                                        value="submit">Submit</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                    </div>
                                    <!--end row-->
                                    </form>
                                </div>
                                <div class="d-none code-view">
                                    <pre class="language-markup" style="height: 375px;">

                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->


                    </div>

                    
                    <!-- Show table Start -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">VIEW DOCTOR LIST DETAILS</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="listjs-table" id="customerList">
                                        <div class="row g-4 mb-3">
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-sm-end">
                                                    <div class="search-box ms-2">
                                                        <input type="text" class="form-control search" placeholder="Search...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive table-card mt-3 mb-1">
                                            <table class="table align-middle table-nowrap" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                    <th class="sort" data-sort="customer_name">
                                                        Sr.no &nbsp;&nbsp;&nbsp;</th>
                                                        <th class="sort" data-sort="customer_name">
                                                         Upload File &nbsp;&nbsp;&nbsp;</th>
                                                        <th class="sort" data-sort="customer_name">
                                                       Univ. Name&nbsp;&nbsp;&nbsp; </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Courses&nbsp;&nbsp;&nbsp; </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Eligibilty &nbsp;&nbsp;&nbsp;</th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Duration (In Month) &nbsp;&nbsp;&nbsp; </th>
                                                      <!--   <th class="sort" data-sort="customer_name">
                                                        Donation Amount&nbsp;&nbsp;&nbsp; </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Donation Articles&nbsp;&nbsp;&nbsp; </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Date &nbsp;&nbsp;&nbsp; </th> -->
                                                        <!-- <th class="sort" data-sort="action">Action</th> -->
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
<?php
$i=1;
$sql= "SELECT * FROM  fitter_tbl";
$result= mysqli_query($connection, $sql) or die("Query Failed.");
while($row = mysqli_fetch_array($result)){
?>
                                                    <tr>
                                                    <td scope="row">
                                                        <?php echo $i++ ;?>
                                                        </td>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"></a></td>
                                                        <td class="customer_name">
                                                        <a href="process/<?php echo $row['image'];?>" target="_blank">
                                                            <button style="background:gray;color:black;border-radius:5px;">
                                                            <?php echo $row['image'];?>
                                                            </button>
                                                        </a>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['name'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['contact'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['address'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['donate_field'];?>
                                                        </td>
                                                       <!--  <td class="customer_name"> 
                                                        <?php //echo $row['donate_amount'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php// echo $row['donate_articles'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php //echo $row['date'];?>
                                                        </td> -->
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <a class="btn btn-sm btn-success edit-item-btn" href="fitter.php?id=<?php echo $row['id']?>">Update</a>
                                                                </div> 
                                                                <div class="remove">
                                                                    <a href="process/remove_fitter.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete?')";  class="btn btn-sm btn-danger remove-item-btn">Remove</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <!-- Show table end -->
<!-- content end here -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- footer start -->
            <?php include("include/footer.php");?>
            <!-- footer end -->
        </div>
        <!-- end Main content-->

    </div>
    <!-- END layout-wrapper -->

    <!--preloader-->
    <?php
    include("include/preloader_custome.php");
    ?>

    <!-- Theme Settings -->
    <?php
    include("include/theme_setting.php");
    ?>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>
    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <!-- Swiper Js -->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
    <!-- CRM js -->
    <script src="assets/js/pages/dashboard-crypto.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>
</html>