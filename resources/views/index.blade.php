<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="#">
    <meta name="description" content="#">
    <meta name="keywords" content="#">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/storage/media/' . 'favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/storage/media/' . 'apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/storage/media/' . 'apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/storage/media/' . 'apple-touch-icon-114x114.png') }}">

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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="preloader cursor-anim-enable dark-nav">
    <!-- preloader-loading start -->
    <div class="preloader__logoload-box">
        <img class="preloader__logo" src="{{ asset('/storage/media/' . 'Homepage/Main Logos/HS Media Group.png') }}"
            alt="logo">
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
    <header class="">
        <!-- logo start -->
        <div class="header-logo vertical js-midnight-color js-headroom" style="background-color: black;">
            <div class="hidden-box">
                <a href="/" class="header-logo__box  js-pointer-large js-animsition-link">
                    <img class="header-logo__img white margin-left-10 margin-right-20 margin-bottom-20"
                        style="width: 90%;"
                        src="{{ asset('/storage/media/' . 'Homepage/Main Logos/HS Media Group@2x.png') }}" alt="logo">
                </a>
            </div>
        </div><!-- logo end -->

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
                        <a href="#" class="anim-slide js-pointer-small">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="#" class="anim-slide tr-delay-02 js-pointer-small">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="#" class="anim-slide tr-delay-04 js-pointer-small">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="#" class="anim-slide tr-delay-06 js-pointer-small">
                            <i class="fab fa-linkedin"></i>
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
                            style="background-image:url({{ asset('/storage/media/' . 'projects/speakers/revolt-BMest61rcqs-unsplash.jpg') }})">
                        </div>
                        <div class="bg-overlay-black"></div>
                    </div><!-- swiper-slide end -->
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <div class="nav-slide-bg"
                            style="background-image:url({{ asset('/storage/media/' . 'projects/sneakers/revolt-164_6wVEHfI-unsplash.jpg') }})">
                        </div>
                        <div class="bg-overlay-black"></div>
                    </div><!-- swiper-slide end -->
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <div class="nav-slide-bg"
                            style="background-image:url({{ asset('/storage/media/' . 'projects/black-bike/josh-nuttall-pIwu5XNvXpk-unsplash.jpg') }})">
                        </div>
                        <div class="bg-overlay-black"></div>
                    </div><!-- swiper-slide end -->
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <div class="nav-slide-bg"
                            style="background-image:url({{ asset('/storage/media/' . 'projects/pexels/woman-in-black-sexy-top-2825034.jpg') }})">
                        </div>
                        <div class="bg-overlay-black"></div>
                    </div><!-- swiper-slide end -->
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <div class="nav-slide-bg"
                            style="background-image:url({{ asset('/storage/media/' . 'projects/furniture/goashape-RvyJGaoaWrs-unsplash.jpg') }})">
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
                            1-5 Hotsports Drive, Off Etal Avenue,Kudirat Abiola Way, by NNPC Filling Station,
                            Ikeja, Lagos Nigeria
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
        <!-- home slider start -->
        <section id="up" class="pos-rel section-bg-dark-1 js-home-slider fullscreen-slider">

            <!-- swiper-wrapper start -->
            <div class="swiper-wrapper">
                <!-- swiper-slide start -->
                <div class="swiper-slide">
                    <!-- slide-bg -->
                    <div class="js-parallax-slide-bg bg-img-cover"
                        style="background-image:url({{ asset('/storage/media/' . 'Homepage/Sliders/1.png') }})"></div>
                    <!-- bg-overlay -->
                    <div class="bg-overlay-black"></div>
                    <!-- content start -->
                    <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
                        <div
                            class="container small text-center padding-bottom-120 padding-top-20 flex justify-center flex-col items-center px-4">
                            <img class="padding-bottom-80"
                                src="{{ asset('/storage/media/' . 'Homepage/Main Logos/HSM Logo.png') }}"
                                style="width: 25%;">
                            <h2 class="headline-s">
                                <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-01">We're suited to deliver world-class </span>
                                </span>
                                <span class="hidden-box d-block padding-bottom-60">
                                    <span class="anim-slide tr-delay-02"> results for your media needs.</span>
                                </span>
                            </h2>
                            <div class="margin-top-30 anim-fade tr-delay-08">
                                <a href="Our-Companies" class="ellipse-btn ellipse-btn_red js-pointer-large">
                                    <span class="#">Our Companies <i class="fa fa-chevron-right"
                                            aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- content end -->
                </div><!-- swiper-slide end -->

                <!-- swiper-slide start -->
                <div class="swiper-slide">
                    <!-- slide-bg -->
                    <div class="js-parallax-slide-bg bg-img-cover"
                        style="background-image:url({{ asset('/storage/media/' . 'Homepage/Sliders/2.png') }})"></div>
                    <!-- bg-overlay -->
                    <div class="bg-overlay-black"></div>

                    <!-- content start -->
                    <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
                        <div
                            class="container small text-center padding-top-bottom-120 flex justify-center flex-col items-center">
                            <img class="padding-bottom-40"
                                src="{{ asset('/storage/media/' . 'Homepage/Main Logos/HS Studios@2x.png') }}"
                                style="width: 25%;">
                            <h2 class="headline-s">
                                <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-02">State of the art studio complex</span>
                                </span>
                                <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-03">
                                        <span>For all kinds of media production</span>
                                    </span>
                                </span>
                            </h2>
                            <div class="margin-top-30 anim-fade tr-delay-08">
                                <a href="javascript:void(0);" id="mpopupLink"
                                    class="ellipse-btn ellipse-btn_red  js-pointer-large">
                                    <span class="">Get Price Estimate <i class="fa fa-chevron-right"
                                            aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- content end -->
                </div><!-- swiper-slide end -->


{{-- 
                <!-- swiper-slide start -->
                <div class="swiper-slide">
                    <!-- slide-bg -->
                    <div class="js-parallax-slide-bg bg-img-cover"
                        style="background-image:url({{ asset('/storage/media/' . 'Homepage/Sliders/3.png') }})"></div>
                    <!-- bg-overlay -->
                    <div class="bg-overlay-black"></div>

                    <!-- content start -->
                    <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
                        <div
                            class="container small text-center padding-top-bottom-120 flex justify-center flex-col items-center">
                            <img class="padding-bottom-80"
                                src="{{ asset('/storage/media/' . 'HotSports/Hotsports Logo.png') }}"
                                style="width: 60%;">
                            <h2 class="headline-s">
                                <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-02">Creative marketing company boasting
                                        over</span>
                                </span>
                                <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-03">20 years business experience in</span>
                                </span>
                                <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-04">SPORTS MARKETING and</span>
                                </span>
                                <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-04">MEDIA CONTENT DEVELOPMENT & PRODUCTION.</span>
                                </span>
                            </h2>
                            <div class="margin-top-30 anim-fade tr-delay-08">
                                <a href="javascript:void(0);" id="mpopupLink2"
                                    class="ellipse-btn ellipse-btn_red  js-pointer-large">
                                    <span class="">Get Price Estimate <i class="fa fa-chevron-right"
                                            aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- content end -->
                </div><!-- swiper-slide end -->


 --}}
                <!-- swiper-slide start -->
                <div class="swiper-slide">
                    <!-- slide-bg -->
                    <div class="js-parallax-slide-bg bg-img-cover"
                        style="background-image:url({{ asset('/storage/media/' . 'Homepage/Sliders/4@2x.png') }})">
                    </div>
                    <!-- bg-overlay -->
                    <div class="bg-overlay-black"></div>

                    <!-- content start -->
                    <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
                        <div
                            class="container small text-center padding-top-bottom-120 flex justify-center flex-col items-center">
                            <img class="padding-bottom-80"
                                src="{{ asset('/storage/media/' . 'Homepage/Main Logos/Primedia Logo.png') }}"
                                style="width: 50%;">
                            <h2 class="headline-s">
                                <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-02">Media brokerage and PR company</span>
                                </span>
                            </h2>
                            <div class="margin-top-30 anim-fade tr-delay-08">
                                <a href="javascript:void(0);" id="mpopupLink5"
                                    class="ellipse-btn_red js-pointer-large">
                                    <span>Get Price Estimate <i class="fa fa-chevron-right"
                                            aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- content end -->
                </div><!-- swiper-slide end -->
            </div><!-- swiper-wrapper end -->

            <!-- swiper-button-prev start -->
            <div class="swiper-button-prev-box fullscreen-slider-arrow after-preloader-anim">
                <div class="anim-fade">
                    <div class="swiper-button-prev"></div>
                </div>
            </div><!-- swiper-button-prev end -->
            <!-- swiper-button-next start -->
            <div class="swiper-button-next-box fullscreen-slider-arrow after-preloader-anim">
                <div class="anim-fade tr-delay-06">
                    <div class="swiper-button-next"></div>
                </div>
            </div><!-- swiper-button-next end -->

            <!-- swiper-pagination start -->
            <div class="pagination-box fullscreen-slider-pagination after-preloader-anim">
                <div class="anim-fade tr-delay-03">
                    <div class="swiper-pagination counter-pagination"></div>
                </div>
            </div><!-- swiper-pagination end -->
        </section><!-- home slider end -->

        <!-- About-Us start -->
        <section id="down" class="pos-rel section-bg-dark-2 ">
            <!-- pos-rel start -->
            <div class="pos-rel padding-top-bottom-120">
                <!-- flex-container start -->
                <div class="container flex-container padding-bottom-150 px-4" style="justify-content: space-evenly;">
                    <!-- column start -->
                    <div class="four-columns">
                        <!-- title start -->
                        <h2 class="column-l-r-margin-10  headline-m js-scrollanim">
                            <span class="hidden-box d-block">
                                <span class="anim-slide text-color-red">
                                    We Are Creative,Innovative and Reliable.<br>
                                </span>
                        </h2><!-- title end -->
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="six-columns hs-mobile">
                        <div class="">
                            <p class="body-text-xxl anim-text-reveal js-scrollanim margin-top-40">HS Media Group is the
                                holding
                                company for HotSports Nig. Ltd., HS Studios, and Primedia Intl.Each subsidiary company
                                is fully equipped with the needed tools to execute your creative imaginations at world
                                class standard.</p>
                        </div>
                    </div><!-- column end -->
                </div><!-- flex-container end -->

                <!-- js-infinite-slider start -->
                <div class="js-infinite-slider about-slider hidden-box">
                    <!-- swiper-wrapper start -->
                    <div class="swiper-wrapper ">
                        <!-- swiper-slide start -->
                        <div class="swiper-slide">
                            <img src="{{ asset('/storage/media/' . 'Homepage/Infinite scroll images/harry-cunningham-UWblg2i6Blw-unsplash@2x.png') }}"
                                alt="About-Us">
                        </div><!-- swiper-slide end -->

                        <!-- swiper-slide start -->
                        <div class="swiper-slide">
                            <img src="{{ asset('/storage/media/' . 'Homepage/Infinite scroll images/john-benitez-2zFaN2YsGN8-unsplash@2x.png') }}"
                                alt="About-Us">
                            <img class="padding-top-20"
                                src="{{ asset('/storage/media/' . 'Homepage/Infinite scroll images/joshua-hanson-73ctnpVWJio-unsplash@2x.png') }}"
                                alt="About-Us">
                        </div><!-- swiper-slide end -->

                        <!-- swiper-slide start -->
                        <div class="swiper-slide">
                            <img src="{{ asset('/storage/media/' . 'Homepage/Infinite scroll images/kal-visuals-xYkVtNlkWOE-unsplash@2x.png') }}"
                                alt="About-Us">
                        </div><!-- swiper-slide end -->

                        <!-- swiper-slide start -->
                        <div class="swiper-slide">
                            <img src="{{ asset('/storage/media/' . 'Homepage/Infinite scroll images/kate-oseen-XqLQxSUuEXQ-unsplash@2x.png') }}"
                                alt="About-Us">
                        </div><!-- swiper-slide end -->

                        <!-- swiper-slide start -->
                        <div class="swiper-slide">
                            <img src="{{ asset('/storage/media/' . 'Homepage/Infinite scroll images/randy-fath-6IqCA9-Q-QQ-unsplash@2x.png') }}"
                                alt="About-Us">
                            <img class="padding-top-20"
                                src="{{ asset('/storage/media/' . 'Homepage/Infinite scroll images/tymur-kuchumov-i-1@2x.png') }}"
                                alt="About-Us">
                        </div><!-- swiper-slide end -->

                        <!-- swiper-slide start -->
                        <div class="swiper-slide">
                            <img src="{{ asset('/storage/media/' . 'Homepage/Infinite scroll images/alex-mccarthy-U9uiPBfKY9I-unsplash@2x.png') }}"
                                alt="About-Us">
                        </div><!-- swiper-slide end -->

                        <!-- swiper-slide start -->
                        <div class="swiper-slide">
                            <img src="{{ asset('/storage/media/' . 'Homepage/Infinite scroll images/aziz-acharki-Zf14BckA1JA-unsplash@2x.png') }}"
                                alt="About-Us">
                        </div><!-- swiper-slide end -->
                    </div><!-- swiper-wrapper end -->
                </div>
                <!-- js-infinite-slider end -->
            </div><!-- pos-rel end -->
        </section><!-- About-Us end -->

        <section class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            <div class="pos-rel flex-min-height-100vh">
                <!-- container start -->
                <div class="container margin-bottom-30">
                    <!-- title start -->
                    <h2 class="headline-l text-center hidden-box padding-bottom-20 text-color-red">
                        <span class="anim-slide js-scrollanim">
                            Our-Companies
                        </span>
                    </h2><!-- title end -->

                    <!-- flex-container start -->
                    <div class="flex-container margin-top-bottom-30">
                        <!-- blog-entry start -->
                        <article class="six-columns column-100-100  js-scrollanim">
                            <div class="column-l-r-margin-10-999 hover-box pos-rel">
                                <a href="Hsmedia" class="d-block hidden-box js-pointer-large js-animsition-link">
                                    <img class="img-hover-scale img-hover-opacity"
                                        src="{{ asset('/storage/media/' . 'Homepage/HS Studios@2x.png') }}"
                                        alt="About Image">
                                    <!-- bg-overlay -->
                                    <div class="bg-overlay-blackish"></div>
                                    <h3 class="headline-sm pos-abs pos-left-bottom list list_margin-1px hover-move-up">
                                        <span class="list__item">
                                            <span class="hidden-box d-inline-block">
                                                <span class="anim-reveal">HS Studios</span>
                                            </span>
                                        </span>
                                    </h3>
                                </a>
                                <ul class="pos-abs pos-left-bottom">
                                    <li class="list__item">
                                        <a href="#" class="subhead-mm hover-text-fill js-pointer-small"
                                            data-text="Purpose built world class">Purpose built world class</a>
                                    </li>
                                    <li class="list__item">
                                        <a href="#"
                                            class="subhead-mm hover-text-fill tr-delay-01 js-pointer-small"
                                            data-text="Studio Complex">Studio Complex.</a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- blog-entry end -->

{{-- 
                        <!-- blog-entry start -->
                        <article class="four-columns column-100-100  js-scrollanim">
                            <div class="column-l-r-margin-10-999 hover-box pos-rel">
                                <a href="hotsports" class="d-block hidden-box js-pointer-large js-animsition-link">
                                    <img class="img-hover-scale img-hover-opacity"
                                        src="{{ asset('/storage/media/' . 'Homepage/HotSports@2x.png') }}"
                                        alt="About Image">
                                    <!-- bg-overlay -->
                                    <div class="bg-overlay-blackish"></div>
                                    <h3
                                        class="headline-sm pos-abs pos-left-bottom list list_margin-1px hover-move-up1">
                                        <span class="list__item">
                                            <span class="hidden-box d-inline-block">
                                                <span class="anim-reveal">Hotsports</span>
                                            </span>
                                        </span>
                                    </h3>
                                </a>
                                <ul class="pos-abs pos-left-bottom ">
                                    <li class="list__item">
                                        <a href="#" class="subhead-mm hover-text-fill js-pointer-small"
                                            data-text="Creative marketing company with 20+ years of experience with key competences in sports marketing,media content development & production ">Creative
                                            marketing company with </a>
                                    </li>
                                    <li class="list__item">
                                        <a href="#"
                                            class="subhead-mm hover-text-fill tr-delay-01 js-pointer-small"
                                            data-text="20+ years of experience with key">20+ years of experience with
                                            key</a>
                                    </li>
                                    <li class="list__item">
                                        <a href="#"
                                            class="subhead-mm hover-text-fill tr-delay-01 js-pointer-small"
                                            data-text="competences in sports marketing,media">competences in
                                            sports marketing,media </a>
                                    </li>
                                    <li class="list__item">
                                        <a href="#"
                                            class="subhead-mm hover-text-fill tr-delay-01 js-pointer-small"
                                            data-text="content development & production ">content development &
                                            production</a>
                                    </li>
                                </ul>
                            </div>
                        </article><!-- blog-entry end -->

 --}}

                        <!-- blog-entry start -->
                        <article class="six-columns column-100-100  js-scrollanim">
                            <div class="column-l-r-margin-10-999 hover-box pos-rel">
                                <a href="Primedia" class="d-block hidden-box js-pointer-large js-animsition-link">
                                    <img class="img-hover-scale img-hover-opacity"
                                        src="{{ asset('/storage/media/' . 'Homepage/Primedia.png') }}"
                                        alt="About Image">
                                    <!-- bg-overlay -->
                                    <div class="bg-overlay-blackish"></div>
                                    <h3
                                        class="headline-sm pos-abs pos-left-bottom list list_margin-1px hover-move-up2">
                                        <span class="list__item">
                                            <span class="hidden-box d-inline-block">
                                                <span class="anim-reveal">Primedia</span>
                                            </span>
                                        </span>
                                    </h3>
                                </a>
                                <ul class="pos-abs pos-left-bottom">
                                    <li class="list__item">
                                        <a href="#"
                                            class="subhead-mm hover-text-fill js-pointer-small margin-top-10"
                                            data-text="Media brokerage and PR company.">Media brokerage and PR
                                            company.</a>
                                    </li>
                                </ul>
                            </div>
                        </article><!-- blog-entry end -->
                    </div><!-- flex-container end -->
                </div><!-- container end -->
            </div><!-- pos-rel end -->
        </section>
        <!-- latest news end -->


        <section class="pos-rel section-bg-dark-2 section pt-20">
            <!-- pos-rel start -->
            <div class="pos-rel flex-min-height-100vh">
                <!-- container start -->
                <div class="container margin-bottom-30 px-4">
                    <!-- title start -->
                    <h2 class="headline-l text-center text-color-red hidden-box padding-bottom-20">
                        <span class="anim-slide js-scrollanim">
                            Our Blog
                        </span>
                    </h2><!-- title end -->

                    <!-- flex-container start -->
                    <div class="flex-container margin-top-bottom-30">




                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            @foreach ($posts as $post)
                                <a href="{{ route('blog-info.show', $post) }}"
                                    class="bg-[#3a3a3a] rounded-md xl:margin-left-50 anim-fade js-scrollanim">
                                    <img src="{{ asset('storage/' . $post->image) }}"
                                        alt="Featured {{ $post->title }}"
                                        class="w-full h-80 object-cover rounded-md mb-4">
                                    <div class="p-4">
                                        <div class="min-h-[70px]">
                                            <h3 class="text-xl font-semibold mb-4">{{ $post->title }}</h3>
                                        </div>
                                        <p>
                                            @php
                                                $content = strip_tags($post->content);
                                                $words = explode(' ', $content);
                                                $word_limit = 50;

                                                if (count($words) > $word_limit) {
                                                    $truncated = array_slice($words, 0, $word_limit);
                                                    echo implode(' ', $truncated) . '...';
                                                } else {
                                                    echo $content;
                                                }
                                            @endphp
                                        </p>
                                        <div class="mt-4">
                                            <span class="text-gray-400">By</span>
                                            <span>{{ $post->author }}</span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        <div class="mt-8 flex justify-center space-x-2">

                            {{ $posts->links() }}
                        </div>


                        <script src="https://medium-widget.pixelpoint.io/widget.js') }}"></script>
                        <script>
                            MediumWidget.Init({
                                renderTo: '#medium-widget',
                                params: {
                                    "resource": "https://medium.com/@petalpurpose",
                                    "postsPerLine": 3,
                                    "limit": 10,
                                    "picture": "big",
                                    "fields": ["description", "author", "publishAt"],
                                    "ratio": "square"
                                }
                            })
                        </script>

                    </div><!-- flex-container end -->
                </div><!-- container end -->
            </div><!-- pos-rel end -->
        </section>



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
        style="background-image:url({{ asset('/storage/media/' . 'Homepage/Sliders/1@2x.png') }})">
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
                        <h4 class="column-l-r-margin-10 headline-xxl footer-title">
                            The Best Creative<br>Team for Your<br> Business
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
                                <a href="/blog"
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
                                    class="subhead-m text-color-white text-hover-to-white js-pointer-small">info@HSmediagroup.tv</a>
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
                        &copy; Copyright 2021 HS MEDIA GROUP.<a href="#"
                            class="text-weight-700 js-pointer-small"></a>
                    </p>
                    <p class="copyright-style">
                        <a href="/login" class="text-weight-700 js-pointer-small">Admin Login</a>
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
</body>

</html>
