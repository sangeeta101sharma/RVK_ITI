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

            <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(pictures/mission.jpg);
            background-size:cover;background-position: center;background-repeat: no-repeat;">

                <div class="container">

                    <div class="dez-bnr-inr-entry">

                        <h1 class="text-white">Mission and Vision &nbsp;</h1>

                    </div>

                </div>

            </div>

            <!-- inner page banner END -->

            <!-- Breadcrumb row -->

            <div class="breadcrumb-row">

                <div class="container">

                    <ul class="list-inline">

                        <li><a href="index.php">Home</a></li>

                        <li>Mission and Vision &nbsp;</li>

                    </ul>

                </div>

            </div>

            <!-- Breadcrumb row END -->



            <div class="clearfix">

                <div class="content-area">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-12 col-sm-12" style="min-height: 150px;">
                                <style>
                                @import url("https://fonts.googleapis.com/css2?family=Maven+Pro:wght@100;200;300;400;500;600;700;800;900&display=swap");

                                .signage-container {
                                    container-name: signage-container;
                                    container-type: inline-size;
                                    display: grid;
                                    width: 100%;
                                }

                                .signage {
                                    --outer-gap: 1rem;
                                    --inner-gap: calc(var(--outer-gap) / 4);

                                    background-color: var(--fg, #333333);
                                    column-gap: 0;
                                    display: grid;
                                    grid-template-columns: 1fr;
                                    grid-template-rows: minmax(6rem, 9rem) auto;
                                    padding: var(--outer-gap);
                                    row-gap: var(--outer-gap);
                                }

                                .signage__figure,
                                .signage__section {
                                    align-items: center;
                                    background-color: var(--bg, #ffffff);
                                    color: var(--fg, #333333);
                                    display: flex;
                                    flex-direction: column-reverse;
                                    margin: 0;
                                    padding: var(--outer-gap);
                                    text-align: center;
                                }

                                .signage__figure {
                                    gap: var(--inner-gap);
                                    grid-row-start: 1;
                                    justify-content: start;
                                }

                                .signage__section {
                                    gap: var(--outer-gap);
                                    grid-row-start: 2;
                                    justify-content: flex-start;
                                }

                                .signage__main {
                                    display: flex;
                                    flex: 1;
                                    flex-direction: column;
                                    font-size: 1.25rem;
                                    gap: var(--outer-gap);
                                }

                                .signage__aside {
                                    align-self: center;
                                }

                                .signage__info {
                                    display: flex;
                                    flex-direction: column;
                                    font-size: 1rem;
                                }

                                @container signage-container (min-width: 768px) {
                                    .signage {
                                        --outer-gap: 1.5rem;

                                        column-gap: var(--outer-gap);
                                        display: grid;
                                        grid-template-columns: minmax(4rem, 1fr) 3fr;
                                        grid-template-rows: 1fr;
                                        min-height: 275px;
                                        row-gap: 0;
                                    }

                                    .signage__figure,
                                    .signage__section {
                                        grid-row-start: 1;
                                    }

                                    .signage__figure {
                                        grid-column-start: 1;
                                    }

                                    .signage__section {
                                        align-items: stretch;
                                        flex-direction: row;
                                        flex-wrap: nowrap;
                                        grid-column-start: 2;
                                        justify-content: flex-start;
                                        text-align: start;
                                    }

                                    .signage__aside {
                                        align-self: flex-start;
                                    }
                                }

                                .signage__figure svg {
                                    display: block;
                                    height: 100%;
                                    width: auto;
                                }

                                .signage__figure figcaption {
                                    font-size: 0.875rem;
                                    line-height: 1;
                                    text-align: center;
                                    text-transform: uppercase;
                                }

                                .signage__header .name {
                                    flex: 1;
                                    font-size: 2.5rem;
                                    inset-block-start: -0.125em;
                                    line-height: 1;
                                    margin: 0;
                                    position: relative;
                                }

                                .signage__info .telephone {
                                    color: inherit;
                                }

                                @container signage-container (min-width: 768px) {
                                    .signage__figure svg {
                                        height: auto;
                                        width: 100%;
                                    }
                                }

                                .orientation {
                                    display: grid;
                                    grid-template-columns: repeat(2, 1fr);
                                    grid-template-rows: auto;
                                }

                                .orientation:where(.left, .right) {
                                    column-gap: 0.25rem;
                                }

                                .orientation:where(.left, .up-left, .down-left) .street-address,
                                .orientation:where(.right, .up-right, .down-right) svg {
                                    grid-column-start: 1;
                                    justify-self: end;
                                    text-align: end;
                                }

                                .orientation:where(.right, .up-right, .down-right) .street-address,
                                .orientation:where(.left, .up-left, .down-left) svg {
                                    grid-column-start: 2;
                                    justify-self: start;
                                    text-align: start;
                                }

                                .orientation:where(.up, .down) .street-address,
                                .orientation:where(.up, .down) svg {
                                    grid-column: 1 / -1;
                                    justify-self: center;
                                    text-align: center;
                                }

                                .orientation:where(.left, .right, .up, .up-left, .up-right) .street-address,
                                .orientation:where(.left, .right, .down, .down-left, .down-right) svg {
                                    grid-row-start: 1;
                                }

                                .orientation:where(.down, .down-left, .down-right) .street-address,
                                .orientation:where(.up, .up-left, .up-right) svg {
                                    grid-row-start: 2;
                                }

                                .orientation:where(.left, .right) .street-address,
                                .orientation:where(.left, .right) svg {
                                    align-self: center;
                                }

                                .signage-container:not(:first-child) {
                                    margin-block-start: var(--gutter, 1.5rem);
                                }
                                </style>
                                <div class="signage-container">
                                    <div class="signage" itemscope itemtype="https://schema.org/Organization">
                                        <figure class="signage__figure">
                                            <img src="pictures/result2.png" alt="">
                                        </figure>
                                        <div class="signage__section">
                                            <div class="signage__main">
                                                <header class="signage__header">
                                                    <h2 class="name" itemprop="name">QUALITY</h2>
                                                </header>
                                                <div class="signage__info">
                                                    <span itemprop="naics" content="">We at RVK Industrial Training Institute committed to provide quality training of international standards through expert in latest Technology to rendor the best and timely with Dedicated staff possessing strong human values.
                                                      We shall provide better coaching to inculcate leadership Skills in the young generation so that they carry our nature to new horizons, which will help them to develop into well rounded personalities so that they are useful citizens of the country tomorrow..</span>
                                                </div>
                                         </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="signage-container">
                                    <div class="signage" itemscope itemtype="https://schema.org/Organization">
                                        <figure class="signage__figure">
                                            <img src="pictures/academic.jpg" alt="">
                                        </figure>
                                        <div class="signage__section">
                                            <div class="signage__main">
                                                <header class="signage__header">
                                                    <h2 class="name" itemprop="name">OUR MISSION</h2>
                                                </header>
                                                <div class="signage__info">
                                                    <span itemprop="naics" content="">We at the RVK Industrial Training Institute committed to provide quality mission to create and sustain a coaching in which students acquire knowledge and learn to apply it professionally with due consideration for explore the possibilities of whole world by remaining confidents firm about their decisions keep focusing on their goal to satisfy the needs of country and society.

</span>
                                                </div>
                                         </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="signage-container">
                                    <div class="signage" itemscope itemtype="https://schema.org/Organization">
                                        <figure class="signage__figure">
                                            <img src="pictures/certificate.jpg" alt="">
                                        </figure>
                                        <div class="signage__section">
                                            <div class="signage__main">
                                                <header class="signage__header">
                                                    <h2 class="name" itemprop="name">OUR VISION</h2>
                                                </header>
                                                <div class="signage__info">
                                                    <span itemprop="naics" content="">WE AT RVK INDUSTRIAL TRAINING INSTITUTE COMMITTED TO PROVIDE QUALITY VISION TO BE AN ACADEMIC INSTITUTION IN DYNAMIC EQUILIBRIUM WITH ITS SOCIAL ECOLOGICAL AND ECONOMIC ENVIRONMENT STRIVING CONTINUOUSLY FOR EXCELLENCE TO IMBIBE RICH ETHICAL VALUES IN THE YOUNG GENERATION SO THAT THEY CAN WORK FOR THE PROSPERITY OF OUR NATION BY ACHIEVING SUCCESS TOWARDS OUR FUTURE TARGETS 
                                                      THROUGH BIRDS ACTMS EVE VIEW ON EVERY INDIVIDUAL STUDENT & STAFF.</span>
                                                </div>
                                         </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- icons -->
                                <svg height="0" width="0">
                                    <defs>
                                        <symbol id="icon-up" width="16px" height="16px" viewBox="0 0 16 16"
                                            fill="currentColor">
                                            <path
                                                d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                        </symbol>
                                        <symbol id="icon-up-right" width="16px" height="16px" viewBox="0 0 16 16"
                                            fill="currentColor">
                                            <path
                                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                                        </symbol>
                                        <symbol id="icon-right" width="16px" height="16px" viewBox="0 0 16 16"
                                            fill="currentColor">
                                            <path
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </symbol>
                                        <symbol id="icon-down-right" width="16px" height="16px" viewBox="0 0 16 16"
                                            fill="currentColor">
                                            <path
                                                d="M14 13.5a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1 0-1h4.793L2.146 2.854a.5.5 0 1 1 .708-.708L13 12.293V7.5a.5.5 0 0 1 1 0v6z" />
                                        </symbol>
                                        <symbol id="icon-down" width="16px" height="16px" viewBox="0 0 16 16"
                                            fill="currentColor">
                                            <path
                                                d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                        </symbol>
                                        <symbol id="icon-down-left" width="16px" height="16px" viewBox="0 0 16 16"
                                            fill="currentColor">
                                            <path
                                                d="M2 13.5a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1H3.707L13.854 2.854a.5.5 0 0 0-.708-.708L3 12.293V7.5a.5.5 0 0 0-1 0v6z" />
                                        </symbol>
                                        <symbol id="icon-left" width="16px" height="16px" viewBox="0 0 16 16"
                                            fill="currentColor">
                                            <path
                                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                        </symbol>
                                        <symbol id="icon-up-left" width="16px" height="16px" viewBox="0 0 16 16"
                                            fill="currentColor">
                                            <path
                                                d="M2 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1H3.707l10.147 10.146a.5.5 0 0 1-.708.708L3 3.707V8.5a.5.5 0 0 1-1 0v-6z" />
                                        </symbol>
                                    </defs>
                                </svg>

                                <!-- logos -->
                                <svg height="0" width="0">
                                    <defs>
                                        <symbol id="logo-dunder-mifflin" width="500" height="313" viewBox="0 0 500 313"
                                            fill="currentColor">
                                            <g>
                                                <path fill="none" d="M0 0h500v313H0z" />
                                                <path
                                                    d="M89.266 43.214c9.134.01 18.268-.002 27.401-.057 11.447 0 19.933 5.911 19.933 12.006v59.743c.122 6.714-8.49 10.143-15.307 10.143-3.516 0-9.781-.033-14.564-.033H89.266V43.215zm27.574 63.879V60.218c0-3.104-3.223-3.217-7.813-3.217v54.335c4.96 0 7.813-1.009 7.813-4.243zM146.25 110.03V43.164h20.738v64.959c0 3.944-.011 4.922 3.073 4.922 3.056 0 3.002-1.072 3.002-4.922l.072-64.959h20.88c0 21.986-.028 45.169-.028 66.866 0 3.794-.664 17.003-24.07 17.003-23.52 0-23.667-13.064-23.667-17.003zM203.08 43.1h17.067c3.24 11.107 8.291 25.378 12.808 37.208V43.1h17.088v82.052H232.17c-3.988-12.035-8.053-24.046-12.024-37.045v37.045h-17.067V43.1zM259.71 43.214c9.134.01 18.268-.002 27.401-.057 11.447 0 19.933 5.911 19.933 12.006v59.743c.122 6.714-8.49 10.143-15.307 10.143-3.516 0-9.781-.033-14.564-.033H259.71V43.215zm27.574 63.879V60.218c0-3.104-3.223-3.217-7.813-3.217v54.335c4.96 0 7.813-1.009 7.813-4.243zM316.96 43.02h34.933v15.923H337.92v17.06h12.998v13.973H337.92v19.01h14.948v15.923H316.96V43.02zM360.32 125.14V43.711c11.284 0 19.99.234 26.7.234 13.389 0 20.094 3.611 20.094 21.727 0 14.34-1.87 13.933-11.049 16.573 4.461.5 10.906 4.568 10.906 8.774l.142 34.121h-19.106c0-11.496-.229-23.784-.229-35.095-1.321-1.381-2.19-1.95-6.661-1.95v37.045H360.32zm27.703-51.993c0-4.421.04-14.298.04-14.298-1.075-1.367-2.322-1.925-4.346-1.95h-2.6v19.172h1.95c2.162.04 3.864-1.075 4.956-2.924zM81.157 214.94v-81.288h27.946c.803 8.13 4.87 32.876 5.524 37.37l5.525-37.37h26.97v81.288H128.56v-54.897l-7.433 54.897h-12.998c-1.585-9.52-5.833-37.833-8.208-53.839 0 15.172.084 36.733.084 53.84H81.156zM156.27 133.23h20.68v81.801h-20.68V133.23zM186.03 133.04h36.07v15.923h-14.948v16.248h12.998v14.948h-12.998v34.77H186.03V133.04zM227.62 133.04h36.07v15.923h-14.948v16.248h12.998v14.948h-12.998v34.77H227.62V133.04zM269.28 133.1h20.797v65.966h12.998v15.923h-33.796V133.1zM308.51 133.23h20.68v81.801h-20.68V133.23zM338.85 132.57h17.067c3.24 11.107 8.291 25.378 12.808 37.208V132.57h17.088v82.052H367.94c-3.988-12.035-8.053-24.046-12.024-37.045v37.045h-17.067V132.57z" />
                                                <path
                                                    d="M389.99 133h34.999v8.978H389.99zM390.01 146.01h34.962v7.97l-14.045 4.115 14.045-.057v8.968h-34.984v-8.961l14.993-4.021-14.964-.03-.007-7.984zM410.01 191.99v-8.957h8.957s1.056.041 1.056-1.99-1.016-2.051-1.016-2.051h-22.97s-1.056.06-1.056 2.03c0 1.97 1.016 2.011 1.016 2.011h7.94v8.947h-8.956s-5.93-.03-5.93-10.592 5.93-11.374 5.93-11.374h25.001s6.032-.163 6.032 11.008c0 11.17-6.007 10.967-6.007 10.967h-9.997z" />
                                                <path
                                                    d="M391.95 199.01h14.065v12.988c0 4.667-7.112 14.014-14.014 14.014v-5.95c1.285 0 3.98-3.836 3.98-5.078h-4l-.03-15.974zM110.44 229.88l-.438.781c-2.64 4.735-6.078 11.047-8.906 16.062l-.437.75.875-.031 2.906-.031h.281l.156-.25 2.126-3.75h7.28l2.063 3.719.156.25h4.032l-.438-.75-9.219-16-.437-.75zm.156 6.219 2.188 4.375h-4.281c.714-1.473 1.41-3.008 2.093-4.375zM342.12 229.88l-.438.781c-2.64 4.735-6.078 11.047-8.906 16.062l-.437.75.875-.031 2.906-.031h.281l.156-.25 2.094-3.75h7.281l2.094 3.719.157.25h4.031l-.438-.75-9.219-16-.437-.75zm.156 6.188 2.188 4.406h-4.281c.72-1.484 1.405-3.033 2.093-4.406zM363.06 230v17.031h.5l2.938.094h.53v-10.406l10.157 10.188.156.125h3.718V230H377.03v10.375l-10.156-10.22-.125-.156h-3.688zM231 230.03c-1.631 0-3.94.397-5.906 1.656s-3.563 3.453-3.563 6.844c0 3.372 1.512 5.68 3.438 7.063s4.233 1.875 5.969 1.875c3.346 0 5.312-1.094 5.312-1.094l.25-.157v-3.562l-.781.469c-1.44.89-2.255 1.468-4.25 1.469-.93 0-2.8-.494-4.313-1.532s-2.687-2.545-2.687-4.594c0-2.073.918-3.369 2.187-4.218s2.904-1.188 4.094-1.188c2.522 0 3.303.304 4.969 1.344l.781.5v-3.156l-.25-.125c-1.405-.832-2.11-1.594-5.25-1.594zM391.47 230.03l.531.781 5.906 8.719v7.563h4.157v-7.282l5.937-9 .5-.78h-4.25l-.156.218-4.063 5.437-4.062-5.437-.156-.219h-4.345zM155.5 230.44v17.031h11.094V245.002h-8.125v-5.594h7.094v-2.843h-7.094v-3.563h8.125V230.44H155.5zM258.5 230.5c-2.419 0-4.893.776-6.781 2.156s-3.188 3.402-3.188 5.813c0 2.397 1.288 4.667 3.156 6.312s4.32 2.688 6.75 2.688c2.444 0 4.944-1.046 6.844-2.688s3.22-3.901 3.22-6.312c0-2.396-1.322-4.398-3.22-5.781s-4.374-2.188-6.78-2.188zm-.031 2.563c1.593 0 3.378.602 4.719 1.593s2.218 2.32 2.218 3.813c0 1.478-.91 3.007-2.25 4.156s-3.071 1.906-4.625 1.906c-1.541 0-3.369-.729-4.75-1.875s-2.312-2.696-2.312-4.219c0-1.512.9-2.833 2.25-3.812s3.138-1.563 4.75-1.563zM81.5 230.59v15.781H84.438v-5.844h3.593c.02 0 .043-.03.063-.031.039-.003.098.008.156 0a4.553 4.553 0 0 0 1.813-.719c.996-.679 1.968-2.022 1.968-4.312 0-2.264-.674-3.528-1.437-4.188a2.951 2.951 0 0 0-1.063-.594 2.887 2.887 0 0 0-.375-.093c-.045-.007-.066.002-.093 0 0 0-.04.249-.063.5h-.031v-.5H81.5zm3 2.938h2.375c.018.001.044-.002.063 0 .075.007.168.046.28.062.226.032.506.068.782.188.553.238 1.063.614 1.063 1.687 0 1.058-.583 1.493-1.25 1.781a4.15 4.15 0 0 1-.938.281c-.13.021-.239.025-.313.032-.036.003-.074-.001-.093 0h-.031s-.017-.002-.032 0H84.5v-4.031zM131.47 230.59v15.781H134.408v-5.844H138c.02 0 .043-.03.063-.031.039-.003.098.008.156 0 .117-.017.282-.044.469-.094.374-.1.845-.285 1.344-.625.996-.679 2-2.022 2-4.312 0-2.264-.706-3.528-1.47-4.188a2.951 2.951 0 0 0-1.062-.594 2.887 2.887 0 0 0-.375-.093c-.045-.007-.066.002-.094 0l-.03.5h-.032v-.5h-7.5zm3 2.938h2.375c.024.002.037-.003.063 0 .075.007.168.046.28.062.226.032.537.068.813.188.553.238 1.031.614 1.031 1.687 0 1.058-.582 1.493-1.25 1.781a4.15 4.15 0 0 1-.937.281c-.13.021-.239.025-.313.032-.036.003-.074-.001-.093 0 0 0-.035-.004-.063 0h-1.906v-4.031zM179.5 230.59v15.781H182.438v-5.844l1.312-.031 4 5.687.125.22h.281l2.75-.032h1.063l-.656-.813-4.407-5.25c.345-.108.737-.245 1.156-.53.997-.68 1.97-2.023 1.97-4.313 0-2.264-.675-3.528-1.438-4.188a2.951 2.951 0 0 0-1.063-.594 2.887 2.887 0 0 0-.375-.093c-.045-.007-.066.002-.093 0 0 0-.04.249-.063.5h-.031v-.5H179.5zm3 2.938h2.375c.018.001.044-.002.063 0 .075.007.168.046.28.062.226.032.506.068.782.188.553.238 1.063.614 1.063 1.687 0 1.058-.583 1.493-1.25 1.781a4.15 4.15 0 0 1-.938.281c-.13.021-.239.025-.313.032-.036.003-.074-.001-.093 0 0 0-.035-.004-.063 0H182.5v-4.031zM312.47 230.59v15.781H315.439v-5.844H319.033c.019 0 .011-.03.03-.031.04-.003.099.008.157 0 .117-.017.282-.044.469-.094.374-.1.876-.285 1.375-.625.996-.679 1.969-2.022 1.969-4.312 0-2.264-.706-3.528-1.47-4.188a2.951 2.951 0 0 0-1.062-.594c-.146-.044-.253-.08-.343-.093-.046-.007-.098.002-.125 0l-.032.5h-.031v-.5h-7.5zm3.031 2.938H317.845c.028.003.066-.003.094 0 .075.007.169.046.281.062.225.032.505.068.781.188.553.238 1.031.614 1.031 1.687 0 1.058-.582 1.493-1.25 1.781a4.15 4.15 0 0 1-.937.281c-.13.021-.239.025-.313.032-.037.003-.074-.001-.093 0 0 0-.035-.004-.063 0h-1.875v-4.031zM297.31 231.47l-.125.219-5.688 7.906-5.687-7.875-.156-.219h-3.625v15.531H284.498l.53.031v-11l6.063 7.844.375.5.407-.5 6.062-7.875v11.094h3.094V231.47h-3.718z" />
                                            </g>
                                        </symbol>
                                        <symbol id="logo-evil-corp" width="648" height="648" viewBox="0 0 648 648"
                                            fill="currentColor">
                                            <path
                                                d="M209 111.1C144.9 162.9 91.5 206 90.2 207l-2.4 1.9 114.9 142.5c63.1 78.4 115.3 142.5 115.9 142.5.7.1 232.8-186.3 237.6-190.8.6-.5-51.5-66.4-57.1-72.4-.4-.4-32.6 25-71.5 56.4s-70.9 56.9-71.1 56.7c-.1-.1-6.4-7.9-13.8-17.2l-13.6-16.8 5.7-4.7c4.6-3.8 123.9-99.9 125-100.7.4-.2-53.8-67.6-57.2-71.2l-2.2-2.3-65.3 52.7c-35.9 28.9-65.6 52.2-66 51.8-.4-.5-6.5-8-13.6-16.7-11.1-13.8-12.5-16-11.1-17 15.1-11.2 139.5-112.6 139.3-113.6-.3-1.8-56-71-57.2-71-.5 0-53.4 42.3-117.5 94zM346 565c-12.9 1.6-23.8 7.7-31.2 17.5-5.2 6.9-7.2 13.3-7.1 23 .1 17.4 10 31.1 26.8 37 11.3 4.1 31.8 2.9 44.6-2.6l4.9-2.1v-8.9c0-4.9-.3-8.9-.7-8.9-.4 0-4.5 1.6-9.1 3.6-22.1 9.5-42.3 2.5-45.7-15.8-1.1-5.6 1.7-13.6 6.2-17.9 6.6-6.4 9.5-7.4 21.3-7.4 9.3 0 11.2.3 17 2.8 10.9 4.8 10 5.2 10-5.2v-9.2l-4.3-1.9c-8.2-3.7-21.8-5.3-32.7-4zM434.8 565.1c-22.2 2.5-38.1 21.2-36.6 42.8 1.2 17 14.5 32 31.9 36 12.1 2.8 28.3.6 38.2-5.2 6.5-3.8 14.2-12.7 16.8-19.5 3.1-7.9 3.1-20.4.1-28.2-7.3-18.6-26.9-28.6-50.4-25.9zm20.1 19.5c17.2 8.6 15.2 35.9-3.1 42-5.9 1.9-15.7 1.5-20.4-.9-13.7-7.1-16.7-26.4-5.9-37.2 4.8-4.8 8.7-6.3 17.6-6.4 5.2-.1 7.6.4 11.8 2.5zM5 605v39h58v-15H25v-18h35v-15H25v-15h37v-15H5v39zM71.3 567.4c.4.9 8.8 18.7 18.8 39.6l18.2 38.1 4.9-.3 4.9-.3 12.5-27.5c6.9-15.1 15-32.8 17.9-39.3l5.4-11.7h-11.2l-11.2.1-8.9 20.5c-4.9 11.3-9.2 20.7-9.6 20.9-.3.2-4.9-8.9-10.2-20.3l-9.5-20.7-11.3-.3c-9.7-.2-11.2-.1-10.7 1.2zM165 605v39h20v-78h-20v39zM205 605v39h60v-15h-40v-63h-20v39zM504 605v39h20v-31h4.4c6.1 0 9.1 3.4 16.2 18.6l5.9 12.4h22.4l-2.5-5.8c-6.6-14.7-12.8-26.4-15.3-28.4l-2.7-2.3 4-3c5.9-4.4 8-8.6 8-15.9 0-9.7-4.3-16.4-13.4-20.5-4.1-1.9-6.5-2.1-25.7-2.1H504v39zm35.4-22.9c2.9 1.4 5.1 5.9 4.1 8.9-1.4 4.5-4.4 6-12.2 6H524v-16h6.5c3.5 0 7.5.5 8.9 1.1zM584 605v39h21v-30.8l11.8-.4c9.5-.3 12.5-.8 15.7-2.5 8.5-4.5 12.5-11.4 12.5-21.3 0-7.3-1.6-11.4-6.1-15.9-6.5-6.5-8.9-7.1-33.1-7.1H584v39zm37.8-21.7c2.6 2.4 3.2 5.8 1.6 9.5-1.4 3.5-5.9 5.2-13.6 5.2H605v-17.2l7.4.4c5.3.2 8 .8 9.4 2.1z" />
                                        </symbol>
                                        <symbol id="logo-wayne-enterprises" width="1160" height="653"
                                            viewBox="0 0 1160 653" fill="currentColor">
                                            <path
                                                d="M338 39.9v30.8l9.6 7.4c11.6 8.9 15.8 13.6 17.3 19.4.8 3 1.1 33.3 1.1 98.8v94.5l3.3 1.5c1.7.8 12.9 5.7 24.7 10.7 57.9 24.8 119 55.6 167.2 84.1 9.2 5.4 17.7 9.9 18.8 9.9 1.2 0 11.1-5.4 21.9-11.9 57.3-34.5 116.6-64.2 171.6-85.8 10.5-4.1 19.6-8 20.2-8.5 1-.8 1.3-22.4 1.5-97.7l.3-96.8 3-4.9c2-3.3 6-7.1 12-11.7 5-3.7 9.8-7.4 10.8-8.2 1.5-1.3 1.7-4.2 1.7-32V9H654.9l.3 11.2.3 11.3 19 .5c19.8.5 22.7 1.1 26.6 5.6 3.9 4.5 3.9 5.5 3.9 124v115.3l-3.7 3.1c-5.7 4.7-20.8 11.6-29.8 13.6-21.2 4.8-44.4.3-51.7-9.9l-2.3-3.2-.3-130.3L617 20h-74l-.2 130.9-.3 131-3 3.1c-1.6 1.8-4.7 4-6.7 5.1-10.9 5.6-32.2 7-46.3 3-8.2-2.3-22.6-9.3-28-13.7l-3-2.4V160.8c0-115.8 0-116.3 2.1-120.3 1.3-2.5 3.6-4.7 6.4-6.2 4-2.2 5.5-2.3 22.7-2.3H505V9H338v30.9zM17 212v10h280v-20H17v10zM859 212v10h280v-20H859v10zM6 450.4c0 1.1 35.9 83.2 44 100.8l1.3 2.8H115l1.9-3c1-1.7 9-16.1 17.7-32 8.7-15.9 16.2-28.6 16.6-28.2.3.4 7.9 14 16.9 30.2 8.9 16.2 16.9 30.3 17.7 31.2 1.4 1.6 4.2 1.8 32.7 1.8 23.8 0 31.5-.3 32.2-1.3 1.1-1.2 45.3-102.1 45.3-103.1 0-.3-13.8-.6-30.7-.6h-30.8l-10.4 28c-5.8 15.4-10.8 28-11.2 28-.4 0-7.3-12-15.4-26.8-8-14.7-15.4-27.3-16.3-28-1.2-.9-9-1.2-30.8-1.2h-29.3l-2.4 3.2c-1.3 1.8-8.4 14.3-15.7 27.8-7.3 13.5-13.6 24.8-14 25.3-.3.4-3.7-7.5-7.5-17.5-3.7-10.1-8.6-22.9-10.7-28.6l-4-10.2H36.4c-25.5 0-30.4.2-30.4 1.4zM372.8 450.2c-1.8 1.5-75.7 100.5-76.5 102.5-.4 1.1 5.4 1.3 32.5 1.3h33l4.6-7.9c2.6-4.4 5.4-8.2 6.2-8.5 2.7-1.1 68.4-.7 70.4.4 1 .5 3.8 4.4 6.1 8.5l4.3 7.5h33.9c29.1 0 33.8-.2 33.4-1.4-1.2-3-75.7-101.5-77.6-102.5-3-1.7-68.2-1.5-70.3.1zm46.4 46.3 10.6 17.5h-44l1.8-2.7c.9-1.5 5.7-9.4 10.6-17.5 4.9-8.2 9.2-14.8 9.6-14.8.4 0 5.5 7.9 11.4 17.5zM496.7 449.6c-.4.4 17 13.9 38.6 30.1 21.5 16.2 39.6 29.8 40.1 30.3s.8 10.6.7 22.4l-.2 21.6H642v-21.4c0-16.5.3-21.8 1.3-22.8.8-.7 18.8-14.4 40-30.3 21.3-16 38.7-29.3 38.7-29.8 0-.4-15.7-.7-34.9-.7h-34.8l-3.8 2.5c-2.9 2-21.3 17.3-37.6 31.2-1.4 1.2-4-.6-21.4-15.3-10.9-9.1-20.9-17-22.2-17.5-2.7-1-69.6-1.3-70.6-.3zM743 501.5V554h61v-27.5c0-15.1.2-27.5.5-27.5s16 11.3 34.8 25.2c18.8 13.8 35.7 26.2 37.6 27.5 3.3 2.3 3.7 2.3 33.7 2.3H941V449h-61l-.2 28.4-.3 28.3-38-28.1-37.9-28.1-30.3-.3-30.3-.3v52.6zM983 502v52h175v-24h-110v-20h100v-22h-99v-16h106v-22H983v52zM59 619.5V646h49v-7H70v-17h37v-7H70v-15h38v-7H59v26.5zM160 619.5V646h11l.2-21.7.3-21.8 18.9 21.8 18.8 21.7H225v-53h-11l-.2 22.1-.3 22-17.2-19.8c-9.4-10.9-18.1-20.8-19.3-22.1-1.8-1.9-3.1-2.2-9.5-2.2H160v26.5zM273 597v4h24v45h10v-45h24v-8h-58v4zM379 619.5V646h49v-7h-38v-17h37v-7h-37v-15h38v-7h-49v26.5zM592 619.4V646h10v-20l17.8-.1c20.3 0 23.6-.8 26.7-5.9 2.7-4.8 2.8-16.2.1-20.3-3.9-5.7-5.9-6.2-31.3-6.5l-23.3-.4v26.6zm44.3-16.2c2.4 2.8 2.3 9.9-.2 12.9-1.9 2.3-2.5 2.4-18 2.7l-16.1.3V599.8l16.3.7c14.6.6 16.4.9 18 2.7zM698.8 593.5c-.5.5-.8 12.5-.8 26.7V646h11v-20.1l16.6.3c19.8.4 19.4.1 19.4 12v7.8h11v-9.1c0-8.6-.1-9.2-2.8-11.9l-2.9-2.8 2.9-3c7-6.9 5.1-19.5-3.5-23.5-2.8-1.4-8.2-1.8-26.8-2.3-12.9-.4-23.7-.3-24.1.1zm45.5 9.7c1 1.3 1.7 3.7 1.7 6.4 0 6.2-2.4 8.4-9.2 8.4-2.9 0-10.4.3-16.5.7l-11.3.6v-19.4l16.8.7c15 .5 16.9.8 18.5 2.6zM810 619.5V646h10v-53h-10v26.5zM879 595.2c-5.4 2.8-7 5.6-7 12.5 0 11.7 3.7 13.9 25.3 15.3 7.8.5 15 1 15.9 1 4.4 0 6.5 8.1 3.2 12.8-1.4 2.1-2.2 2.2-16.4 2.2s-15-.1-16.4-2.2c-.9-1.2-1.6-3.7-1.6-5.5V628h-5.5c-5 0-5.5.2-5.5 2.2.1 4.8 2 10.2 4.4 12.6 2.3 2.3 3.6 2.6 13.3 3.3 5.9.3 15.9.3 22.2 0 11.1-.7 11.5-.8 14.2-3.8 3.4-3.9 4.7-11.9 2.7-17.7-2.2-6.5-5.1-7.6-24.8-9-19.1-1.3-20.5-1.8-20.3-8.2.2-6.1 1.7-6.9 15.9-7.2 14.1-.4 16.7.5 17.9 5.8.6 2.8.9 3 5.6 3h4.9v-3.5c0-2-.6-4.8-1.4-6.4-2.5-4.8-5.5-5.5-24.6-5.9-16.6-.3-17.7-.2-22 2zM980 619.5V646h49v-7h-38v-17h37v-7h-37v-15h38v-7h-49v26.5zM1087.5 594.2c-1.6.6-4 2-5.3 3.1-4.6 4.2-5.2 14.9-1.1 20.1 2.8 3.5 7.2 4.5 24.9 5.7 14.1.9 15.7 1.1 17.4 3.2 1.3 1.6 1.7 3.2 1.3 6-.9 6.6-1.3 6.7-17.8 6.7-16.8 0-17.9-.4-17.9-7.1V628h-11.3l.6 5.7c1.2 11.2 8.2 14 33.2 13.1 20.1-.8 23.8-3.3 23.7-15.7 0-12.7-2-13.9-26-15.6-15-1-17.7-1.5-18.8-3-2-2.7-1.7-6.9.5-9.6 1.8-2.3 2.7-2.4 14.6-2.7 14.2-.4 16.8.4 17.8 5.7.6 3 .9 3.1 5.8 3.1h5.2l-.6-4.6c-.6-5.4-3.5-9-8.6-10.4-4.7-1.3-33.7-1.1-37.6.2zM481 620v26h10v-20.1l16.6.3c19.8.4 19.4.1 19.4 12v7.8h11v-9.1c0-8.6-.1-9.2-2.9-11.9l-2.9-2.9 2.3-1.5c3.1-2 5.9-9.6 5.1-13.8-.3-1.8-1.5-4.8-2.6-6.6-3.5-5.7-6.2-6.2-32.5-6.2H481v26zm45.2-17.3c2.2 2 2.5 10 .4 12.8-1.6 2.2-10.1 3.3-25.8 3.4l-9.8.1v-18h16.7c14.1 0 16.9.3 18.5 1.7z" />
                                        </symbol>
                                        <symbol id="logo-scdp" width="528" height="474.667" viewBox="0 0 528 474.667"
                                            fill="currentColor">
                                            <g>
                                                <path
                                                    d="M495.59 165.952c-19.373 29.875-57.182 38.279-93.36 38.279-16.103 0-31.975-1.402-47.146-6.068-33.843-10.506-61.85-36.412-61.85-81.691 0-31.976 16.803-89.624 110.63-89.624 80.056 0 92.66 36.41 98.028 52.047l-54.616 9.802c-2.333-4.666-5.135-10.969-13.77-16.57-8.869-5.602-19.84-7.47-28.242-7.47-26.607 0-50.413 16.571-50.413 51.582 0 24.973 14.704 50.88 48.546 50.88 12.838 0 24.742-3.967 33.376-10.97 7.702-6.301 10.036-11.669 11.904-16.569l56.248 5.833c-1.866 6.07-3.966 12.138-9.336 20.539zM506.412 0H291.747c-11.783 0-21.08 9.755-21.08 21.539v204c0 2.945 2.134 5.128 5.08 5.128h230.666c11.782 0 21.587-9.347 21.587-21.128v-188C528 9.755 518.195 0 506.413 0M210.103 174.004c-13.771 20.773-41.546 29.876-85.89 29.876-16.572 0-49.481-1.401-68.854-18.672-14.237-12.604-16.337-27.773-17.272-35.243l58.117-1.634c2.1 10.736 13.071 18.905 36.41 18.905 6.069 0 14.705-.7 20.54-3.968 3.967-2.333 8.167-7.003 8.167-12.604 0-7.701-6.3-10.97-10.968-12.603-7.236-2.336-44.346-8.869-52.516-10.736-6.534-1.401-12.603-3.034-18.905-5.136-6.3-2.333-32.675-11.669-32.675-41.778 0-12.37 5.135-23.804 13.304-32.208 18.437-19.139 51.58-21.006 69.785-21.006 20.073 0 39.911 2.8 50.182 6.303 30.808 9.801 34.776 32.908 36.41 41.779l-57.883 3.265c-1.4-5.368-4.202-15.17-28.941-15.17-7.703 0-25.908 1.167-25.908 13.302 0 2.336.7 4.436 1.867 5.836 3.968 5.136 20.539 8.87 29.642 10.737 11.202 2.568 22.64 4.667 33.842 7.235 7.236 1.401 14.239 3.033 21.24 5.836 21.939 8.17 28.942 24.505 28.942 39.443 0 10.97-3.735 21.008-8.636 28.241zM235.747 0H21.08C9.297 0 0 9.755 0 21.539v188c0 11.781 9.297 21.128 21.08 21.128h230.667c2.945 0 5.586-2.183 5.586-5.128v-204C257.333 9.755 247.528 0 235.747 0M220.005 398.75c-4.202 9.57-11.904 22.574-30.81 32.38-17.736 9.335-34.075 10.203-49.947 10.203H34.667v-164h93.612c17.038 0 64.885-1.026 87.757 38.886 3.5 6.068 11.437 20.493 11.437 45 0 12.837-2.334 25.862-7.468 37.532zM251.747 244H21.08C9.297 244 0 253.755 0 265.539v188c0 11.78 9.297 21.128 21.08 21.128h214.667c11.781 0 21.586-9.347 21.586-21.128v-204c0-2.946-2.641-5.539-5.586-5.539" />
                                                <path
                                                    d="M155.12 325.517c-10.27-8.169-24.274-9.517-35.245-9.517H92v88h26.242c20.073 0 31.509-3.441 38.28-9.51 7.934-7.002 13.3-20.717 13.3-34.722 0-15.635-6.3-27.483-14.702-34.25M427.188 317.79c-4.203-3.035-9.57-3.123-14.239-3.123h-42.282v32h37.614c10.036 0 24.974-.086 24.974-15.956 0-5.602-2.567-10.354-6.067-12.922" />
                                                <path
                                                    d="M481.336 363.89C466.164 382.564 441.424 384 414.584 384h-43.917v58.667h-60V277.333h113.252c21.005 0 40.145.782 53.216 12.454 6.068 5.601 15.17 17.448 15.17 40.085 0 11.204-2.568 23.75-10.969 34.019zM506.413 244H275.747c-2.946 0-5.08 2.593-5.08 5.539v204c0 11.78 9.297 21.128 21.08 21.128h214.666c11.782 0 21.587-9.347 21.587-21.128v-188c0-11.784-9.805-21.539-21.587-21.539" />
                                            </g>
                                        </symbol>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('include/footer.php');?>

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