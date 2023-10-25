<?php include("include/site_data.php");?>
  <header class="site-header header-style-6 dark mo-left">
      <!-- main header -->
      <div class="top-bar" style="background:crimson;">
          <!--   <div class="container top-bar-crve"> -->
          <div class="row justify-content-between">
              <div class="dez-topbar-left">
                  <ul class="social-line text-center pull-right" style="padding-left:6rem;color:black">

                      <li><strong><b>Helpline No.</b></strong><a href="tel:">&nbsp; -<span>(0532)-2694845 </span> </a>
                      </li>

                      <li><a href="mailto:"><i class="fa fa-volume-control-phone" aria-hidden="true"></i><span>
                      <?php echo $line['contact'];?></span> </a> </li>

                  </ul>

              </div>

              <div class="dez-topbar-right ">

                  <!--<ul class="social-line text-center pull-right">-->

                  <!--  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>-->

                  <!--  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>-->

                  <!--</ul>-->

                  <ul class="social-line text-center pull-right">

                      <!--

              <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>

              <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>

-->



                      <li class="hidden-xs">

                          <button id="btn-decrease" class="font-grid">

                              <article><i class="fa fa-facebook" aria-hidden="true"></i></article>

                          </button>

                      </li>

                      <li class="hidden-xs">

                          <button id="btn-orig" class="font-grid">

                              <article><i class="fa fa-twitter" aria-hidden="true"></i></article>

                          </button>

                      </li>

                      <li class="hidden-xs">

                          <button id="btn-increase" class="font-grid">

                              <article><i class="fa fa-linkedin" aria-hidden="true"></i></article>

                          </button>

                      </li>

                      <li id="switcher">

                          <button id="blueButton" class="font-grid blue">

                              <article><i class="fa fa-whatsapp" aria-hidden="true"></i></article>

                          </button>

                          <button id="blueButton" class="font-grid blue">

                              <article><i class="fa fa-instagram" aria-hidden="true"></i></article>

                          </button>

                      </li>

                  </ul>

              </div>

          </div>

      </div>

      </div>
      <style>
      .nav>li>a {
          position: relative;
          display: block;
          padding: 10px 15px;
      }

      .navbar-nav>li>a {
          padding-top: 1px;
          padding-bottom: 10px;
          line-height: 20px;
      }

      .navbar-default .navbar-nav>li>a {
          color: #000;
          font-weight: 300;
      }

      .navbar-default .navbar-nav>li>a {
          color: #777;
      }

      .navbar-nav>li>a {
          /* padding: 10px 15px; */
          text-align: center;
          color: #fff;
          font-weight: 100;
          font-size: 15px;
      }

      .navbar-nav>li>a {
          /* padding: 10px 15px; */
          text-align: center;
          color: black;
          font-weight: 100;
          font-size: 15px;
      }

      .navbar-default .navbar-nav>li>a span {
          display: block;
      }

      * {
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          box-sizing: border-box;
      }

      .navbar-default .navbar-nav>li>a {
          color: #000;
          font-weight: 300;
      }

      .navbar-default .navbar-nav>li>a span {
          display: block;
      }

      .open>a:focus,
      .nav>li>a:hover,
      .nav>li>a:focus {
          background-color: crimson !important;
          border-color: #2f374c;
      }

      .fa {
          display: inline-block;
          font-family: FontAwesome;
          font-style: normal;
          font-weight: normal;
          line-height: 1;
          -webkit-font-smoothing: antialiased;
          margin-right: 5px;
      }

      a {
          color: black;
          text-decoration: none;
      }

      .header-nav .nav>li>a {
          padding: 15px;
          color: white;
      }

      .header-bar {
          background: crimson;
      }
      @media only screen and (max-width: 600px) {
  .header-bar {
    background-color: crimson;
    
  }
  @media only screen and (max-width: 600px) {
    .header-nav .nav>li>a{
  color: black;
  }
}
}
.is-fixed .main-bar {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 459589;
    display: inline-block;
}
/* .is-fixed .main-bar {
 
  
  transform-origin: 0% 0%; 
  margin-bottom: 0;

  position: sticky;
  top: 0;
  left: 50px;
} */
      </style>
      <div class="container clearfix">

          <div class="logo-header mostion"><a href="index.php"><img src="pictures/logo.png" alt="header"></a></div>


          <!-- <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1"> -->
         <!--  <ul class="nav d-flex" style="float: inline-end;">
              <li class="dropdown">
                  <a href="nc_master/Exam/index.php" target="_blank"><i class="fa fa-user"></i><span>Student
                          Login</span></a>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                          class="fa fa-calendar"></i><span>Apprentiship</span></a>
                  <ul class="dropdown-menu" style="display: none;">
                      <li><a href="#" target="_blank">Registration in NCVT</a></li>
                      <li><a href="">Registration in College</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="resume.php"><i class="fa fa-globe"></i><span>Job</span></a>
              </li>
              <li class="dropdown">
                  <a href="enquiry.php"><i class="fa fa-pencil"></i><span>Enquiry</span></a>
              </li>
          </ul> -->
      </div>





      </div>
      </div>

      <div class="sticky-header main-bar-wraper navbar-expand-lg navbar-expand-lg">

          <div class="main-bar clearfix">

              <div class="header-bar">

                  <div class="container clearfix">

                      <div class="col-lg-12 col-sm-12 footer-col-12">



                          <span class="mobile-view">Menu</span>

                          <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                              data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                              aria-expanded="false" aria-label="Toggle navigation"> <span></span> <span></span>
                              <span></span> </button>



                          <!-- main nav -->

                          <div class="header-nav navbar-collapse collapse justify-content-center"
                              id="navbarNavDropdown">

                              <ul class="nav navbar-nav">

                                  <li class="active"> <a href="index.php">Home </a> </li>



                                  <li class="dropdown"><a target="_self" href="About%20GITI.php" title="Portfolio"
                                          data-toggle="dropdown" data-hover="dropdown" id="menu_item_Portfolio"
                                          data-ref="#" class="dropdown-toggle">About Us<span class="caret"></span></a>
                                      <ul aria-labelledby="menu_item_Portfolio" class="sub-menu">


                                          <li><a target="_self" href="about_rvk.php">About RVK ITI</a></li>


                                          <li><a target="_self" href="director_msg.php">Director Message</a></li>
                                          <li><a target="_self" href="principal_msg.php">Principal Message</a></li>


                                          <li><a target="_self" href="mission&vision.php">Mission & Vision</a></li>

                                          <li><a target="_self" href="achiever.php">Our Achiever</a></li>

                                      </ul>
                                  </li>




                                  <li class="dropdown">
                                      <a target="_self" href="trade.php" title="Home" data-ref="home"
                                          data-toggle="dropdown" data-hover="dropdown" id="menu_item_Portfolio"
                                          data-ref="#" class="dropdown-toggle"> Courses</a>
                                      <ul aria-labelledby="menu_item_Portfolio" class="sub-menu">
                                          <li><a target="_self" href="fitter.php">ITI IN Fitter</a></li>
                                          <li><a target="_self" href="electrician.php">ITI IN Electrician</a></li>
                                      </ul>
                                  </li>




                                  <!-- 
                <li><a target="_self" href="staff.php" title="Home" data-ref="home"> staff</a></li> -->

                                  <li class="dropdown"><a target="_self" href="Other%20Links.php" title="Portfolio"
                                          data-toggle="dropdown" data-hover="dropdown" id="menu_item_Portfolio"
                                          data-ref="#" class="dropdown-toggle">Placement<span class="caret"></span></a>
                                      <ul aria-labelledby="menu_item_Portfolio" class="sub-menu">


                                          <li><a target="_self" href="registration.php">Registration</a></li>


                                          <li><a target="_self" href="placed_student.php">Placed Students</a></li>


                                          <li><a target="_self" href="training_certificate.php">Training Certificate</a>
                                          </li>


                                          <!--   <li><a target="_blank" href="https://www.india.gov.in/">National Portal Of India</a></li>                                            
                            
                     
                              <li><a target="_self" href="Page9253.php?page_id=93&amp;page_title=Electrical%20Energy%20Consumption%20per%20student%20per%20month">Electrical Energy Consumption per student per month</a></li>                                            
                            
                     
                              <li><a target="_self" href="Paged9ab.php?page_id=94&amp;page_title=Raw%20material%20Consumption%20per%20student%20per%20month">Raw material Consumption per student per month</a></li>                                         
                            
                     
                              <li><a target="_self" href="Pagea0cd.php?page_id=95&amp;page_title=Maintenance%20expenditure%20per%20year%20on%20building%20and%20machines">Maintenance expenditure per year on building and machines</a></li>        -->
                                      </ul>
                                  </li>
                                  <li class="dropdown"><a target="_self" href="Web%20Links.php" title="Portfolio"
                                          data-toggle="dropdown" data-hover="dropdown" id="menu_item_Portfolio"
                                          data-ref="#" class="dropdown-toggle">Exams<span class="caret"></span></a>
                                      <ul aria-labelledby="menu_item_Portfolio" class="sub-menu">


                                          <li><a target="_blank" href="semester_annual_exam.php">Apply for Semester/
                                                  Annual Exam</a></li>


                                          <li><a target="_self" href="">Exam Schedule </a></li>


                                          <li><a target="_blank" href="">Result</a></li>


                                          <li><a target="_self" href="exam_enrollment_verification.php">Enrollment
                                                  Verification</a></li>


                                          <li><a target="_blank"
                                                  href="exam_certificate_verification.php">Certificate</a></li>
                                      </ul>
                                  </li>
                                  </li>
                                  <li class="dropdown"><a target="_self" href="Web%20Links.php" title="Portfolio"
                                          data-toggle="dropdown" data-hover="dropdown" id="menu_item_Portfolio"
                                          data-ref="#" class="dropdown-toggle">Students Zone<span
                                              class="caret"></span></a>
                                      <ul aria-labelledby="menu_item_Portfolio" class="sub-menu">


                                          <li><a target="_blank" href="student_feedback.php">Students Feedback</a></li>


                                          <li><a target="_self" href="downloads.php">Downloads</a></li>


                                          <li><a target="_blank" href="holiday.php">Holiday List</a></li>


                                          <li><a target="_self" href="tech_methods.php">Tech. Methods</a></li>
                                      </ul>
                                  </li>
                                  </li>
                                  <li class="dropdown"><a target="_self" href="Web%20Links.php" title="Portfolio"
                                          data-toggle="dropdown" data-hover="dropdown" id="menu_item_Portfolio"
                                          data-ref="#" class="dropdown-toggle"> Gallery<span class="caret"></span></a>
                                      <ul aria-labelledby="menu_item_Portfolio" class="sub-menu">


                                          <li><a target="_blank" href="photo_gallery.php">Photo Gallery</a></li>


                                          <li><a target="_self" href="photo_video.php">Video Gallery</a></li>
                                      </ul>
                                  </li>
                                  </li>
                                  <li class="dropdown"><a target="_self" href="Web%20Links.php" title="Portfolio"
                                          data-toggle="dropdown" data-hover="dropdown" id="menu_item_Portfolio"
                                          data-ref="#" class="dropdown-toggle"> Convocation<span
                                              class="caret"></span></a>
                                      <ul aria-labelledby="menu_item_Portfolio" class="sub-menu">


                                          <li><a target="_blank" href="">Introduction</a></li>


                                          <li><a target="_self" href="">Registration</a></li>

                                          <li><a target="_self" href="">Registration Candidate List</a></li>

                                          <li><a target="_self" href="">Allumini Association</a></li>
                                      </ul>
                                  </li>




                                  <li><a target="_self" href="contact.php" title="contact_us" data-ref="home">
                                          Contact</a></li>



                              </ul>






                          </div>

                      </div>

                  </div>

              </div>

          </div>

      </div>

      <!-- main header END -->

  </header>

  <!-- header END -->