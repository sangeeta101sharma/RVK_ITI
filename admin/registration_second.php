<?php //include('header.php'); ?>
<?php //include("connection.php");?>
<meta charset="utf-8" />
    <title><?php //echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php //echo $favicon;?>">
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet"
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

<div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Student Registration</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Information</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Basic Details</h4>
                                    <div class="flex-shrink-0">
                                        <!-- <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                                        </div> -->
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                <label for="labelInput" class="form-label">First Name:</label>
                                                    <input type="" class="form-control" id="labelInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Last Name:</label>
                                                    <input type="" class="form-control" id="labelInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Gender:</label>
                                                    <select class="form-control" name="gender" required="required">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                <label for="exampleInputdate" class="form-label">Date Of Birth :</label>
                                                    <input type="date" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="readonlyPlaintext" class="form-label">category:</label>
                                                    <select class="form-control" name="gender" required="required">
                                                    <option value="">Select Category</option>
                <option value="">General</option>
                <option value="Male">OBC</option>
                <option value="Female">sC</option>
                <option value="Female">sT</option>
              </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="readonlyInput" class="form-label">Religion:</label>
                                                    <select class="form-control" name="religion" required="required">
                <option value="">Select Religion</option>
                <option value="Hindu">Hindu</option>
                <option value="Muslim">Muslim</option>
                <option value="Sikh">Sikh</option>
                <option value="Christian">Christian</option>
                <option value="Jain">Jain</option>
                <option value="Parsi">Parsi</option>
                <option value="Buddhism">Buddhism</option>
              </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                            <div>
                                                    <label for="valueInput" class="form-label">Contact No.:</label>
                                                    <input type="text" class="form-control" id="" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconInput" class="form-label">Email:</label>
                                                    <div class="form-icon">
                                                        <input type="email" class="form-control form-control-icon" id="iconInput" placeholder="example@gmail.com">
                                                        <i class="ri-mail-unread-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Aadhar Card No :</label>
                                                    <div class="form-icon right">
                                                        <input type="email" class="form-control form-control-icon" id="iconrightInput" placeholder="">
                                                        <i class=""></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Admission Date :</label>
                                                    <input type="date" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                            <div>
                                            <label for="valueInput" class="form-label">Father name.:</label>
                                                    <input type="text" class="form-control" id="" value="">
                                                </div>
                                                
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                <label for="valueInput" class="form-label">Father Contact No.:</label>
                                                    <input type="text" class="form-control" id="" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                <label for="valueInput" class="form-label">Father Occupation:</label>
                                                    <input type="text" class="form-control" id="" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="formtextInput" class="form-label">Mother Name :</label>
                                                    <input type="" class="form-control" id="formtextInput">
                                                    <div id="passwordHelpBlock" class="form-text">
                                                        Must be 8-20 characters long.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

 <!--end col-->
<div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="formtextInput" class="form-label">Mother Occupation :</label>
                                                    <input type="" class="form-control" id="formtextInput">
                                                    <div id="passwordHelpBlock" class="form-text">
                                                        Must be 8-20 characters long.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="colorPicker" class="form-label">Last Qulification</label>
                                                    <input type="" class="form-control" id="formtextInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Sr No.</label>
                                                    <input type="" class="form-control" id="formtextInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                          
                                            <label for="borderInput" class="form-label">Upload Photo :</label>
                                                    <input class="form-control" type="file" id="formFile">
                                            </div>
                                            <!-- end col-->
                                            <!-- <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleInputrounded" class="form-label">Rounded Input</label>
                                                    <input type="text" class="form-control rounded-pill" id="exampleInputrounded" placeholder="Enter your name">
                                                </div>
                                            </div> -->
                                            <!--end col -->
                                            <!-- <div class="col-xxl-3 col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="firstnamefloatingInput" placeholder="Enter your firstname">
                                                    <label for="firstnamefloatingInput">Floating Input</label>
                                                </div>
                                            </div> -->
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 450px;"><
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Fees Information:</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <!-- <label for="sizing-input-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="sizing-input-showcode"> -->
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    
                                    <div class="live-preview">
                                        <div class="row align-items-center g-3">
                                            <div class="col-lg-4">
                                            <div>
                                                <label for="labelInput" class="form-label">Session :</label>
                                                    <input type="" class="form-control" id="labelInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                            <div>
                                                <label for="labelInput" class="form-label">Course Name:</label>
                                                    <input type="" class="form-control" id="labelInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                            <div>
                                                <label for="labelInput" class="form-label">Trade:</label>
                                                    <input type="" class="form-control" id="labelInput">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                            <div>
                                                <label for="labelInput" class="form-label">Admission Type :</label>
                                                    <select class="form-control" name="admission_type" id="adm_type" required="required">
                <option value="">Select Option</option>
                <option value="New">New</option>
                <option value="Old">Old</option>
              </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                            <div>
                                                <label for="labelInput" class="form-label">Medium:</label>
                                                <select class="form-control" name="admission_type" id="adm_type" required="required">
                <option value="">Choose</option>
                <option value="New">English </option>
                <option value="Old">Hindi</option>
              </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                            <div>
                                                <label for="labelInput" class="form-label">

Total Fee</label>
                                                    <input type="" class="form-control" id="labelInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>





                                    
                                    <div class="d-none code-view">
                                        <pre class="language-markup">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->


                 

                   
                                

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Address Information:
</h4>
                                    <div class="flex-shrink-0">
                                        
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div>
                                            
                                           
                                                
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                        
                                                    <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
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
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                        <label class="input-group-text" for="inputGroupFile02">Graduation</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                        <label class="input-group-text" for="inputGroupFile02">12th Class</label>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                        <label class="input-group-text" for="inputGroupFile02">10th Class</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-group">
                                                        
                                                       </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        

                                       
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        

                        <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                <div class="col-lg-6">
                                <button class="btn btn-outline-secondary" style="float:right;"  type="button" >Submit  </button>
                                    </div>
                                    <div class="flex-shrink-0">
                                        
                                    </div>
                                </div><!-- end card header -->
                               
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    </div>
                    <!--end row-->

                </div> <!-- container-fluid -->
            </div><!-- End Page-content -->
<?php //include('footer.php'); ?>
