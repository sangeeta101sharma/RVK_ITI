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
    $sql= "SELECT * FROM branch_tbl where id=$id";
    $result=mysqli_query($connection,$sql) or die("Query Failed.");
    if(mysqli_num_rows($result)==0){
        header("location:branch.php?Oops! Record Not Found..");
    }
    $row=mysqli_fetch_array($result);
   /*  print_r($row);
    die(); */
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
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- content  start here -->
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Add Branch </h4>
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
                                        <form action="process/branch.php" method="POST"
                                            enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="branch_name" class="form-label">Branch Name
                                                        </label>
                                                        <input type="text" class="form-control" id="branch_name"
                                                            name="branch_name"
                                                            value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['branch_name'] : ""; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="director_name" class="form-label">Director's Name
                                                        </label>
                                                        <input type="text" class="form-control" id="director_name"
                                                            name="director_name"
                                                            value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['director_name'] : ""; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="photo" class="form-label">Upload Photo
                                                        </label>
                                                        <input type="file" class="form-control" id="photo" name="photo"
                                                            required>
                                                        <p style="color:red;"> Only JPG, JPEG and PNG type images are
                                                            accepted.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="contact" class="form-label">Contact
                                                        </label>
                                                        <input type="number" class="form-control" id="contact"
                                                            name="contact"
                                                            value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['contact'] : ""; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email
                                                        </label>
                                                        <input type="email" class="form-control" id="email" name="email"
                                                            value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['email'] : ""; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="city" class="form-label">City
                                                        </label>
                                                        <input type="text" class="form-control" id="city" name="city"
                                                            value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['city'] : ""; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label class="form-label" for="state">States</label>
                                                    <select class="form-select" id="state" name="state">
                                                        <option selected>Choose...</option>
                                                        <option value="Uatter Pradesh">Uatter Pradesh</option>
                                                        <option value="Delhi">Delhi</option>
                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="mb-3">
                                                        <label for="address" class="form-label">Address
                                                        </label>
                                                        <input type="text" class="form-control" id="address"
                                                            name="address"
                                                            value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['address'] : ""; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="pincode" class="form-label">Pincode
                                                        </label>
                                                        <input type="text" class="form-control" id="pincode"
                                                            name="pincode"
                                                            value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['pincode'] : ""; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="login_pass" class="form-label">Login Password
                                                        </label>
                                                        <input type="text" class="form-control" id="login_pass"
                                                            name="login_pass"
                                                            value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['login_pass'] : ""; ?>"
                                                            required>
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom:-150px;">

                                                    <!--end col-->
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="text-end">
                                                        <input type="hidden" class="form-control" id="action"
                                                            name="action"
                                                            value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? "UPDATE" : "INSERT" ;?>">
                                                        <input type="hidden" class="form-control" id="id" name="id"
                                                            value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? $_GET['id'] :0 ;?>">
                                                        <button type="submit" class="btn btn-primary"
                                                            value="Submit">Submit</button>
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
                                    <h4 class="card-title mb-0">VIEW ALL BRANCH </h4>
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
                                                     Branch Code &nbsp;&nbsp; </th>
                                                        <th class="sort" data-sort="customer_name">
                                                       Branch Name &nbsp;&nbsp; </th>
                                                       <th class="sort" data-sort="customer_name">
                                                       Director's Name </th>
                                                        <th class="sort" data-sort="customer_name">
                                                      Contact </th>
                                                   

                                                        <!-- <th class="sort" data-sort="action">Action</th> -->
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                <?php 
                                                $i=1;
                                                    $sql= "SELECT * FROM branch_tbl";
                                                    $result= mysqli_query($connection, $sql) or die("Query Failed.");
                                                     if(mysqli_num_rows($result)>0){
                                                     while($row = mysqli_fetch_array($result)){
                                                     ?>

                                                    <tr>
                                                        <td scope="row">
                                                        <?php echo $i++ ;?>
                                                        </td>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"></a></td>
                                                        <td class="customer_name"><?php echo $row['branch_code'];?></td>
                                                        <td class="customer_name"><?php echo $row['branch_name'];?></td>
                                                        <td class="customer_name"><?php echo $row['director_name'];?></td>
                                                        <td class="customer_name"><?php echo $row['contact'];?></td>
                                                        
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                  <div class="edit">
                                                                    <a class="btn btn-sm btn-success edit-item-btn" href="branch.php?id=<?php echo $row['id'];?>">Edit</a>
                                                                </div>  
                                                                <div class="remove">
                                                                    <a href="process/remove_branch.php?id=<?php echo $row['id'];?>"onclick="return confirm('Are you sure you want to delete?')";  class="btn btn-sm btn-danger remove-item-btn">Remove</a>
                                                                </div> 
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        }                                                             
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
        <!-- end main content-->
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