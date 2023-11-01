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
    $sql= "SELECT * FROM  general_team_tbl where id=$id";
    $result= mysqli_query($connection, $sql) or die("Query Failed.");
    if(mysqli_num_rows($result)==0){
         header("location:registration.php?status=2&msg=Oops! Record not found..");
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
                                       
                    <!-- Show table Start -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">VIEW STUDENTS REGISTRATION DETAILS</h4>
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
                                                        Sr.no
                                                        </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Name </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Email </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Phone &nbsp;&nbsp;&nbsp;</th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Address </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Job </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Desired Location </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Expected Salary </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Experience(In Year) </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Previous Company </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Previous Salary </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Resume </th>
                                                        <!-- <th class="sort" data-sort="action">Action</th> -->
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
<?php
$i=1;
$sql= "SELECT * FROM  registration_tbl";
$result= mysqli_query($connection, $sql) or die("Query Failed.");
while($row = mysqli_fetch_array($result)){
?>
                                                    <tr>
                                                    <td scope="row">
                                                        <?php echo $i++ ;?>
                                                        </td>
                                                        <td class="id" style="display:none;">
                                                        <a href="javascript:void(0);" class="fw-medium link-primary">
                                                        </a>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['name'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['email'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['phone'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['address'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['job'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['location'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['expected_salary'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['experience'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['company_name'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['previous_salary'];?>
                                                        </td>
                                                        <!-- <td class="customer_name"> 
                                                        <?php //echo $row['resume'];?>
                                                        </td> -->
                                                        <td>
                                                             <a class="btn btn-success" href="process/<?php echo trim($row['resume']) ;?>" target="_blank"  download class="btn btn-sm btn-light">Download</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                              <!--   <div class="edit">
                                                                    <a class="btn btn-sm btn-success edit-item-btn" href="registration.php?id=<?php echo $row['id']?>">Update</a>
                                                                </div>  -->
                                                                <div class="remove">
                                                                    <a href="process/remove_registration.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete?')";  class="btn btn-sm btn-danger remove-item-btn">Remove</a>
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