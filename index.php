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

    <script type="text/javascript"
    src="https://counter6.optistats.ovh/private/counter.js?c=x14851zybcxjtpxxt9hkdkjg1cl71bdp&down=async" async>
    </script>
</head>
<body id="bg">
    <?php include('include/header.php'); ?>
    <div class="page-wraper">
        <style type="text/css">
        .boxs {
            font-family: oswald, sans-serif;
            background: #12265b;
            color: #fff;
            display: block;
            padding: 20px 30px;
            font-size: 24px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .boxs:hover {
            background: crimson;
            color: #fff;
        }

        .box-center {
            background: url("img/Apprenticeship.jpg") no-repeat;
            background-size: cover;
            font-family: oswald, sans-serif;
            color: #fff;
            display: block;
            padding: 77px 30px;
            font-size: 24px;
            margin-bottom: 10px;
            position: relative;
            line-height: 123px;
            height: 207px;
            text-transform: uppercase;
        }

        .box-center span,
        .box-center:hover {}

        .box-center span {
            position: relative;
            z-index: 999;
        }

        .box-center::before {
            content: '';
            background: crimson;
            position: absolute;
            opacity: 0.6;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }
        </style>
        <!-- Content -->
        <div class="page-content">
            <!-- Slider -->
            <div class="main-slider style-two default-banner">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                            data-alias="news-gallery36" data-source="gallery"
                            style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                            <div id="slider_01" class="rev_slider fullwidthabanner" style="display:none;"
                                data-version="5.3.0.2">
                                <ul>
                                <?php
                                                    $i=1;
                                                    $sql= "SELECT * FROM slider_tbl";
                                                    $result= mysqli_query($connection, $sql) or die("Query Failed.");
                                                    while($row = mysqli_fetch_array($result)){
                                ?>  
                                    <!-- SLIDE -->
                                    <li data-index="rs-200" data-transition="parallaxvertical" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="default"
                                        data-thumb="<?php echo $row['slider'];?>" data-rotate="0" data-fstransition="fade"
                                        data-fsmasterspeed="1500" data-fsslotamount="8" data-saveperformance="off"
                                        data-title="" data-param1="" data-param2="" data-param3="" data-param4=""
                                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                                        data-param10="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo $row['slider'];?>" alt="" data-bgposition="center center"
                                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                                            class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                    <?php }?>
                                    <!-- SLIDE -->
                                    <!-- SLIDE -->
                                   <!--  <li data-index="rs-200" data-transition="parallaxvertical" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="default"
                                        data-thumb="images/main-slider/2.jpg" data-rotate="0" data-fstransition="fade"
                                        data-fsmasterspeed="1500" data-fsslotamount="8" data-saveperformance="off"
                                        data-title="" data-param1="" data-param2="" data-param3="" data-param4=""
                                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                                        data-param10="">
                                         MAIN IMAGE 
                                        <img src="img/main-slider/2.jpg" alt="" data-bgposition="center center"
                                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                                            class="rev-slidebg" data-no-retina>
                                         LAYERS 
                                    </li> -->
                                    <!-- SLIDE -->
                                    <!-- SLIDE -->
                                  <!--   <li data-index="rs-200" data-transition="parallaxvertical" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="default"
                                        data-thumb="images/main-slider/3.jpg" data-rotate="0" data-fstransition="fade"
                                        data-fsmasterspeed="1500" data-fsslotamount="9" data-saveperformance="off"
                                        data-title="" data-param1="" data-param2="" data-param3="" data-param4=""
                                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                                        data-param10="">
                                         MAIN IMAGE 
                                        <img src="img/main-slider/3.jpg" alt="" data-bgposition="center center"
                                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                                            class="rev-slidebg" data-no-retina>
                                         LAYERS
                                    </li> -->
                                    <!-- SLIDE -->
                                </ul>
                                <!--   <div class="tp-bannertimer tp-bottom bg-primary"></div> -->
                            </div>
                        </div>
                        <!-- END REVOLUTION SLIDER -->
                    </div>
                </div>
            </div>
            <!-- Slider END -->
            <!-- Welcome -->
            <!--   <section id="breaking-news">
                <div class="container">
                    <div class="sitewidth">
                        <div class="br-title">Latest News & Events </div>
                        <marquee behavior="scroll" direction="left" onmouseover="this.stop();"
                            onmouseleave="this.start();" class="news-marquee">
                            <a href="#">GITI Aliganj, Lucknow Topper's 2021</a>
                        </marquee>
                    </div>
                </div>
            </section> -->
            <!-- Welcome End -->
            <div class="section-content">
            </div>
            <!-- About  -->
            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="section-head text-center ">
                        <h2 class="h2 text-uppercase"> Welcome to <b><u style="color:crimson;">RVK ITI</u></b> Naini
                            ,Prayagraj </h2>
                        <div class="dez-separator-outer">
                            <div class="dez-separator bg-primary style-liner"></div>
                            <div class="clear"></div>
                            <h5 class="m-tb30" style="padding-top:0px;">The Institute is engaged in imparting training
                                in the scheme of NCVT, and courses as per specific requirement of the local industries.
                                The academy pursues the ideals of training of minds and quest for knowledge and of
                                healthy life.
                                The institute has been setup with the objective of imparting craftsman training to
                                aspiring technicians offering an environment where young minds can grow to their full
                                potential and become skilled and disciplined Technicians. The institutes is striving for
                                reducing unemployment among educated youth as well by equipping them with suitable
                                skills for industrial employment and satisfy the requirements of todays hi-tech
                                manufacturing and service industrial sectors..
                            </h5>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="message-grid text-left">
                                    <h3 class="font-weight-600 m-t10">Principal Message </h3>
                                    <div class="left-pic">
                                        <img src="pictures/pri.jpg" alt="">
                                        <h4><strong>Shri R.N.Tripathi</strong></h4>
                                    </div>
                                    <p>"High aims from high characters, and great objects bring out great minds." -
                                        Tyron Edwards It is a privilege for me to be a part of Ramgarhia Sen. Sec
                                        School. I congratulate it on the successful completion of its 83 years of
                                        Service. Education is essential for the disciplined progress of human being as
                                        well as the nation. It is an important attribute to human society and imparting
                                        education to children in an essential ingredient.</p>
                                    <div class="m-tb30">
                                        <a href="principal_msg.php" class="site-button">Read More
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </div><br>
                                    <hr>
                                    <h3 class="font-weight-600 m-t10">Director Message </h3>
                                    <div class="left-pic">
                                        <img src="pictures/pri.jpg" alt="">
                                        <h4><strong> Er. Pankaj Singh</strong></h4>
                                    </div>
                                    <p>RVK Industrial Training Institute is in the 15th year of its existence,
                                        contributing to technical education in Fitter and Electrician trade. Institution
                                        aims at the complete development of the students and our faculty members, to
                                        provide the training and every possible support in all theirendeavors and
                                        academics.</p>
                                    <div class="m-tb30">
                                        <a href="director_msg.php" class="site-button">Read More <i class="fa fa-angle-right"
                                                aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 m-b30">
              <div class="">
              
          <div class="right-pic">
          <img src="public/aliganj/img/p1.png" alt="">
          <h4><strong>Shri. Yogi Adityanath</strong></h4><p>Chief Minister of Uttar Pradesh</p>
            </div>
          <div class="right-pic">
          <img src="public/aliganj/img/p2.png" alt="">
          <h4><strong>Shri. Kapil Dev Agrawal</strong></h4><p>Hon’ble State Minister (Independent Charge)</p>
            </div>
          
               <div class="border-danger golge">
            <div class="news-title">
        <h2> <i class="fa fa-newspaper-o"></i> Notice Board</h2>
              </div>
            <div class="news-body">
              <div class="carousel vert slide" data-ride="carousel" data-interval="2000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
            <div class="recent-posts-entry text-center news-title">
                  <div class="widget-post-bx">
                        <div class="widget-post clearfix">
                          <div class="dez-post-media"> <img src="images/gallery/1.html" alt="" width="200" height="200"> </div>
                          <div class="dez-post-info">
                            <div class="dez-post-header">
                              <h6 class="post-title text-left"><a href="News-Events.html"> Registration starts from 1st nov 2019 for the Session 2020-21</a></h6>
                              <h6>date:</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
            
              <div class="recent-posts-entry text-center news-title">
                  <div class="widget-post-bx">
                        <div class="widget-post clearfix">
                          <div class="dez-post-media"> <img src="images/gallery/2.html" alt="" width="200" height="200"> </div>
                          <div class="dez-post-info">
                            <div class="dez-post-header">
                              <h6 class="post-title text-left"><a href="News-Events.html"> Registration starts from 1st nov 2019 for the Session 2020-21</a></h6>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
            
          
               </div>
          
           <div class="carousel-item">
            <div class="recent-posts-entry text-center news-title">
                  <div class="widget-post-bx">
                        <div class="widget-post clearfix">
                          <div class="dez-post-media"> <img src="images/gallery/1.html" alt="" width="200" height="200"> </div>
                          <div class="dez-post-info">
                            <div class="dez-post-header">
                              <h6 class="post-title text-left"><a href="News-Events.html"> Registration starts from 1st nov 2019 for the Session 2020-21</a></h6>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
            
              <div class="recent-posts-entry text-center news-title">
                  <div class="widget-post-bx">
                        <div class="widget-post clearfix">
                          <div class="dez-post-media"> <img src="images/gallery/2.html" alt="" width="200" height="200"> </div>
                          <div class="dez-post-info">
                            <div class="dez-post-header">
                              <h6 class="post-title text-left"><a href="News-Events.html"> Registration starts from 1st nov 2019 for the Session 2020-21</a></h6>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
            
          
               </div>
           
                </div>
              </div>
         <div class="m-tb5 text-center"> <a href="#" class="site-button">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
            </div>
          </div>
              </div>
            </div>
                        </div>

                    </div>

                </div>

                <!-- About  -->



                <div class="section-full bg-img-fix content-inner overlay-black-middle our-projects-galery"
                    style="background-image:url(images/background/bg9.php); background-position:center;">

                    <div class="container">
                        <h1 style="text-align:center;"> Some Features of ITI </h1>
                        <div class="row">

                            <div class="col-lg-3 col-sm-12 m-b30 ">

                                <div
                                    class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">

                                    <!-- <div class="sports-icon "> <img src="img/p3.png" alt="" /> </div> -->

                                    <h4 class="text-capitalize">Specialized Training</h4>

                                    <div class="dez-separator-outer ">

                                        <div class="dez-separator bg-primary style-liner"></div>

                                    </div>

                                    <p class="m-b0"> ITI colleges provide specialized training in a wide range of trades
                                        and vocations, including electrician, fitter, welder, machinist, plumber,
                                        computer operator, and more.</p>

                                </div>

                            </div>

                            <div class="col-lg-3 col-sm-12 m-b30 ">

                                <div
                                    class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">

                                    <!-- <div class="sports-icon "> <img src="img/blnk.jpg" alt="" /> </div> -->

                                    <h4 class="text-capitalize">Hands-on Learning</h4>

                                    <div class="dez-separator-outer ">

                                        <div class="dez-separator bg-primary style-liner"></div>

                                    </div>

                                    <p class="m-b0"> Practical training is a significant focus of ITI programs. Students
                                        gain hands-on experience in workshops and laboratories, which helps them develop
                                        real-world skills.
                                    </p>

                                </div>

                            </div>


                            <div class="col-lg-3 col-sm-12  m-b30 ">

                                <div
                                    class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">

                                    <!-- <div class="sports-icon "> <img src="img/p4.png" alt="" /> </div> -->

                                    <h4 class="text-capitalize">Structured Curriculum</h4>

                                    <div class="dez-separator-outer ">

                                        <div class="dez-separator bg-primary style-liner"></div>

                                    </div>

                                    <p class="m-b0"> ITI programs follow a structured curriculum that is designed to
                                        meet industry standards. The curriculum includes theory and practical
                                        components. </p>

                                </div>

                            </div>


                            <div class="col-lg-3 col-sm-12  m-b30 ">

                                <div
                                    class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">
                                    <!-- 
                                    <div class="sports-icon "> <img src="img/blnk.jpg" alt="" /> </div> -->

                                    <h4 class="text-capitalize">Certification</h4>

                                    <div class="dez-separator-outer ">

                                        <div class="dez-separator bg-primary style-liner"></div>

                                    </div>

                                    <p class="m-b0"> Upon successful completion of their chosen course, students receive
                                        a National Trade Certificate (NTC) or State Trade Certificate (STC), depending
                                        on whether the ITI is affiliated with NCVT or SCVT. These certificates are
                                        recognized by employers.</p>

                                </div>

                            </div>

                            <div class="col-lg-3 col-sm-12  m-b30 ">

                                <div
                                    class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">

                                    <!-- <div class="sports-icon "> <img src="img/p5.png" alt="" /> </div> -->

                                    <h4 class="text-capitalize">Short Duration</h4>

                                    <div class="dez-separator-outer ">

                                        <div class="dez-separator bg-primary style-liner"></div>

                                    </div>

                                    <p class="m-b0"> ITI courses are typically shorter in duration compared to
                                        traditional degree programs. Most ITI courses can be completed in one to two
                                        years, making them accessible for those who want to enter the workforce quickly.
                                    </p>

                                </div>

                            </div>



                            <div class="col-lg-3 col-sm-12  m-b30 ">

                                <div
                                    class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">

                                    <!-- <div class="sports-icon "> <img src="img/blnk.jpg" alt="" /> </div> -->

                                    <h4 class="text-capitalize"> Affiliation </h4>

                                    <div class="dez-separator-outer ">

                                        <div class="dez-separator bg-primary style-liner"></div>

                                    </div>

                                    <p class="m-b0"> ITI colleges are affiliated with a governing body responsible for
                                        maintaining quality standards. In India, this is often the National Council for
                                        Vocational Training (NCVT) at the national level or State Council for Vocational
                                        Training (SCVT) at the state level.</p>

                                </div>

                            </div>

                            <div class="col-lg-3 col-sm-12  m-b30 ">

                                <div
                                    class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">

                                    <!-- <div class="sports-icon "> <img src="img/blnk.jpg" alt="" /> </div> -->

                                    <h4 class="text-capitalize">Admission Criteria</h4>

                                    <div class="dez-separator-outer ">

                                        <div class="dez-separator bg-primary style-liner"></div>

                                    </div>

                                    <p class="m-b0"> Students are admitted to ITI colleges based on specific criteria,
                                        such as minimum educational qualifications, entrance exams, or merit-based
                                        selection.</p>

                                </div>

                            </div>

                            <div class="col-lg-3 col-sm-12  m-b30 ">

                                <div
                                    class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">

                                    <!-- <div class="sports-icon "> <img src="img/p7.png" alt="" />
                                    </div> -->
                                    <h4 class="text-capitalize">Skill Enhancement </h4>
                                    <div class="dez-separator-outer ">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p class="m-b0"> ITIs play a vital role in addressing the skill gap in the labor
                                        market by providing technical skills training to students.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-full bg-white content-inner">
                    <div class="container">
                        <div class="section-head text-center ">
                            <h2 class="h2 text-uppercase"> Activities and Offered Courses </h2>
                            <div class="dez-separator-outer ">
                                <div class="dez-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="dez-box">
                                        <div class="dez-media">
                                            <a href="#"><img src="pictures/pic1.jpg" alt=""></a>
                                        </div>
                                        <div class="dez-info p-a20 p-t20">
                                            <h4 class="dez-title m-t5 text-white">Institute Trades Under CTS</h4>
                                            NCVT & SCVT Courses
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="dez-box">
                                        <div class="dez-media">
                                            <a href="#"><img src="pictures/short.webp" alt=""></a>
                                        </div>
                                        <div class="dez-info p-a20 p-t20">
                                            <h4 class="dez-title m-t5 text-white">Short Term Courses</h4>
                                            Institute offers short term courses under PMKVY, UPSDM
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <a href="pms/index.php" target="_blank" class="boxs">Placement Cell </a>
                                    <a href="" target="_blank" class="box-center">
                                        <span>Apprenticeship India</span> </a>

                                    <a href="" target="_blank" class="boxs">OJT, DST
                                        Schemes </a>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <hr>
                <div class="section-full bg-white content-inner our-achievements">
                    <div class="container">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <a href="#" class="element"> <i class="fa fa-user"></i> <span
                                    class="horiz-flag">Acedamic</span> </a>
                            <a href="#" class="element">
                                <i class="fa fa-graduation-cap"></i>
                                <span class="horiz-flag">Best Result</span>
                            </a>
                            <a href="#" class="element">
                                <i class="fa fa-pencil-square-o"></i>
                                <span class="horiz-flag">Get Certificate </span>
                            </a>
                            <a href="#" class="element">
                                <i class="fa fa-bookmark"></i>
                                <span class="horiz-flag">Success</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Testimoniyal -->
                <div class="section-full overlay-black-dark bg-img-fix content-inner dez-move-image"
                    style="background-image:url(images/mamber.php);">
                    <div class="container">
                        <div class="section-head text-center">
                            <h2 class="h2 text-uppercase text-white">What Our Parents Say</h2>
                            <div class="dez-separator-outer ">
                                <div class="dez-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="testimonial-four owl-carousel owl-dots-none owl-theme owl-loaded">
                                <div class="item">
                                    <div class="testimonial-4 text-white">
                                        <div class="testimonial-pic"><img src="img/1.png" width="100" height="100"
                                                alt=""></div>
                                        <div class="testimonial-text">
                                            <p>Government training institutes are playing an important role in producing
                                                skilled manpower to meet-out requirement of industries & others.</p>
                                        </div>
                                        <div class="testimonial-detail"> <span class="testimonial-position">Rahul
                                                Mishra</span> </div>
                                        <div class="quote-right"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-4 text-white">
                                        <div class="testimonial-pic"><img src="img/1.png" width="100" height="100"
                                                alt=""></div>
                                        <div class="testimonial-text">
                                            <p>Government training institutes are playing an important role in producing
                                                skilled manpower to meet-out requirement of industries & others.</p>
                                        </div>
                                        <div class="testimonial-detail"> <span class="testimonial-position">Rahul
                                                Mishra</span> </div>
                                        <div class="quote-right"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-4 text-white">
                                        <div class="testimonial-pic"><img src="img/1.png" width="100" height="100"
                                                alt=""></div>
                                        <div class="testimonial-text">
                                            <p>Government training institutes are playing an important role in producing
                                                skilled manpower to meet-out requirement of industries & others.</p>
                                        </div>
                                        <div class="testimonial-detail"> <span class="testimonial-position">Rahul
                                                Mishra</span> </div>
                                        <div class="quote-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimoniyal -->
                <!-- Our GALLERY -->
                <div class="section-full bg-white content-inner our-achievements">
                    <div class="container">
                        <div class="section-head text-center ">
                            <h2 class="h2 text-uppercase"> OUR GALLERY</h2>
                            <div class="dez-separator-outer ">
                                <div class="dez-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                        <div class="section-content text-center ">
                            <div class="clearfix">
                                <ul id="masonry"
                                    class="row dez-gallery-listing gallery-grid-4 m-b0 gallery lightgallery">
                                    <?php
                                    $i=1;
$sql= "SELECT * FROM gallery_tbl";
$result= mysqli_query($connection, $sql) or die("Query Failed.");
while($row = mysqli_fetch_array($result)){
?>
                                    <li class="card-container col-lg-3 col-lg-3 col-sm-6 jumping"
                                        style="position: absolute; left: 0px; top: 0px;">
                                        <div class="dez-gallery-box">
                                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">
                                                <a href="javascript:void(0);">
                                                    <img width="480" height="430" src="<?php echo $row['gallery'];?>" alt="">
                                                </a>
                                                <div class="overlay-bx">
                                                    <h5 style="color:white;padding-top:5px;"><?php echo $row['remark'];?></h5>
                                                    <div class="overlay-icon">
                                                        <span data-exthumbimage="<?php echo $row['gallery'];?>"
                                                            data-src="<?php echo $row['gallery'];?>" class="icon-bx-xs check-km">
                                                            <i class="fa fa-picture-o"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
<?php }?>
                                </ul>
                            </div>
                            <div class="m-tb30" style="margin-bottom:20px;">
                                <a href="photo_gallery.php" class="site-button">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team member END -->
                <div class="section-full bg-white">
                    <div class="container"> </div>
                </div>
            </div>
            <!-- Content END-->
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