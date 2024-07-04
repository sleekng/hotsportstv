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

    <title>Hotsports</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,600;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> --}}
    <link href="{{ asset('assets/fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fontawesome/css/sharp-light.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fontawesome/css/sharp-regular.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fontawesome/css/sharp-solid.css') }}" rel="stylesheet" type="text/css">

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
                        <a href="https://www.facebook.com/HotSportsng" class="anim-slide js-pointer-small">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="https://www.instagram.com/hotsportsng/" class="anim-slide tr-delay-04 js-pointer-small">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="https://www.youtube.com/@HotSportsNetwork" class="anim-slide tr-delay-02 js-pointer-small">
                            <i class="fab fa-youtube fa-lg"></i>
                        </a>
                    </div>
                </li>
              
                <li class="list__item">
                    <div class="hidden-box d-inline-block">
                        <a href="https://chat.whatsapp.com/I8gPv0UXrdy2e1KDwbpHA5" class="anim-slide tr-delay-06 js-pointer-small">
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
            style="background-image:url({{ asset('/storage/media/'.'HotSports/Hero\ Image@2x.png') }})">
            <!-- bg-overlay -->
            <div class="bg-overlay-black"></div>
            <!-- lines-container start -->
            <div class="lines-container pos-rel anim-lines flex-min-height-100vh">
                <div class="padding-top-bottom-120 width-100perc">
                    <div class="margin-top-30 text-center tr-delay-08">
                        <img class="padding-bottom-80"
                            src="{{ asset('/storage/media/'.'HotSports/Hotsports Logo.png') }}" style="width: 50%;"> <br>
                    </div>
                </div>
            </div><!-- lines-container end -->
        </section><!-- pos-rel end -->


        <!-- About-Us start -->
        <section id="down" class="pos-rel section-bg-dark-2">
            <!-- pos-rel start -->
            <div class="pos-rel  padding-top-100">
                <!-- flex-container start -->
                <div class="container.full flex-container" style="justify-content: space-between;">
                    <!-- column start -->
                    <div class="three-columns">
                        <!-- title start -->
                        <h2 class="column-l-margin-100 headline-m js-scrollanim">
                            <span class="hidden-box d-block" style="text-align: left;">
                                <span class="anim-slide tr-delay-01 text-color-red">We're built</span><br>
                                <span class="anim-slide tr-delay-01 text-color-red">with you</span><br>
                                <span class="anim-slide tr-delay-01 text-color-red">in mind</span>
                            </span>
                        </h2><!-- title end -->
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="four-columns">
                        <div class="body-text-mobile">
                            <p class="body-text-xl  js-scrollanim">HotSports Nigeria Limited is a
                                creative marketing company boasting over 20 years business
                                experience with its key
                                competencies being SPORTS MARKETING and MEDIA CONTENT DEVELOPMENT
                                & PRODUCTION. </p><br>
                            <p class="body-text-xl  js-scrollanim ">Our flagship
                                programme, HotSports Network is the longest running independent
                                sports programme on
                                Nigerian television.</p>
                        </div>
                    </div><!-- column end -->
                    <div class="three-columns">
                        <div class="column-l-r-margin-5 ">
                            <img class="img-hover-scale"
                                src="{{ asset('/storage/media/'.'HotSports/HIi12zs8Td@2x.png') }}" alt="About-Us">
                        </div>
                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- pos-rel end -->
        </section>
        <!-- About-Us end -->



        <section id="down" class="pos-rel section-bg-dark-2">
            <!-- pos-rel start -->
            <div class="pos-rel  padding-top-bottom-50">
                <!-- flex-container start -->
                <div class="container.full flex-container" style="justify-content: space-evenly;">
                    <div class="six-columns padding-bottom-50">
                        <div class="column-l-r-margin-5 ">
                            <img class="img-hover-scale"
                                src="{{ asset('/storage/media/'.'HotSports/ssurKcsq3g@2x.png') }}" alt="About-Us">
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="five-columns">
                        <div class="margin-left-100 body-text-mobile">
                            <p class="body-text-xl  js-scrollanim">We’ve had exclusive rights to live
                                broadcast and transmit the German Bundesliga, the Italian Serie A,
                                European FIFA World
                                Cup qualifiers, FIFA U-17 World Cup, FIFA U-20 World Cup, AFCON
                                2019, and the ICC Summer
                                tournament. </p>
                            <p class="body-text-xl  js-scrollanim margin-top-10">We have since
                                inception, become renowned as an organisation fuelled by passion
                                for ideas generation
                                and value-adding relationships with our clients.</p>
                            <p class="body-text-xl  js-scrollanim margin-top-10"> HotSports Nigeria
                                Limited has provided activations for leading brands around major
                                continental and global
                                sports events.</p>
                        </div>
                    </div><!-- column end -->

                </div>
            </div>
        </section>

        <section class="pos-rel bg-img-cover"
            style="background-image:url({{ asset('/storage/media/'.'HotSports/NFA\ Background@2x.png') }})">
            <!-- bg-overlay -->
            <div class="bg-overlay-black"></div>
            <!-- pos-rel start -->
            <div class="pos-rel flex-min-height-100vh">
                <div class="padding-top-bottom-120 container text-center">
                    <div class="js-scrollanim">
                        <!-- title start -->
                        <div class="">
                            <img class="padding-bottom-80"
                                src="{{ asset('/storage/media/'.'HotSports/Nigerian Football Federation@2x.png') }}"
                                style="width: 25%;">
                        </div>
                        <!-- title end -->

                        <!-- button start -->
                        <a href="#" class="skew-btn js-pointer-large js-animsition-link anim-fade tr-delay-04">
                            <span class="">
                                <span class=" headline-xs">We are the Official Media Partners of the<br> Nigeria
                                    Football Federation (NFF), owning<br> the Exclusive Rights to cover <br>non-match
                                    activities
                                    of all Nigeria’s National<br> football teams.</span>
                                <!-- <span class="skew-btn__arrow"></span> -->
                            </span>
                        </a><!-- button end -->
                    </div>
                </div>
            </div><!-- pos-rel end -->
        </section>

        <section class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            <div class="pos-rel flex-min-height-100vh">
                <!-- container start -->
                <div class="container-full padding-left-right-70 padding-top-bottom-50">


                    <!-- title start -->
                    <h2 class="headline-xxl text-center hidden-box">
                        <span class="anim-slide js-scrollanim text-color-red">Our History</span>
                    </h2><!-- title end -->

                    <!-- flex-container start -->
                    <div class="flex-container padding-top-30">

                        <!-- column start -->
                        <div class="four-columns column-100-100">
                            <div class="column-r-margin-20 pos-rel">
                                <span class="vertical-text pos-abs pos-left-top-0px">
                                    <span
                                        class="vertical-text__inner subhead-xs text-bg-red padding-top-bottom-5 padding-left-right-40 text-center">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1998
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </span>
                                <div class="margin-left-50 anim-fade js-scrollanim">
                                    <p class="body-text-xl">We have since 1998 structured Official
                                        Partnership deals with consumer goods and Telcos with the Nigeria Football
                                        Federation.</p>
                                </div>
                            </div>
                        </div><!-- column end -->

                        <!-- column start -->
                        <div class="four-columns column-100-100 ">
                            <div class="column-r-margin-20 pos-rel">
                                <span class="vertical-text pos-abs pos-left-top-0px">
                                    <span
                                        class="vertical-text__inner subhead-xs text-bg-red padding-top-bottom-5 padding-left-right-40 text-center">
                                        1998 - 1999 </span>
                                </span>
                                <div class="margin-left-50 anim-fade js-scrollanim padding-bottom-60">
                                    <p class="body-text-xl">Between 1998 and 1999 HotSports solely
                                        organized and provided media consultancy and television coverage for the Hockey
                                        Federation of Nigeria’s fund raising in honour of their patron, Gen JT Oseni and
                                        realized sums in excess of N8million.</p>
                                </div>
                            </div>
                        </div><!-- column end -->

                        <!-- column start -->
                        <div class="four-columns column-100-100">
                            <div class="column-r-margin-20 pos-rel">
                                <span class="vertical-text pos-abs pos-left-top-0px">
                                    <span
                                        class="vertical-text__inner subhead-xs text-bg-red padding-top-bottom-5 padding-left-right-40">
                                        2000 - 2007 </span>
                                </span>
                                <div class="margin-left-50 anim-fade js-scrollanim padding-bottom-60">
                                    <p class="body-text-xl">Since the commencement of the relationship between the
                                        Nigeria Football Federation (NFF) and TomTom, Peak and Samsung as official
                                        sponsors of the national football teams, HotSports has continued to provide
                                        consultancy services to all the brands in the exploitation of their properties.
                                    </p>
                                </div>
                            </div>
                        </div><!-- column end -->

                        <!-- column start -->
                        <div class="four-columns column-100-100  ">
                            <div class="column-r-margin-20 pos-rel">
                                <span class="vertical-text pos-abs pos-left-top-0px">
                                    <span
                                        class="vertical-text__inner subhead-xs text-bg-red padding-top-bottom-5 padding-left-right-40">
                                        2007 - 2009 </span>
                                </span>
                                <div class="margin-left-50 anim-fade js-scrollanim padding-bottom-60">
                                    <p class="body-text-xl">For a period of two years, 2007 – 2009, the
                                        company provided television coverage for the popular Glo Premiership League.
                                        Towards the end of 2010, HotSports put together the Nigeria’s 50 Glorious
                                        Football Moments for Guinness Nigeria Plc’s in-bar promotion.</p>
                                </div>
                            </div>
                        </div><!-- column end -->

                        <!-- column start -->
                        <div class="four-columns column-100-100  ">
                            <div class="column-r-margin-20 pos-rel">
                                <span class="vertical-text pos-abs pos-left-top-0px">
                                    <span
                                        class="vertical-text__inner subhead-xs text-bg-red padding-top-bottom-5 padding-left-right-40">
                                        2009
                                        - 2010 </span>
                                </span>
                                <div class="margin-left-50 anim-fade js-scrollanim padding-bottom-60">
                                    <p class="body-text-xl">Between November 2009 and May 2010, Peak
                                        Soccer Moments, a 30-minute weekly world class soccer show was produced for Peak
                                        Milk.</p>
                                </div>
                            </div>
                        </div><!-- column end -->

                        <!-- column start -->
                        <div class="four-columns column-100-100   ">
                            <div class="column-r-margin-20 pos-rel">
                                <span class="vertical-text pos-abs pos-left-top-0px">
                                    <span
                                        class="vertical-text__inner subhead-xs text-bg-red padding-top-bottom-5 padding-left-right-40">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2010 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span>
                                </span>
                                <div class="margin-left-50 anim-fade js-scrollanim padding-bottom-60">
                                    <p class="body-text-xl">In May 2010, HotSports successfully carried out an
                                        activation for Cadbury Nigeria Plc tagged Believe in the Super Eagles and aimed
                                        at garnering support for the senior national team during their World Cup
                                        campaign in South Africa. The activation recorded unprecedented acceptance among
                                        soccer fans who trooped out in large numbers to be part of the campaign.</p>
                                </div>
                            </div>
                        </div><!-- column end -->

                        <!-- column start -->
                        <div class="four-columns column-100-100  ">
                            <div class="column-r-margin-20 pos-rel">
                                <span class="vertical-text pos-abs pos-left-top-0px">
                                    <span
                                        class="vertical-text__inner subhead-xs text-bg-red padding-top-bottom-5 padding-left-right-40">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2011
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </span>
                                <div class="margin-left-50 anim-fade js-scrollanim padding-bottom-60">
                                    <p class="body-text-xl">In 2011, HotSports was signed on as marketing consultant
                                        for
                                        the 21st Quadrangular Games involving 4 foremost family clubs in Lagos. The
                                        company brought on UAC of Nigeria Plc and other corporate organizations as
                                        sponsors.</p>
                                </div>
                            </div>
                        </div><!-- column end -->
                        <!-- column start -->
                        <div class="four-columns column-100-100  ">
                            <div class="column-r-margin-20 pos-rel">
                                <span class="vertical-text pos-abs pos-left-top-0px">
                                    <span
                                        class="vertical-text__inner subhead-xs text-bg-red padding-top-bottom-5 padding-left-right-40">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2012
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </span>
                                <div class="margin-left-50 anim-fade js-scrollanim">
                                    <p class="body-text-xl">HotSports was commissioned in 2012 by the Local Organizing
                                        Committee of the 2012 National Sports Festival, Eko 2012, as marketing
                                        consultants.</p>
                                </div>
                            </div>
                        </div><!-- column end -->
                        <!-- column start -->
                        <div class="four-columns column-100-100">
                            <div class="column-r-margin-20 pos-rel">
                                <span class="vertical-text pos-abs pos-left-top-0px">
                                    <span
                                        class="vertical-text__inner subhead-xs text-bg-red padding-top-bottom-5 padding-left-right-40">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2012
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </span>
                                <div class="margin-left-50 anim-fade js-scrollanim">
                                    <p class="body-text-xl">HotSports’ efforts and clout in the industry brought
                                        multinationals such as Nigerian Bottling Company (NBC) and UAC of Nigeria Plc on
                                        board as official partners of Eko 2012, with each supporting the festival with
                                        N10million inclusive of company products.</p>
                                </div>
                            </div>
                        </div><!-- column end -->





                    </div><!-- flex-container end -->
                </div><!-- container end -->
            </div><!-- pos-rel end -->
        </section>

        <section id="down" class="pos-rel section-bg-dark-2">
            <!-- pos-rel start -->
            <div class="pos-rel  padding-top-50">
                <!-- title start -->
                <h2 class="headline-xxl text-center js-scrollanim margin-bottom-60">
                    <span class="anim-text-double-fill tr-delay-02" data-text=" Our Specialty"> Our Specialty</span>
                </h2><!-- title end -->
                <!-- flex-container start -->
                <div class="container.full flex-container">
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="column-l-r-margin-5 ">
                            <img class="img-hover-scale" src="{{ asset('/storage/media/'.'HotSports/Sporty@2x.png') }}"
                                alt="About-Us">
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="six-columns column-100-100 padding-top-20 margin-left-100">
                        <!-- list start -->
                        <ul class="list js-scrollanim list-mobile">
                            <li class="list__item white dot hidden-box">
                                <div class="body-text-xl anim-slide margin-left-60">Brand marketing through the use of
                                    <Br> sports and sporting platforms
                                </div>
                            </li>
                            <li class="list__item white dot hidden-box">
                                <div class="body-text-xl anim-slide tr-delay-01 margin-left-60">Creative ideation and
                                    development of <Br> audio-visual and media content for brands and businesses</div>
                            </li>
                            <li class="list__item white dot hidden-box">
                                <div class="body-text-xl anim-slide tr-delay-02 margin-left-60">Sports sponsorships and
                                    sponsorship <Br>brokerage</div>
                            </li>
                            <li class="list__item white dot hidden-box">
                                <div class="body-text-xl anim-slide tr-delay-03 margin-left-60">Brand/ promotional/
                                    sponsorship <Br>activations</div>
                            </li>
                            <li class="list__item white dot hidden-box">
                                <div class="body-text-xl anim-slide tr-delay-04 margin-left-60">Relationship management
                                    for brands<Br> interested in sport affiliations and<Br> professional bodies</div>
                            </li>
                        </ul><!-- list end -->
                    </div>
                </div><!-- column end -->
            </div><!-- flex-container end -->
            </div><!-- pos-rel end -->
        </section>

        <section id="down" class="pos-rel section-bg-dark-2">
            <!-- pos-rel start -->
            <div class="pos-rel  padding-top-bottom-150">
                <!-- title start -->
                <h2 class="headline-xxl text-center js-scrollanim margin-bottom-60">
                    <span class="anim-text-double-fill tr-delay-02" data-text=" Our Offerings">Our Offerings</span>
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
                                            <span class="hidden-box d-inline-block">
                                                <span class="anim-reveal">Sports Marketing & Management</span>
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
                                            <span class="hidden-box d-inline-block">
                                                <span class="anim-reveal">Media Content Development</span>
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
                                            <span class="hidden-box d-inline-block">
                                                <span>Sports Partnerships/ Consulting</span>
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
                                            <span class="hidden-box d-inline-block">
                                                <span class="anim-reveal">Relationship Management/ Liaison</span>
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


              <!-- Projects start -->
              <section id="models" class="pos-rel section-bg-dark-2">
                <!-- pos-rel start -->
                <div class="pos-rel flex-min-height-80vh">
                    <!-- width-100perc start -->
                    <div class="width-100perc padding-top-bottom-120">
                        <!-- title start -->
                        <h3 class="text-center js-scrollanim">
                            <span class="headline-xl text-color-red d-block hidden-box">
                                <span class="anim-slide">Projects We've Worked On </span>
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



        <!-- Testimonials start -->
        <section id="models" class="pos-rel section-bg-dark-2">
            <!-- pos-rel start -->
            <div class="pos-rel " style="background: #1e1e1e;">
                <!-- width-100perc start -->
                <div class="width-100perc padding-top-bottom-120">
                    <!-- title start -->
                    <h3 class="text-center js-scrollanim">
                        <span class="headline-xl text-color-red d-block hidden-box">
                            <span class="anim-slide">Testimonials</span>
                        </span>
                    </h3><!-- title end -->

                    <!-- js-2-view-slider start -->
                    <div class="js-2-view-slider padding-top-bottom-90 hidden-box pos-rel">
                        <!-- swiper-wrapper start -->
                        <div class="swiper-wrapper">


                           
                            @foreach ($testimonials as $testimonial )
                                
                            <div class="swiper-slide slide-scale-anim content-bg-dark-1 grow" style="max-width: 32rem; min-height: 100px; background-color: white; color: black; border-radius: 0.5rem; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.06); padding: 1.5rem; margin: 1rem; position: relative; overflow: hidden;">
                                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                    <img src="{{ asset('storage/'.$testimonial->image) }}" alt="{{ $testimonial->author }}" style="width: 150px; height: 150px; border-radius: 50%; margin-right: 1rem; object-fit: cover;">
                                    <div>
                                        <h3 style="font-size: 1.25rem; font-weight: 600;  ">{{ $testimonial->author }}</h3>
                                        <p style="color: #4A5568; font-size: 16px !important; line-height: 1.5rem !important; padding-top: 10px;">{!! $testimonial->content !!}</p>
                                        <p style="font-size: 0.875rem; color: #718096; padding-top: 10px;">{{ $testimonial->created_at->format('jS M, Y') }}</p>
                                    </div>
                                </div>
                            </div>
                            
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
        </section><!-- Testimonials end -->



        <!-- clients start -->
        <section class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            <div class="pos-rel flex-min-height-100vh">
                <!-- container start -->
                <div class="padding-top-bottom-120 container">
                    <!-- text-center start -->
                    <h2 class="text-center js-scrollanim">
                        <span class="subhead-s text-color-red d-block hidden-box">
                            <span class="anim-slide">Fine Folks</span>
                        </span>
                        <span class="headline-xxs d-block hidden-box">
                            <span class="anim-slide tr-delay-02">We’ve Worked With</span>
                        </span>
                    </h2><!-- text-center end -->

                    <!-- flex-container start -->
                    <div class="flex-container flex-justify-center padding-top-30">
                        <!-- column start -->

                        @foreach ($companies as $company )
                            
                        <div class="two-columns padding-top-60 client-img">
                            <div class="text-center hover-box pos-rel">
                                <img class="client-logo grow-client"
                                    src="{{ asset('storage/'.$company->image) }}"
                                    alt="clients logo">

                            </div>
                        </div><!-- column end -->
                        @endforeach


                    </div><!-- flex-container end -->
                    <h2 class="headline-xxs text-color-red text-center hidden-box margin-top-40">
                        <span class="js-scrollanim">We have a spot reserved for you!</span><br>
                        <a href="javascript:void(0);" id="mpopupLink"
                            class="ellipse-btn_red js-pointer-large margin-top-40">
                            <span class="">Contact-Us <i class="fa fa-chevron-right"
                                    aria-hidden="true"></i></span>
                        </a>
                    </h2>

                </div><!-- container end -->
            </div><!-- pos-rel end -->
        </section><!-- clients end -->

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
        style="background-image:url({{ asset('/storage/media/'.'Homepage/Sliders/1@2x.png') }})">
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
                            We wil be thrilled <br> to work with you
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
                                    class="footer-nav__btn js-pointer-small js-footer-hover-link subhead-l">Contact
                                    Us</a>
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
                                    Station,<br> Lagos, Ikeja,Nigeria
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
                        <a href="https://www.facebook.com/HotSportsng" class="flip-btn js-pointer-small" data-text="Facebook">Facebook</a>
                    </li>

                    <li class="list__item">
                        <a href="https://www.instagram.com/hotsportsng/" class="flip-btn js-pointer-small" data-text="Instagram">Instagram</a>
                    </li>
                    <li class="list__item">
                        <a href="https://www.youtube.com/@HotSportsNetwork" class="flip-btn js-pointer-small" data-text="Youtube">Youtube</a>
                    </li>
                    <li class="list__item">
                        <a href="https://chat.whatsapp.com/I8gPv0UXrdy2e1KDwbpHA5" class="flip-btn js-pointer-small" data-text="Whatsapp">Whatsapp</a>
                    </li>
                </ul><!-- footer-social end -->

                <!-- footer-copyright start -->
                <div class="footer-copyright text-center pos-abs pos-bottom-center">
                    <p class="copyright-style">
                        &copy; Copyright 2021 HS GROUP.<a href="#" class="text-weight-700 js-pointer-small"></a>
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
