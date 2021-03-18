<!DOCTYPE html>
<html lang="utf-8">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php
            $uri = $this->uri->segment_array();
            $url = end($uri);
            echo $url == '' ? 'Home' : ucwords(str_replace('-',' ',$url));
            ?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style1.css">
</head>

<body class="body-bg">
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url() ?>assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><i class="far fa-clock"></i> Mon - SAT: 6.00 am - 10.00 pm</li>
                                        <li>Sun: Closed</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="https://www.facebook.com/Career-Foster-103027058542297" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/salescareerfos1" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/career-foster-global/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li> <a href="https://www.instagram.com/careerfoster/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="<?= base_url() ?>">Home</a></li>
                                                <li><a href="<?= base_url() ?>about-us">About</a></li>
                                                <li><a href="<?= base_url() ?>industries-served">Industries Served</a>
                                                    <ul class="submenu">

                                                        <li><a href="<?= base_url() ?>industries-served/manufacturing-page-and-engineering">Manufacturing Page & Engineering</a></li>
                                                        <li><a href="<?= base_url() ?>industries-served/engineering">Engineering</a></li>
                                                        <li><a href="<?= base_url() ?>industries-served/automobile-sector">Automobile-Sector</a></li>
                                                        <li><a href="<?= base_url() ?>industries-served/banking-financial-services">Banking & Financial-Services</a></li>
                                                        <li><a href="<?= base_url() ?>industries-served/health-care">Health-Care</a></li>
                                                        <li><a href="<?= base_url() ?>industries-served/retail-and-e-commerce">Retail & E-commerce</a></li>
                                                        <li><a href="<?= base_url() ?>industries-served/retail">Retail</a></li>
                                                        <li><a href="<?= base_url() ?>industries-served/oil-and-gas-sector">Oil & Gas Sector</a></li>
                                                        <li><a href="<?= base_url() ?>industries-served/media-and-entertainment">Media & Entertainment</a></li>
                                                        <li><a href="<?= base_url() ?>industries-served/sales-and-marketing">Sales & Marketing</a></li>
                                                        <li><a href="<?= base_url() ?>industries-served/marketing">Marketing</a></li>

                                                    </ul>

                                                </li>


                                                <li><a href="<?= base_url() ?>services">Services</a>
                                                    <ul class="submenu">
                                                        <li><a href="<?= base_url() ?>services/executive-search">Executive Search</a></li>
                                                        <li><a href="<?= base_url() ?>services/senior-and-middle-level-hiring">Senior & middle level hiring</a></li>
                                                        <li><a href="<?= base_url() ?>services/recruitment-process-outsourcing">Recruitment process outsourcing</a></li>
                                                        <li><a href="<?= base_url() ?>services/market-intelligence">Market Intelligence</a></li>
                                                        <li><a href="<?= base_url() ?>services/project-based-recruitment">Project Based Recruitment</a></li>
                                                        <li><a href="<?= base_url() ?>services/bulk-recruitment">Bulk Recruitment</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?= base_url() ?>diversity-and-inclusion">Diversity & Inclusion</a>
                                                    <ul class="submenu">
                                                        <li><a href="<?= base_url() ?>diversity-and-inclusion/why-us">Why Us?</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?= base_url() ?>contact-us">Contact</a></li>
                                                <li><a href="<?= base_url() ?>faq">FAQ</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>