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
    <link rel="shortcut icon" href="{{ asset('/storage/media/' . 'favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/storage/media/' . 'apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/storage/media/' . 'apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/storage/media/' . 'apple-touch-icon-114x114.png') }}">

    <title>Primedia International</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,600;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- styles -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="preloader cursor-anim-enable dark-nav">
    <!-- preloader-loading start -->
    <div class="preloader__logoload-box">
        <img class="preloader__logo vertical"
            src="{{ asset('/storage/media/' . 'Homepage/Main Logos/HS Media Group@2x.png') }}" alt="logo">
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
            style="background-image:url({{ asset('/storage/media/' . 'Homepage/Sliders/4@2x.png') }})">
            <!-- bg-overlay -->
            <div class="bg-overlay-black"></div>
            <!-- lines-container start -->
            <div class="container pos-rel anim-lines flex-min-height-100vh">
                <div class="padding-top-bottom-120 width-100perc">
                    <div class="margin-top-30 text-center tr-delay-08">
                        <img class="padding-bottom-80"
                            src="{{ asset('/storage/media/' . 'Homepage/Main Logos/Primedia Logo.png') }}"
                            style="width: 50%;"> <br>
                    </div>
                </div>
            </div><!-- lines-container end -->
        </section><!-- pos-rel end -->


        <!-- About-Us start -->
        <section id="down" class="lines-section pos-rel section-bg-dark-2">
            <!-- pos-rel start -->
            <div class="pos-rel  padding-top-bottom-120">
                <!-- flex-container start -->
                <div class="container.full lines-container anim-lines flex-container">
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="margin-left-40">
                            <!-- title start -->
                            <h2 class="text-color-red headline-m">Our Manifesto</h2>
                            <p class="body-text-xx-l  js-scrollanim margin-top-30">The media industry today, is
                                also<br>
                                experiencing many rapid changes in the<br> technology used in delivering commercial<br>
                                messages. It is a fast paced and exciting<br> place to be. </p>
                            <p class="body-text-xx-l  js-scrollanim margin-top-30"> At Primedia International Limited,
                                established<br> in 2002, we are always ahead of the game,<br> quickly adapting to and
                                making the
                                most<br> effective use of the latest technologies to<br> deliver the maximum impact for
                                our
                                clients.<br> We embrace change.</p>
                            <p class="body-text-xx-l  js-scrollanim margin-top-30">Our longstanding networks with the
                                various<br> media houses, from the oldest to the newest,<br> be they television, radio,
                                print,
                                or otherwise,<br> give us a critical edge when negotiating for<br> the best airtime and
                                rates
                                for our clients.</p>
                            <p class="body-text-xx-l  js-scrollanim margin-top-30">To all of us at Primedia
                                International
                                Limited,<br> media brokerage services is the act of<br> delivering the optimal mix of
                                client/product<br> exposure while maintaining outstanding value<br> from our client’s
                                hard won
                                budget.</p>
                            <!-- title end -->
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="four-columns">
                        <div class="margin-left-40">
                            <h2 class="text-color-red headline-m">Our Strengths</h2>
                            <ul class="list">
                                <li class="list__item   margin-top-30 white dot hidden-box">
                                    <p class="body-text-xx-l  js-scrollanim margin-left-20">Franchise Owner/ Media
                                        Agent of the NTA.</p>
                                </li>

                                <li class="list__item    js-scrollanim margin-top-30 white dot hidden-box">
                                    <p class="body-text-xx-l  js-scrollanim margin-left-20">Competitive Discounts: We
                                        are offering<br> the best value for your money in all our<br> activities and our
                                        media
                                        rates are<br> unbeatable on the conventional and the<br> digital platforms.</p>
                                </li>

                                <li class="list__item   js-scrollanim margin-top-30 white dot hidden-box">
                                    <p class="body-text-xx-l  js-scrollanim margin-left-20">We apply our critical
                                        thinking to<br> understand its value and then pass on that<br> value to our
                                        clients through our<br> professional media implementation,<br> monitoring and
                                        evaluation
                                        skills.</p>
                                </li>
                            </ul>

                        </div>
                    </div><!-- column end -->
                    <div class="four-columns padding-bottom-150">
                        <div class="margin-left-40">
                            <h2 class="text-color-red headline-m">Our Vision</h2>
                            <p
                                class="body-text-xx-l  js-scrollanim margin-top-30 margin-bottom-60 content-bg-red padding-20">
                                To become the preferred indigenous media <br> agency in Africa</p>

                            <h2 class="text-color-red headline-m">Our Mission</h2>
                            <p class="body-text-xx-l  js-scrollanim margin-top-30 content-bg-red  padding-20">To
                                cultivate a productive relationship with <br> our agencies by fulfilling our obligation
                                to<br> provide solutions that build brand equity &<br> leadership.<br> Desire for
                                excellence service.<br> Ensure quality in providing service. Build trust and confidence.
                            </p>
                        </div>
                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- pos-rel end -->
        </section><!-- About-Us end -->








        <!-- pricing start -->
        <section class="lines-section pos-rel White-lines section-bg-dark-2 padding-bottom-120">
            <!-- lines-container start -->
            <div class="container pos-rel padding-top-60 ">
                <!-- title start -->
                <h2 class="headline-l text-center js-scrollanim text-color-red">
                    <span class="anim-text-double-fill tr-delay-02" data-text="Our Offering">Our Offering</span>
                </h2><!-- title end -->

                <!-- flex-container start -->
                <div class="container  flex-container padding-top-30">
                    <!-- column start -->
                    <div class="four-columns padding-top-60 offering-mobile">
                        <div class="column-l-r-margin-10 border-box border-radius-10px hidden-box">
                            <!-- list start -->
                            <ul class="list list_center list_margin-20px content-bg-red">
                                <li class="">
                                    <h4 class="text-color-white headline-xxs padding-20 ">Primedia Properties</h4>
                                </li>
                            </ul><!-- list end -->
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="four-columns padding-top-60 offering-mobile">
                        <div class="column-l-r-margin-10 border-box border-radius-10px hidden-box">
                            <!-- list start -->
                            <ul class="list list_center list_margin-20px content-bg-red">
                                <li class="">
                                    <h4 class="text-color-white headline-xxs padding-20 ">Period/State</h4>
                                </li>
                            </ul><!-- list end -->
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="four-columns padding-top-60">
                        <div class="column-l-r-margin-10 border-box border-radius-10px hidden-box">
                            <!-- list start -->
                            <ul class="list list_center list_margin-20px content-bg-red">
                                <li class="">
                                    <h4 class="text-color-white headline-xxs padding-20 ">Remarks</h4>
                                </li>
                            </ul><!-- list end -->
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="twelve-columns padding-top-20">
                        <div class="column-l-r-margin-10 border-box border-radius-10px hidden-box">
                            <!-- list start -->
                            <ul class="list list_center list_margin-20px content-bg-red">
                                <li class="">
                                    <h4 class="text-color-white headline-xxs padding-20 ">Media Brockerage Services
                                    </h4>
                                </li>
                            </ul><!-- list end -->
                        </div>
                    </div><!-- column end -->

                    <div class="four-columns padding-top-20">
                        <div class="column-l-r-margin-10 border-box border-radius-10px hidden-box">
                            <!-- list start -->
                            <ul class="list  list_margin-20px content-bg-ash">
                                <li class="margin-left-10 list__item  red dots hidden-box">
                                    <h4 class="text-color-black body-text-xx-l padding-20">Our media brokerage services
                                        across all platforms (conventional media) adds an unmatchable value to our
                                        clients.</h4>
                                </li>
                                <li class="margin-left-10 list__item  red dots hidden-box">
                                    <h4 class="text-color-black body-text-xx-l padding-20">We are NTA Franchised agency
                                        and can deliver higher discounts on NTA Network and NTA local stations.</h4>
                                </li>
                                <li class="margin-left-10 list__item  red dots hidden-box">
                                    <h4 class="text-color-black body-text-xx-l padding-20">Event Coverage</h4>
                                </li>
                            </ul><!-- list end -->
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="four-columns padding-top-20">
                        <div class="column-l-r-margin-10 border-box border-radius-10px hidden-box">
                            <!-- list start -->
                            <ul class="list list_center  list_margin-20px content-bg-ash ">
                                <li class="">
                                    <h4 class="text-color-black body-text-xxl padding-20"></h4>
                                </li>
                                <li class="margin-bottom=">
                                    <h4 class="text-color-black body-text-xx-l padding-20">As per brief</h4>
                                </li>
                                <li class="margin-bottom-">
                                    <h4 class="text-color-black body-text-xx-l padding-20">As per brief</h4>
                                </li>
                                <li class="margin-bottom-50">
                                    <h4 class="text-color-black body-text-xx-l padding-20">As per brief</h4>
                                </li>
                                <li class="">
                                    <h4 class="text-color-black body-text-xx-l padding-20"></h4>
                                </li><br><br>
                            </ul><!-- list end -->
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="four-columns padding-top-20">
                        <div class="column-l-r-margin-10 border-box border-radius-10px hidden-box">
                            <!-- list start -->
                            <ul class="list  list_margin-20px content-bg-ash">
                                <li class="margin-bottom-20">
                                    <h4 class="text-color-black body-text-xx-l padding-20 ">Media planning and buying
                                        across all platforms including digital and social media.</h4>
                                </li>
                                <li class="margin-bottom-">
                                    <h4 class="text-color-black body-text-xx-l padding-20 ">As NTA Franchised agency,
                                        we deliver higher discounts subject to volume.</h4>
                                </li>
                                <li class="margin-bottom-">
                                    <h4 class="text-color-black body-text-xx-l padding-20 ">Based on agency/brand
                                        brief.</h4>
                                </li>
                                <li class="">
                                    <h4 class="text-color-black body-text-xx-l padding-20 "></h4>
                                </li>
                            </ul><!-- list end -->
                        </div>
                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- lines-container end -->
        </section><!-- pricing end -->

        <section class="lines-section pos-rel ash-lines section-bg-dark-1">
            <!-- lines-container start -->
            <div class="lines-container pos-rel ash-lines">
                <!-- flex-container start -->
                <div class=" width-100perc flex-container">
                    <!-- column start -->
                    <div class="four-columns column-100-100 client-logo-border">
                        <div class="line-col-l-r-margin-20 js-scrollanim">
                            <!-- title start -->
                            <h2 class="headline-xl text-color-black margin-left-50 client-mobile">
                                <span class="hidden-box d-block">
                                    <span class="anim-slide">
                                        <span class="text-color-red">Some Fine Clients We’ve Worked With</span>
                                    </span>
                                </span>
                            </h2><!-- title end -->
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="eight-columns column-100-100 flex-container">

                        @foreach ($pcompanies as $index => $pcompany)
                            @if ($index < 8)
                                <div class="three-columns client-logo-border client-img">
                                    <div class="client-logo-border__inner pos-rel">
                                        <img class="client-logo pos-abs pos-center-center"
                                            src="{{ asset('storage/' . $pcompany->image) }}" alt="clients logo">
                                    </div>
                                </div><!-- logo box end -->
                            @endif
                        @endforeach


                        <!-- logo box end -->
                    </div><!-- column end -->

                </div><!-- flex-container end -->
            </div><!-- lines-container end -->
        </section>

        <section class="lines-section pos-rel ash-lines section-bg-dark-2">
            <!-- lines-container start -->
            <div class="lines-container pos-rel ash-lines">
                <!-- flex-container start -->
                <div class=" width-100perc flex-container">


                    <!-- Column start for the remaining companies -->
                    <!-- Column start for the remaining companies -->
                    @php $firstChunk = true; @endphp
                    @foreach ($pcompanies as $index => $pcompany)
                        @if ($index >= 8)
                            @if (($index - 8) % 6 == 0)
                                @if (!$firstChunk)
                </div><!-- column end -->
                @endif
                <div class="twelve-columns column-100-100 flex-container">
                    @php $firstChunk = false; @endphp
                    @endif

                    <div class="two-columns client-logo-border client-img">
                        <div class="client-logo-border__inner pos-rel">
                            <img class="client-logo pos-abs pos-center-center"
                                src="{{ asset('storage/' . $pcompany->image) }}" alt="clients logo">
                        </div>
                    </div><!-- logo box end -->
                    @endif
                    @endforeach
                </div><!-- column end -->

                <!-- column start -->
                <div class="twelve-columns column-100-100 flex-container">


                    <!-- logo box start -->
                    <a href="#" class="four-columns client-logo-border js-pointer-large">
                        <div class="client-logo-border__inner hover-box pos-rel js-scrollanim">
                            <div class="padding-left-right-20 subhead-xxs text-center pos-abs pos-center-center">
                                <span class="anim-text-double-fill black" data-text="This spot">This
                                    spot</span><br>
                                <span class="anim-text-double-fill black tr-delay-02"
                                    data-text="awaits">awaits</span><br>
                                <span class="anim-text-double-fill black tr-delay-04" data-text="You">You</span>
                            </div>

                        </div>
                    </a>
                    <!-- logo box end -->
                </div><!-- column end -->


            </div><!-- flex-container end -->
            </div><!-- lines-container end -->
        </section>
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
                        <h4 class="column-l-r-margin-10 headline-xxxl footer-title">
                            State of the art <br>studio suited <br>for your media<br>needs
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
                        <a href="https://www.instagram.com/hotsportsng/" class="flip-btn js-pointer-small" data-text="Instagram">Instagram</a>
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
</body>

</html>
