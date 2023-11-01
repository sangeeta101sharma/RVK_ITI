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
    $sql= "SELECT * FROM students_registration_tbl where id=$id";
    $result=mysqli_query($connection,$sql) or die("Query Failed.");
    if(mysqli_num_rows($result)==0){
        header("location:students_registration.php?Oops! Record Not Found..");
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
    <link rel="shortcut icon" href="<?php echo $favicone;?>">
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
                                    <h4 class="card-title mb-0 flex-grow-1">Student Registration</h4>
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
                                        <form   action="process/students_registration.php" method="POST" enctype="multipart/form-data"
                                           >
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">College Code
                                                        </label>
                                                        <input type="text" class="form-control" id="college_code" name="college_code"
                                                        value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['college_code'] : ""; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Name
                                                        </label>
                                                        <input type="text" class="form-control" id="name" name="name"
                                                        value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['name'] : ""; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="photo" class="form-label">Upload Photo
                                                        </label>
                                                        <input type="file" class="form-control" id="photo" name="photo"
                                                            required>
                                                            <p style="color:red;"> Only JPG, JPEG and PNG type images are accepted.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="father_name" class="form-label"> Father's Name
                                                        </label>
                                                        <input type="text" class="form-control" id="father_name"
                                                            name="father_name" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['father_name'] : ""; ?>"required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="mother_name" class="form-label">Mother's Name
                                                        </label>
                                                        <input type="text" class="form-control" id="mother_name"
                                                            name="mother_name" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['mother_name'] : ""; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="aadhar_no" class="form-label">Aadhar Number
                                                        </label>
                                                        <input type="number" class="form-control" id="aadhar_no"
                                                            name="aadhar_no" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['aadhar_no'] : ""; ?>"required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="contact" class="form-label">Contact
                                                        </label>
                                                        <input type="number" class="form-control" id="contact"
                                                            name="contact" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['contact'] : ""; ?>"required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email
                                                        </label>
                                                        <input type="email" class="form-control" id="email" name="email"
                                                        value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['email'] : ""; ?>"  required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="address" class="form-label">Address
                                                        </label>
                                                        <input type="text" class="form-control" id="address"
                                                            name="address" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['address'] : ""; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <label for="course_name" class="form-label">Course Name</label>
                                                        <select class="form-control" name="course_name" id="course_name"
                                                        value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['course_name'] : ""; ?>" required> 
                                                       
                                                            <option value="Select Course Name" <?php if($row['course_name']="M.TECH") echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['course_name'] : ""; ?>>Select Course Name
                                                            </option>
                                                            <option value="ITI" <?php if($row['course_name']=="ITI") echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['course_name'] : "";?>>ITI</option>
                                                            <option value="Polytechnic" <?php if($row['course_name']="Polytechnic") echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['course_name'] : ""; ?>>Polytechnic</option>
                                                            <option value="B.TECH"  <?php if($course_name="B.TECH") echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['course_name'] : ""; ?>>B.TECH</option>
                                                            <option value="M.TECH"  <?php if($course_name="M.TECH") echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['course_name'] : ""; ?>>M.TECH</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div>
                                                        <label for="course_duration" class="form-label">Course
                                                            Duration(Year)</label>
                                                        <select class="form-control" name="course_duration"
                                                            id="course_duration" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['course_duration'] : ""; ?>" required>
                                                            <option value="Select Course Duration" <?php if($course_name="course_duration") echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['course_duration'] : "";{echo "selected";} ?>>Select Course
                                                                Duration</option>
                                                            <option value="1" <?php if($course_duration="1") echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['course_duration'] : "";{echo "selected";} ?>>1 year</option>
                                                            <option value="2" <?php if($course_duration="2") echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['course_duration'] : "";{echo "selected";} ?>>2 year</option>
                                                            <option value="3" <?php if($course_duration="3") echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['course_duration'] : "";{echo "selected";} ?>>3 year</option>
                                                            <option value="4" <?php if($course_duration="4") echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['course_duration'] : "";{echo "selected";} ?>>4 year</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div>
                                                        <label for="trade" class="form-label">Trade </label>
                                                        <select class="form-control" name="trade" id="trade">
                                                            <option value="Select Trade">Select Trade</option>
                                                            <option value="ITI Fitter"<?php if($trade="ITI Fitter") echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['trade'] : "";{echo "selected";}?>>ITI Fitter</option>
                                                            <option value="ITI Electrician" <?php if($trade="ITI Electrician") echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['trade'] : "";{echo "selected";}?>>ITI Electrician</option>
                                                            <option value="ITI Mechanical" <?php if($trade="ITI Mechanical") echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['trade'] : "";{echo "selected";} ?>>ITI Mechanical</option>

                                                        </select>
                                                    </div>
                                                </div>

                     <div class="row" style="margin-bottom:-150px;">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Upload Document:</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <!-- <label for="input-group-custom-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="input-group-custom-showcode"> -->
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <!-- <p class="text-muted">Input groups include support for custom selects and custom file inputs. Browser default versions of these are not supported.</p> -->
                                    <div class="live-preview">
                                        <div>
                                            <!-- <h5 class="fs-15 mb-3">Select</h5> -->
                                            <div class="row g-3">
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                    <input type="file" class="form-control" id="graduation" name="graduation">
                                                        <label class="input-group-text" for="inputGroupFile02">Graduation</label>
                                                          <p style="color:red;padding-top:8px;"> &nbsp;&nbsp;&nbsp;Only .doc and pdf type files are accepted.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                    <input type="file" class="form-control" id="12_class" name="class_12">
                                                        <label class="input-group-text" for="inputGroupFile02">12th Class</label>
                                                          <p style="color:red;padding-top:8px;">&nbsp;&nbsp;&nbsp; Only .doc and pdf type files are accepted.</p>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                    <input type="file" class="form-control" id="10_class" name="class_10">
                                                        <label class="input-group-text" for="inputGroupFile02">10th Class</label>
                                                          <p style="color:red;padding-top:8px;"> &nbsp;&nbsp;&nbsp;Only .doc and pdf type files are accepted.</p>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <input type="hidden" class="form-control" id="action" name="action" value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? "UPDATE" : "INSERT" ;?>">
                                                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? $_GET['id'] :0 ;?>">
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
                                    <h4 class="card-title mb-0">VIEW REGISTARD STUDENTS </h4>
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
                                                       Enrollment No. &nbsp;&nbsp; </th>
                                                        <th class="sort" data-sort="customer_name">
                                                       Name &nbsp;&nbsp; </th>
                                                       <th class="sort" data-sort="customer_name">
                                                       Photo </th>
                                                        <th class="sort" data-sort="customer_name">
                                                      Father's Name</th>
                                                       <th class="sort" data-sort="customer_name">
                                                        Mother's Name &nbsp;&nbsp;</th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Aadhar No </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Contact </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Email </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Address </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Course Name </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Course Duration </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Trade </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Graduation </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        12th Class </th>
                                                        <th class="sort" data-sort="customer_name">
                                                      10th Class </th>

                                                        <!-- <th class="sort" data-sort="action">Action</th> -->
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                <?php 
                                                $i=1;
                                                    $sql= "SELECT * FROM students_registration_tbl";
                                                    $result= mysqli_query($connection, $sql) or die("Query Failed.");
                                                     if(mysqli_num_rows($result)>0){
                                                     while($row = mysqli_fetch_array($result)){
                                                     ?>

                                                    <tr>
                                                        <td scope="row">
                                                        <?php echo $i++ ;?>
                                                        </td>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"></a></td>
                                                        <td class="customer_name"><?php echo $row['enrollment_no'];?></td>
                                                        <td class="customer_name"><?php echo $row['name'];?></td>
                                                        <td class="customer_name"><?php echo $row['photo'];?></td>
                                                        <td class="customer_name"> <?php echo $row['father_name'];?></td>
                                                        <td class="customer_name"><?php echo $row['mother_name'];?></td>
                                                        <td class="customer_name"> <?php echo $row['aadhar_no'];?></td>
                                                        <td class="customer_name"><?php echo $row['contact'];?></td>
                                                        <td class="customer_name"><?php echo $row['email'];?></td>
                                                        <td class="customer_name"><?php echo $row['address'];?></td>
                                                        <td class="customer_name"><?php echo $row['course_name'];?></td>
                                                        <td class="customer_name"><?php echo $row['course_duration'];?></td>
                                                        <td class="customer_name"><?php echo $row['trade'];?></td>
                                                        <td class="customer_name"><?php echo $row['graduation'];?></td>
                                                        <td class="customer_name"><?php echo $row['class_12'];?></td>
                                                        <td class="customer_name"><?php echo $row['class_10'];?></td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                  <div class="edit">
                                                                    <a class="btn btn-sm btn-success edit-item-btn" href="students_registration.php?id=<?php echo $row['id'];?>">Edit</a>
                                                                </div>  
                                                                <div class="remove">
                                                                    <a href="process/students_registration.php?id=<?php echo $row['id'];?>"onclick="return confirm('Are you sure you want to delete?')";  class="btn btn-sm btn-danger remove-item-btn">Remove</a>
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