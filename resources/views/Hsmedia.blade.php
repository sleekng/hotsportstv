<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="#">
    <meta name="description" content="#">
    <meta name="keywords" content="#">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/storage/media/'.'favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/storage/media/'.'apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/storage/media/'.'apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/storage/media/'.'apple-touch-icon-114x114.png') }}">

    <title>HS MEDIA GROUP</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,600;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- styles -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <style>
        /* Define a uniform height for swiper slides */
        .swiper-container-custom .swiper-slide {
            height: 600px;
			padding: 40px;
            /* Set your desired height */
            display: flex;
			flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        /* Ensure images fit within the slide height */
        .swiper-container-custom .swiper-slide img {
            max-height: 100%;
            width: auto;
            object-fit: cover;
        }

        /* Optional: Handle content alignment */
        .swiper-container-custom .swiper-slide .padding-20 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
		
    </style>
</head>

<body class="preloader cursor-anim-enable dark-nav">
    <!-- preloader-loading start -->
    <div class="preloader__logoload-box">
        <img class="preloader__logo vertical"
            src="{{ asset('/storage/media/'.'Homepage/Main Logos/HS Media Group@2x.png') }}" alt="logo">
        <div class="preloader__pulse"></div>
    </div><!-- preloader-loading end -->

    <!-- pointer start -->
    <div class="pointer js-pointer" id="js-pointer">
        <i class="pointer__inner fas fa-long-arrow-alt-right"></i>
        <i class="pointer__inner fas fa-search"></i>
        <i class="pointer__inner fas fa-link"></i>
    </div><!-- pointer end -->

    <!-- to top btn start -->
    <a href="#up" class="scroll-to-btn js-headroom js-midnight-color js-smooth-scroll js-pointer-large">
        <span class="scroll-to-btn__box">
            <span class="scroll-to-btn__arrow"></span>
        </span>
    </a><!-- to top btn end -->

    <!-- scroll down btn start -->
    <a href="#down"
        class="scroll-to-btn to-down js-headroom js-midnight-color js-smooth-scroll js-pointer-large js-scroll-btn">
        <span class="scroll-to-btn__box">
            <span class="scroll-to-btn__arrow"></span>
        </span>
    </a><!-- scroll down btn end -->

    <!-- header start -->
    <header class="fixed-header">



        <!-- menu-icon start -->
        <div class="menu-icon js-menu-open-close js-pointer-large js-midnight-color js-headroom">
            <div class="menu-icon__box">
                <span class="menu-icon__inner"></span>
                <span class="menu-icon__close"></span>
            </div>
        </div><!-- menu-icon end -->



        <!-- header-social start -->
        <div class="header-social after-preloader-anim js-midnight-color js-headroom">
            <ul class="list list_center list_margin-20px hidden-box">
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="https://www.facebook.com/hsstudiosng" class="anim-slide js-pointer-small">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="https://youtube.com/@hsstudios-zy6yc?si=jglRYvKG3kmFE7FY" class="anim-slide tr-delay-02 js-pointer-small">
                            <i class="fab fa-youtube fa-lg"></i>
                        </a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="https://www.instagram.com/hsstudiosng/" class="anim-slide tr-delay-04 js-pointer-small">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="https://wa.link/jnt7oz" class="anim-slide tr-delay-06 js-pointer-small">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div><!-- header-social end -->
    </header><!-- header end -->

    <!-- navigation start -->
    <nav class="nav-container pos-rel js-dropdown-active-box">
        <!-- pos-rel start -->
        <div class="pos-rel height-100perc">
            <!-- dropdown close btn start -->
            <div class="dropdown-close">
                <div class="dropdown-close__inner js-dropdown-close js-pointer-large">
                    <span class="dropdown-close__arrow"></span>
                </div>
            </div><!-- dropdown close btn end -->

            <!-- js-nav-slider-bg start -->
            <div class="js-nav-slider-bg">
                <!-- swiper-wrapper start -->
                <div class="swiper-wrapper">
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <div class="nav-slide-bg"
                            style="background-image:url({{ asset('/storage/media/'.'projects/speakers/revolt-BMest61rcqs-unsplash.jpg') }})">
                        </div>
                        <div class="bg-overlay-black"></div>
                    </div><!-- swiper-slide end -->
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <div class="nav-slide-bg"
                            style="background-image:url({{ asset('/storage/media/'.'projects/sneakers/revolt-164_6wVEHfI-unsplash.jpg') }})">
                        </div>
                        <div class="bg-overlay-black"></div>
                    </div><!-- swiper-slide end -->
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <div class="nav-slide-bg"
                            style="background-image:url({{ asset('/storage/media/'.'projects/black-bike/josh-nuttall-pIwu5XNvXpk-unsplash.jpg') }})">
                        </div>
                        <div class="bg-overlay-black"></div>
                    </div><!-- swiper-slide end -->
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <div class="nav-slide-bg"
                            style="background-image:url({{ asset('/storage/media/'.'projects/pexels/woman-in-black-sexy-top-2825034.jpg') }})">
                        </div>
                        <div class="bg-overlay-black"></div>
                    </div><!-- swiper-slide end -->
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <div class="nav-slide-bg"
                            style="background-image:url({{ asset('/storage/media/'.'projects/furniture/goashape-RvyJGaoaWrs-unsplash.jpg') }})">
                        </div>
                        <div class="bg-overlay-black"></div>
                    </div><!-- swiper-slide end -->
                </div><!-- swiper-wrapper end -->
            </div><!-- js-nav-slider-bg end -->

            <!-- menu-box start -->
            <ul class="menu-box">
                <!-- nav-btn-box start -->
                <li class="nav-btn-box">
                    <a href="/" class="nav-btn large js-pointer-large">
                        <span class="nav-btn__inner" data-text="Home">Home</span>
                    </a>
                </li><!-- nav-btn-box end -->

                <!-- nav-btn-box start -->
                <li class="nav-btn-box">
                    <a href="About-Us" class="nav-btn large  js-pointer-large">
                        <span class="nav-btn__inner" data-text="About-Us">About Us</span>
                    </a>
                </li><!-- nav-btn-box end -->

                <!-- nav-btn-box start -->
                <li class="nav-btn-box">
                    <a href="Our-Companies" class="nav-btn large  js-pointer-large">
                        <span class="nav-btn__inner" data-text="Our-Companies">Our Companies</span>
                    </a>
                </li><!-- nav-btn-box end -->


                <!-- nav-btn-box start -->
                <li class="nav-btn-box">
                    <a href="/blog" class="nav-btn large  js-pointer-large">
                        <span class="nav-btn__inner" data-text="Blog">Blog</span>
                    </a>
                </li><!-- nav-btn-box end -->


                <!-- nav-btn-box start -->
                <li class="nav-btn-box">
                    <a href="Contact-Us"
                        class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
                        <span class="nav-btn__inner" data-text="Contact">Contact</span>
                    </a>
                </li><!-- nav-btn-box end -->
            </ul><!-- menu-box end -->

            <!-- nav-information start -->
            <div class="nav-information">
                <!-- nav-email start -->
                <div>
                    <div class="hidden-box d-inline-block">
                        <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Email:</div>
                    </div>
                    <div class="nav-fade-anim js-nav-anim margin-top-10">
                        <a href="#"
                            class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">info@hsmediagroup.tv</a><br>
                    </div>
                </div><!-- nav-email end -->

                <!-- nav-address start -->
                <div>
                    <div class="hidden-box d-inline-block">
                        <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Address:</div>
                    </div>
                    <div class="nav-fade-anim js-nav-anim margin-top-10">
                        <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">
                            1-5 Hotsports Drive, Off Etal Avenue,Kudirat Abiola Way, by NNPC Filling Station,Ikeja,Lagos
                            Nigeria
                        </a>
                    </div>
                </div><!-- nav-address end -->

                <!-- nav-phone start -->
                <div>
                    <div class="hidden-box d-inline-block">
                        <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Phone</div>
                    </div>
                    <div class="nav-fade-anim js-nav-anim margin-top-10">
                        <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">+234
                            803 0945
                            660</a><br>
                        <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">+234
                            809 7869
                            971</a>
                    </div>
                </div><!-- nav-phone end -->
            </div><!-- nav-information end -->

            <!-- nav-copyright start -->
            <div class="nav-copyright text-right">
                <p class="copyright-style nav-fade-anim js-nav-anim">
                    &copy; Copyright 2021 HS Group. <a href="#" class="text-weight-700 js-pointer-small"></a>
                </p>
            </div><!-- nav-copyright end -->
        </div><!-- pos-rel end -->
    </nav><!-- navigation end -->

    <!-- main start -->
    <main class="js-animsition-overlay" data-animsition-overlay="true">
        <!-- pos-rel start -->
        <section id="up" class="pos-rel js-parallax-bg"
            style="background-image:url({{ asset('/storage/media/'.'HS-Studios/Hero\ Image@2x.png') }})">
            <!-- bg-overlay -->
            <div class="bg-overlay-black"></div>
            <!-- lines-container start -->
            <div class="lines-container pos-rel anim-lines flex-min-height-100vh">
                <div class="padding-top-bottom-120 width-100perc">
                    <div class="margin-top-30 text-center tr-delay-08">
                        <img class="padding-bottom-80 hsmedia-logo"
                            src="{{ asset('/storage/media/'.'Homepage/Main Logos/HS Studios@2x.png') }}"
                            style="width: 10%;"> <br>
                        <a href="studios" class="ellipse-btn_red  js-pointer-large">
                            <span class="">Take a Virtual Tour <i class="fa fa-chevron-right"
                                    aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
            </div><!-- lines-container end -->
        </section><!-- pos-rel end -->


        <!-- About-Us start -->
        <section id="down" class="pos-rel section-bg-dark-2">
            <!-- pos-rel start -->
            <div class="pos-rel  padding-top-bottom-60">
                <!-- flex-container start -->
                <div class="container.full flex-container" style="justify-content: space-between;">
                    <!-- column start -->
                    <div class="three-columns">
                        <!-- title start -->
                        <h2 class="column-l-margin-100 headline-l js-scrollanim margin-top-120">
                            <span class="hidden-box d-block">
                                <span class="anim-slide tr-delay-01 text-color-red">You Can Trust Us</span>
                            </span>
                        </h2><!-- title end -->
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="five-columns">
                        <div class="column-l-r-margin-10-999 margin-top-100">
                            <p class="body-text-xxl  js-scrollanim margin-top-20">We are a purpose built studio complex
                                with state-of- the-art soundproofed and fully equipped studios sized
                                45m<sup>2</sup>, 150m<sup>2</sup> and 900m<Sup>2</Sup>. <br> Each space is designed for
                                one step
                                production providing post-production offices with Adobe creative
                                suite,pre-production meeting rooms,chalets, and packing portion for over 100
                                vehicles.<br> Following the completion of our studio
                                complex and fully equipping our facilities with top of the range equipments,we
                                are planning to launch and introduce our studios to key stakeholders.</p>
                        </div>
                    </div><!-- column end -->
                    <div class="three-columns">
                        <div class="column-l-r-margin-5 ">
                            <img class="img-hover-scale"
                                src="{{ asset('/storage/media/'.'HS-Studios/Side IMage@2x.png') }}" alt="About-Us">
                        </div>
                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- pos-rel end -->
        </section><!-- About-Us end -->



        <section id="down" class="pos-rel section-bg-dark-2">
            <!-- pos-rel start -->
            <div class="pos-rel  padding-top-bottom-150">
                <!-- title start -->
                <h2 class="headline-xxl text-center js-scrollanim margin-bottom-60">
                    <span class="anim-text-double-fill tr-delay-02" data-text="Our Values">Our Values</span>
                </h2><!-- title end -->

                <!-- flex-container start -->
                <div class="container.full flex-container">

                    <!-- flex-container start -->
                    <div class="flex-container my-container">
                        <!-- column start -->
                        <div class="two-columns column-100-100 padding-top-30 js-scrollanim">
                            <div class="column-l-r-margin-10-999 hover-box pos-rel grow image-mobile">
                                <a href="#"
                                    class="d-block hidden-box js-pointer-large js-animsition-link border-radius-10px ">
                                    <img class=""
                                        src="{{ asset('/storage/media/'.'HS-Studios/1920x1080-red-solid-color-background.jpg') }}"
                                        alt="Post">
                                    <!-- bg-overlay -->
                                    <h3 class="headline-xxxs pos-abs pos-center-center list list_margin-1px">
                                        <span class="list__item">
                                            <span class="list__item text-center">
                                                <span class="hidden-box d-inline-block margin-bottom-20">
                                                    <img src="{{ asset('/storage/media/'.'HS-Studios/value.png') }}"
                                                        style="width: 75%;">
                                                </span>
                                            </span>
                                            <span class="hidden-box d-inline-block text-center">
                                                <span class="anim-reveal">Value Driven</span>
                                            </span>
                                        </span>
                                    </h3>
                                </a>
                            </div>
                        </div><!-- column end -->

                        <div class="two-columns column-100-100 padding-top-30 js-scrollanim">
                            <div class="column-l-r-margin-10-999 hover-box pos-rel grow image-mobile">
                                <a href="#"
                                    class="d-block hidden-box js-pointer-large js-animsition-link border-radius-10px">
                                    <img src="{{ asset('/storage/media/'.'HS-Studios/1920x1080-red-solid-color-background.jpg') }}"
                                        alt="Post">
                                    <!-- bg-overlay -->
                                    <h3 class="headline-xxxs pos-abs pos-center-center list list_margin-1px">
                                        <span class="list__item">
                                            <span class="list__item text-center">
                                                <span class="hidden-box d-inline-block  margin-bottom-20">
                                                    <img src="{{ asset('/storage/media/'.'HS-Studios/hospitality.png') }}"
                                                        style="width: 75%;">
                                                </span>
                                            </span>
                                            <span class="hidden-box d-inline-block text-center">
                                                <span class="anim-reveal">Customer Centricity</span>
                                            </span>
                                        </span>
                                    </h3>
                                </a>
                            </div>
                        </div><!-- column end -->

                        <div class="two-columns column-100-100 padding-top-30 js-scrollanim">
                            <div class="column-l-r-margin-10-999 hover-box pos-rel grow image-mobile">
                                <a href="#"
                                    class="d-block hidden-box js-pointer-large js-animsition-link border-radius-10px">
                                    <img class="img-hover-scale"
                                        src="{{ asset('/storage/media/'.'HS-Studios/1920x1080-red-solid-color-background.jpg') }}"
                                        alt="Post">

                                    <h3 class="headline-xxxs pos-abs pos-center-center  list list_margin-1px">
                                        <span class="list__item">
                                            <span class="list__item text-center">
                                                <span class="hidden-box d-inline-block  margin-bottom-20">
                                                    <img src="{{ asset('/storage/media/'.'HS-Studios/creativity.png') }}"
                                                        style="width: 75%;">
                                                </span>
                                            </span>
                                            <span class="hidden-box d-inline-block text-center">
                                                <span>Creativity</span>
                                            </span>
                                        </span>
                                    </h3>
                                </a>
                            </div>
                        </div><!-- column end -->

                        <div class="two-columns column-100-100 padding-top-30 js-scrollanim">
                            <div class="column-l-r-margin-10-999 hover-box pos-rel grow image-mobile">
                                <a href="#"
                                    class="d-block hidden-box js-pointer-large js-animsition-link border-radius-10px">
                                    <img src="{{ asset('/storage/media/'.'HS-Studios/1920x1080-red-solid-color-background.jpg') }}"
                                        alt="Post">
                                    <h3 class="headline-xxxs pos-abs pos-center-center list list_margin-1px">
                                        <span class="list__item">
                                            <span class="list__item text-center">
                                                <span class="hidden-box d-inline-block  margin-bottom-20">
                                                    <img src="{{ asset('/storage/media/'.'HS-Studios/project-management.png') }}"
                                                        style="width: 75%;">
                                                </span>
                                            </span>
                                            <span class="hidden-box d-inline-block text-center">
                                                <span class="anim-reveal">Innovation</span>
                                            </span>
                                        </span>
                                    </h3>
                                </a>
                            </div>
                        </div><!-- column end -->
                    </div><!-- flex-container end -->

                </div>
            </div>
        </section>

        <!-- pricing start -->
        <section class="section pos-rel section-bg-dark-2">
            <!-- lines-container start -->
            <div class="container.full pos-rel padding-top-bottom-120">
                <!-- title start -->
                <h2 class="headline-l text-center js-scrollanim  margin-top-40">
                    <span class="anim-text-double-fill tr-delay-02" data-text="Our Studios">Our Studios</span>
                </h2><!-- title end -->

                <!-- flex-container start -->
                <div class="container.full  flex-container padding-top-30" style="justify-content: space-around;">
                    <!-- column start -->
                    <div class="two-columns padding-top-60 Price">
                        <div class="border-box border-radius-10px hidden-box bg-price">
                            <div class="padding-top-bottom-20 bg-img-cover pos-rel" style="background-color:#CC1F28"
                                ;)>
                                <!-- bg-overlay -->
                                <div class="pos-rel text-center">
                                    <a href="studio1">
                                        <h3 class="subhead-xxxl ">Studio 1</h3>
                                    </a>
                                </div>
                            </div>
                            <!-- list start -->
                            <ul class="list list_center list_margin-20px  margin-left-right-20 padding-top-bottom-30">
                                <hr class="hr">
                                <li class="list__item  text-color-b0b0b0 ">Purpose</li>
                                <h4 class="text-color-black margin-bottom-30">General</h4>
                                <hr>
                                <li class="list__item text-color-b0b0b0  ">Size (WxH)m2</li>
                                <h4 class="text-color-black margin-bottom-30">900m2</h4>
                                <hr>
                                <li class="list__item text-color-b0b0b0 ">Height</li>
                                <h4 class="text-color-black margin-bottom-30">12m</h4>
                                <hr>
                            </ul><!-- list end -->
                            <div class="margin-top-bottom-30 text-center">
                                <a href="javascript:void(0);" id="mpopupLink"
                                    class="ellipse-btn-studio  js-pointer-large">
                                    <span class="">Book This Studio <i class="fa fa-chevron-right"
                                            aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="two-columns padding-top-60 Price">
                        <div class="border-box border-radius-10px hidden-box bg-price">
                            <div class="padding-top-bottom-20 bg-img-cover pos-rel" style="background-color:#CC1F28"
                                ;)>
                                <!-- bg-overlay -->
                                <div class="pos-rel text-center">
                                    <a href="studio2">
                                        <h3 class="subhead-xxxl">Studio 2</h3>
                                    </a>
                                </div>
                            </div>
                            <!-- list start -->
                            <ul class="list list_center list_margin-20px  margin-left-right-20  padding-top-bottom-30">
                                <hr class="hr">
                                <li class="list__item   text-color-b0b0b0 ">Purpose</li>
                                <h4 class="text-color-black margin-bottom-30">General</h4>
                                <hr>
                                <li class="list__item text-color-b0b0b0   ">Size (WxH)m2</li>
                                <h4 class="text-color-black margin-bottom-30">166m2</h4>
                                <hr>
                                <li class="list__item text-color-b0b0b0   ">Height</li>
                                <h4 class="text-color-black margin-bottom-30">6.9m</h4>
                                <hr>
                            </ul><!-- list end -->
                            <div class="margin-top-bottom-30 text-center">
                                <a href="javascript:void(0);" id="mpopupLink2"
                                    class="ellipse-btn-studio  js-pointer-large">
                                    <span class="">Book This Studio <i class="fa fa-chevron-right"
                                            aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="two-columns padding-top-60 Price ">
                        <div class=" border-box border-radius-10px hidden-box bg-price">
                            <div class="padding-top-bottom-20 bg-img-cover pos-rel" style="background-color:#CC1F28"
                                ;)>
                                <!-- bg-overlay -->
                                <div class="pos-rel text-center">
                                    <a href="studio3">
                                        <h3 class="subhead-xxxl">Studio 3</h3>
                                    </a>
                                </div>
                            </div>
                            <!-- list start -->
                            <ul class="list list_center list_margin-20px  margin-left-right-20  padding-top-bottom-30">
                                <hr class="hr">
                                <li class="list__item   text-color-b0b0b0 ">Purpose</li>
                                <h4 class="text-color-black margin-bottom-30">General</h4>
                                <hr>
                                <li class="list__item text-color-b0b0b0   ">Size (WxH)m2</li>
                                <h4 class="text-color-black margin-bottom-30">166m2</h4>
                                <hr>
                                <li class="list__item text-color-b0b0b0   ">Height</li>
                                <h4 class="text-color-black margin-bottom-30">6.9m</h4>
                                <hr>
                            </ul><!-- list end -->
                            <div class="margin-top-bottom-30 text-center">
                                <a href="javascript:void(0);" id="mpopupLink11"
                                    class="ellipse-btn-studio  js-pointer-large">
                                    <span class="">Book This Studio <i class="fa fa-chevron-right"
                                            aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="two-columns padding-top-60 Price">
                        <div class=" border-box border-radius-10px hidden-box bg-price">
                            <div class="padding-top-bottom-20 bg-img-cover pos-rel" style="background-color:#CC1F28"
                                ;)>
                                <!-- bg-overlay -->
                                <div class="pos-rel text-center">
                                    <a href="studio4">
                                        <h3 class="subhead-xxxl">Studio 4</h3>
                                    </a>
                                </div>
                            </div>
                            <!-- list start -->
                            <ul class="list list_center list_margin-20px  margin-left-right-20  padding-top-bottom-30">
                                <hr class="hr">
                                <li class="list__item   text-color-b0b0b0 ">Purpose</li>
                                <h4 class="text-color-black margin-bottom-30">General Screen</h4>
                                <hr>
                                <li class="list__item text-color-b0b0b0   ">Size (WxH)m2</li>
                                <h4 class="text-color-black margin-bottom-30">40m2</h4>
                                <hr>
                                <li class="list__item text-color-b0b0b0   ">Height</li>
                                <h4 class="text-color-black margin-bottom-30">4m</h4>
                                <hr>
                            </ul><!-- list end -->
                            <div class="margin-top-bottom-30 text-center">
                                <a href="javascript:void(0);" id="mpopupLink3"
                                    class="ellipse-btn-studio js-pointer-large">
                                    <span class="">Book This Studio <i class="fa fa-chevron-right"
                                            aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="two-columns padding-top-60 Price ">
                        <div class=" border-box border-radius-10px hidden-box bg-price">
                            <div class="padding-top-bottom-20 bg-img-cover pos-rel studio-hover"
                                style="background-color:#CC1F28" ;)>
                                <!-- bg-overlay -->
                                <div class="pos-rel text-center">
                                    <a href="studio5">
                                        <h3 class="subhead-xxxl">Studio 5</h3>
                                    </a>
                                </div>
                            </div>
                            <!-- list start -->
                            <ul class="list list_center list_margin-20px  margin-left-right-20  padding-top-bottom-30">
                                <hr class="hr">
                                <li class="list__item   text-color-b0b0b0 ">Purpose</li>
                                <h4 class="text-color-black margin-bottom-30">General Screen</h4>
                                <hr>
                                <li class="list__item text-color-b0b0b0   ">Size (WxH)m2</li>
                                <h4 class="text-color-black margin-bottom-30">40m2</h4>
                                <hr>
                                <li class="list__item text-color-b0b0b0   ">Height</li>
                                <h4 class="text-color-black margin-bottom-30">4m</h4>
                                <hr>
                            </ul><!-- list end -->
                            <div class="margin-top-bottom-30 text-center">
                                <a href="javascript:void(0);" id="mpopupLink5"
                                    class="ellipse-btn-studio  js-pointer-large">
                                    <span class="">Book This Studio <i class="fa fa-chevron-right"
                                            aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- lines-container end -->
        </section><!-- pricing end -->

        <!-- photo gallery start -->
        <section class="pos-rel section-bg-dark-2">
            <!-- pos-rel start -->
            <div class="pos-rel padding-top-bottom-60">
                <!-- title start -->
                <h2 class="headline-l text-center hidden-box margin-bottom-60">
                    <span class="anim-slide js-scrollanim text-color-red">Photo Gallery</span>
                </h2><!-- title end -->

                <!-- js-isotope-grid-box start -->
                <div class="js-isotope-grid-box container full padding-top-50">

                    <!-- grid-item start -->
                    <div class="padding-top-40 grid-item-33-50-100 js-isotope-grid-item">
                        <a href="{{ asset('/storage/media/'.'HS-Studios/Photo Gallery/alex-mccarthy-U9uiPBfKY9I-unsplash@2x.png') }}"
                            class="grid-margin-box js-photo-popup js-pointer-zoom">
                            <div class="anim-img-scale js-img-scale">
                                <img class="anim-img-scale__inner"
                                    src="{{ asset('/storage/media/'.'HS-Studios/Photo Gallery/alex-mccarthy-U9uiPBfKY9I-unsplash@2x.png') }}"
                                    alt="Studio Images">
                            </div>
                        </a>
                    </div><!-- grid-item end -->

                    <!-- grid-item start -->
                    <div class="padding-top-40 grid-item-33-50-100 js-isotope-grid-item">
                        <a href="{{ asset('/storage/media/'.'HS-Studios/Photo Gallery/john-benitez-2zFaN2YsGN8-unsplash@2x.png') }}"
                            class="grid-margin-box js-photo-popup js-pointer-zoom">
                            <div class="anim-img-scale js-img-scale">
                                <img class="anim-img-scale__inner"
                                    src="{{ asset('/storage/media/'.'HS-Studios/Photo Gallery/john-benitez-2zFaN2YsGN8-unsplash@2x.png') }}"
                                    alt="Studio Images">

                            </div>
                        </a>
                    </div><!-- grid-item end -->

                    <!-- grid-item start -->
                    <div class="padding-top-40 grid-item-33-50-100 js-isotope-grid-item">
                        <a href="{{ asset('/storage/media/'.'HS-Studios/Photo Gallery/kate-oseen-XqLQxSUuEXQ-unsplash@2x.png') }}"
                            class="grid-margin-box js-photo-popup js-pointer-zoom">
                            <div class="anim-img-scale js-img-scale">
                                <img class="anim-img-scale__inner"
                                    src="{{ asset('/storage/media/'.'HS-Studios/Photo Gallery/kate-oseen-XqLQxSUuEXQ-unsplash@2x.png') }}"
                                    alt="Studio Images">

                            </div>
                        </a>
                    </div><!-- grid-item end -->

                    <!-- grid-item start -->
                    <div class="padding-top-40 grid-item-33-50-100 js-isotope-grid-item margin-top-30">
                        <a href=" {{ asset('/storage/media/'.'HS-Studios/Photo Gallery/joshua-hanson-73ctnpVWJio-unsplash@2x.png') }}"
                            class="grid-margin-box js-photo-popup js-pointer-zoom">
                            <div class="anim-img-scale js-img-scale">
                                <img class="anim-img-scale__inner"
                                    src="{{ asset('/storage/media/'.'HS-Studios/Photo Gallery/joshua-hanson-73ctnpVWJio-unsplash@2x.png') }}"
                                    alt="Studio Images">
                            </div>
                        </a>
                    </div><!-- grid-item end -->

                    <!-- grid-item start -->
                    <div class="padding-top-40 grid-item-33-50-100 js-isotope-grid-item margin-top-30">
                        <a href="{{ asset('/storage/media/'.'HS-Studios/Photo Gallery/keagan-henman-pPxJTtxfV1A-unsplash@2x.png') }}"
                            class="grid-margin-box js-photo-popup js-pointer-zoom">
                            <div class="anim-img-scale js-img-scale">
                                <img class="anim-img-scale__inner"
                                    src="{{ asset('/storage/media/'.'HS-Studios/Photo Gallery/keagan-henman-pPxJTtxfV1A-unsplash@2x.png') }}"
                                    alt="Studio Images">
                            </div>
                        </a>
                    </div><!-- grid-item end -->
                </div><!-- js-isotope-grid-box end -->
                <div class="text-center padding-bottom-60 padding-top-60">
                    <a href="studios" class="ellipse-btn-studio  js-pointer-large">
                        <span class="">View more photos <i class="fa fa-chevron-right"
                                aria-hidden="true"></i></span>
                    </a>
                </div>
            </div><!-- pos-rel end -->
        </section><!-- photo gallery end -->

        <!-- Projects start -->
        <section id="models" class="pos-rel section-bg-dark-2">
            <!-- pos-rel start -->
            <div class="pos-rel flex-min-height-80vh">
                <!-- width-100perc start -->
                <div class="width-100perc padding-top-bottom-120">
                    <!-- title start -->
                    <h3 class="text-center js-scrollanim">
                        <span class="headline-xl text-color-red d-block hidden-box">
                            <span class="anim-slide">Our Projects </span>
                        </span>
                    </h3><!-- title end -->

                    <!-- js-2-view-slider start -->
                    <div class="js-2-view-slider padding-top-bottom-90 hidden-box pos-rel">
                        <!-- swiper-wrapper start -->
                        <!-- swiper-wrapper start -->
                        <div class="swiper-wrapper swiper-container-custom">
                            <!-- swiper-slide start -->
                            @foreach ($projects as $project)
                                <div class="swiper-slide slide-scale-anim content-bg-dark-1 grow">
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="Renee Fields">
                                    <!-- content start -->
                                    <div class="padding-20 text-center">
                                        <h4 class="headline-xxxs anim-text-double-fill invert tr-delay-02"
                                            data-text="{{ $project->title }}">{{ $project->title }}</h4>
                                    </div><!-- content end -->
                                </div><!-- swiper-slide end -->
                            @endforeach
                        </div><!-- swiper-wrapper end -->


                        <!-- swiper-button-prev start -->
                        <div class="swiper-button-prev-box">
                            <div class="swiper-button-prev"></div>
                        </div><!-- swiper-button-prev end -->
                        <!-- swiper-button-next start -->
                        <div class="swiper-button-next-box">
                            <div class="swiper-button-next"></div>
                        </div><!-- swiper-button-next end -->

                        <!-- swiper-pagination start -->
                        <div class="pagination-box">
                            <div class="swiper-pagination counter-pagination"></div>
                        </div><!-- swiper-pagination end -->
                    </div><!-- js-2-view-slider end -->
                </div><!-- width-100perc end -->
            </div><!-- pos-rel end -->
        </section><!-- Projects end -->

        <!-- mPopup box -->
        <div id="mpopupBox" class="mpopup">
            <!-- mPopup content -->
            <div class="mpopup-content">
                <div class="mpopup-head">
                    <span class="close">×</span>
                </div>
                <div class="mpopup-main">
                    <!-- container start -->
                    <div class="container small padding-top-bottom-60 form-box">
                        <h4 class="headline-xs text-center text-color-red">Kindly Drop Your Contact Details.<br> We
                            Will
                            Be Glad To Reach Out To You.</h4>
                        <!-- flex-container start -->
                        <form action="#" method="post" name="formobrsv" id="send_form"
                            class="flex-container padding-top-40">
                            <!-- column start -->
                            <div class="nine-columns" style="margin: auto;">
                                <div class="column-r-margin-10">
                                    <input type="text" name="first_name" placeholder="Full Name" id="first_name"
                                        required class="form-input form-input_border js-pointer-small">
                                </div>
                            </div><!-- column end -->
                            <!-- column start -->
                            <div class="nine-columns" style="margin: auto;">
                                <div class="column-r-margin-10">
                                    <input type="tel" name="Phone_Number" placeholder="Phone Number"
                                        id="Phone_Number" required
                                        class="form-input form-input_border js-pointer-small">
                                </div>
                            </div><!-- column end -->
                            <!-- column start -->
                            <div class="nine-columns" style="margin: auto;">
                                <div class="column-r-margin-10">
                                    <input type="email" name="email" placeholder="Email Address" id="email"
                                        required class="form-input form-input_border js-pointer-small">
                                </div>
                            </div><!-- column end -->

                            <!-- column start -->
                            <div class="nine-columns" style="margin: auto;">
                                <div class="column-r-margin-10">
                                    <input type="text" name="Message" placeholder="Leave Us a Message"
                                        id="Message" required class="form-input form-input_border js-pointer-small">
                                </div>
                            </div><!-- column end -->
                            <!-- column start -->
                            <!-- column start -->
                            <div class="twelve-columns text-center padding-top-30">
                                <button id="send" class="ellipse-btn-small js-pointer-large">
                                    <span class="ellipse-btn-small__inner">submit <i class="fa fa-chevron-right"
                                            aria-hidden="true"></i></span>
                                    <span class="btn-wait">Wait</span>
                                    <span class="border-btn__lines-1"></span>
                                    <span class="border-btn__lines-2"></span>
                                </button>
                            </div><!-- column end -->
                        </form><!-- flex-container end -->
                    </div><!-- container end -->
                </div>
            </div>
        </div>

    </main><!-- main end -->




    <!-- footer start -->
    <footer class="fixed-footer pos-rel bg-img-cover js-fixed-footer"
        style="background-image:url({{ asset('/storage/media/'.'HS-Studios/Photo\ Gallery/keagan-henman-pPxJTtxfV1A-unsplash@2x.png') }})">
        <!-- bg-overlay -->
        <div class="bg-overlay-black"></div>
        <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <!-- container start -->
            <div class="container padding-top-bottom-120">

                <!-- flex-container start -->
                <div class="flex-container flex-align-center">
                    <!-- column start -->
                    <div class="eight-columns">
                        <h4 class="column-l-r-margin-10 headline-xxxl footer-title">
                            State of the art <br>studios suited <br>for your media<br>needs
                        </h4>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns footer-nav-mobile-padding">
                        <ul class="column-l-r-margin-10 footer-nav-list js-footer-hover-box ">
                            <li>
                                <a href="/"
                                    class="footer-nav__btn js-pointer-small js-footer-hover-link subhead-l">Home</a>
                            </li>
                            <li>
                                <a href="About-Us"
                                    class="footer-nav__btn js-pointer-small js-footer-hover-link subhead-l">About
                                    Us</a>
                            </li>
                            <li>
                                <a href="Our-Companies"
                                    class="footer-nav__btn js-pointer-small js-footer-hover-link subhead-l">Our
                                    Companies</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="footer-nav__btn js-pointer-small js-footer-hover-link subhead-l">Our
                                    Blog</a>
                            </li>
                            <li>
                                <a href="Contact-Us"
                                    class="footer-nav__btn js-pointer-small js-footer-hover-link subhead-l">Contact-Us</a>
                            </li>
                        </ul>
                    </div><!-- column end -->
                </div><!-- flex-container end -->

                <!-- flex-container start -->
                <div class="flex-container flex-justify-center padding-top-30">
                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60 footer-email">
                        <div class="column-l-r-margin-10">
                            <div class="headline-xxxxs">Email</div>
                            <div class="margin-top-10">
                                <a href="#"
                                    class="subhead-xxs text-color-white text-hover-to-white js-pointer-small">info@hsmediagroup.tv</a>
                            </div>
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60 footer-address">
                        <div class="column-l-r-margin-10">
                            <div class="headline-xxxxs">Address</div>
                            <div class="margin-top-10">
                                <a href="#" class="subhead-xxs text-color-white text-hover-to-white">
                                    1-5 Hotsports Drive, Off Etal Avenue,<br>Kudirat Abiola Way, by NNPC Filling
                                    Station,<br>Ikeja, Lagos,Nigeria
                                </a>
                            </div>
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60 footer-phone">
                        <div class="column-l-r-margin-10">
                            <div class="headline-xxxxs">Phone</div>
                            <div class="margin-top-10">
                                <a href="#" class="subhead-xxs text-color-white text-hover-to-white">+234 803
                                    0945
                                    660</a><br>
                                <a href="#" class="subhead-xxs text-color-white text-hover-to-white">+234 809
                                    7869
                                    971</a>
                            </div>
                        </div>
                    </div><!-- column end -->
                </div><!-- flex-container end -->

                <!-- footer-social start -->
                <ul class="footer-social-desktop-hidden list list_center padding-top-90 padding-bottom-20">
                    <li class="list__item">
                        <a href="#" class="flip-btn js-pointer-small" data-text="Facebook">Facebook</a>
                    </li>

                    <li class="list__item">
                        <a href="#" class="flip-btn js-pointer-small" data-text="Instagram">Instagram</a>
                    </li>
                    <li class="list__item">
                        <a href="#" class="flip-btn js-pointer-small" data-text="Twitter">Twitter</a>
                    </li>
                    <li class="list__item">
                        <a href="#" class="flip-btn js-pointer-small" data-text="LinkedIn">LinkedIn</a>
                    </li>
                </ul><!-- footer-social end -->

                <!-- footer-copyright start -->
                <div class="footer-copyright text-center pos-abs pos-bottom-center">
                    <p class="copyright-style">
                        &copy; Copyright 2021 HS MEDIA GROUP. <a href="#"
                            class="text-weight-700 js-pointer-small"></a>
                    </p>
                </div><!-- footer-copyright end -->
            </div><!-- container end -->
        </div><!-- pos-rel end -->
    </footer><!-- footer end -->

    <!-- scripts -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal_init.js') }}"></script>
    <script src="{{ asset('assets/js/modal.js') }}"></script>
</body>

</html>
