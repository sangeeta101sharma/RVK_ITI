
<?php include("include/config.php");?>
<?php include("process/connection.php");?>
<?php include("include/function.php");?>
<?php
session_start();

if(!isLoggedIn()){
    
    header("location:login.php?status=2&msg=Login First");
    exit();
}

?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

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
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Custom country select input</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-lg-6">
                                            <div>
                                                <label class="form-label">Simple select example</label>
                                                <div data-input-flag data-option-flag-name>
                                                    <input type="text" class="form-control rounded-end flag-input" readonly placeholder="Select country" data-bs-toggle="dropdown" aria-expanded="false" />
                                                    <div class="dropdown-menu w-100">
                                                        <div class="p-2 px-3 pt-1 searchlist-input">
                                                            <input type="text" class="form-control form-control-sm border search-countryList" placeholder="Search country name or country code..." />
                                                        </div>
                                                        <ul class="list-unstyled dropdown-menu-list mb-0"></ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <label class="form-label">Select input flag with img & name</label>
                                                <div data-input-flag data-option-flag-img-name>
                                                    <input type="text" class="form-control rounded-end flag-input" readonly value="United States" placeholder="Select country" data-bs-toggle="dropdown" aria-expanded="false" />
                                                    <div class="dropdown-menu w-100">
                                                        <div class="p-2 px-3 pt-1 searchlist-input">
                                                            <input type="text" class="form-control form-control-sm border search-countryList" placeholder="Search country name or country code..." />
                                                        </div>
                                                        <ul class="list-unstyled dropdown-menu-list mb-0"></ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <label class="form-label">Search input false in dropdown menu</label>
                                                <div data-input-flag data-option-flag-name data-search-input="false">
                                                    <input type="text" class="form-control rounded-end flag-input" readonly value="" placeholder="Select country" data-bs-toggle="dropdown" aria-expanded="false" />
                                                    <div class="dropdown-menu w-100">
                                                        <div class="p-2 px-3 pt-1 searchlist-input">
                                                            <input type="text" class="form-control form-control-sm border search-countryList" placeholder="Search country name or country code..." />
                                                        </div>
                                                        <ul class="list-unstyled dropdown-menu-list mb-0"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div>
                                                <label class="form-label">Select input with buttons & Flag with number</label>
                                                <div class="input-group" data-input-flag>
                                                    <button class="btn btn-light border" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/images/flags/us.svg" alt="flag img" height="20" class="country-flagimg rounded"><span class="ms-2 country-codeno">+ 1</span></button>
                                                    <input type="text" class="form-control rounded-end flag-input" value="" placeholder="Enter number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                                    <div class="dropdown-menu w-100">
                                                        <div class="p-2 px-3 pt-1 searchlist-input">
                                                            <input type="text" class="form-control form-control-sm border search-countryList" placeholder="Search country name or country code..." />
                                                        </div>
                                                        <ul class="list-unstyled dropdown-menu-list mb-0"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <label class="form-label">Select input with buttons & Flag</label>
                                                <div class="input-group" data-input-flag data-option-countrycode="false">
                                                    <button class="btn btn-light border" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/images/flags/us.svg" alt="flag img" height="20" class="country-flagimg rounded"><span class="ms-2 country-codeno">+ 1</span></button>
                                                    <input type="text" class="form-control rounded-end flag-input" value="" placeholder="Enter number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                                    <div class="dropdown-menu w-100">
                                                        <div class="p-2 px-3 pt-1 searchlist-input">
                                                            <input type="text" class="form-control form-control-sm border search-countryList" placeholder="Search country name or country code..." />
                                                        </div>
                                                        <ul class="list-unstyled dropdown-menu-list mb-0"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                 <!-- start row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Auto Complete</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div>
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="autoCompleteFruit" class="text-muted">Search Result of Fruit Names</label>
                                                    <input id="autoCompleteFruit" type="text" dir="ltr" spellcheck=false autocomplete="off" autocapitalize="off">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="autoCompleteCars" class="text-muted">Search Result of Car Names</label>
                                                    <input id="autoCompleteCars" type="text" dir="ltr" spellcheck=false autocomplete="off" autocapitalize="off">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
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