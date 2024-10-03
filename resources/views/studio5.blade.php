<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Jinna Gik">
	<meta name="description" content="UMAYA Template is a uniquely HTML5 template develop in HTML with a modern look.">
	<meta name="keywords" content="creative, modern, clean, html5, css3, portfolio, blog, agency, templates, minimal">

	<!-- favicon -->
	<link rel="shortcut icon" href="{{ asset('/storage/media/'.'favicon.png') }}">
	<link rel="apple-touch-icon" href="{{ asset('/storage/media/'.'apple-touch-icon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/storage/media/'.'apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/storage/media/'.'apple-touch-icon-114x114.png') }}">

	<title>See Our Studios</title>

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
		<img class="preloader__logo vertical" src="{{ asset('/storage/media/'.'Homepage/Main Logos/HS Studios.png') }}" alt="logo">
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
		<!-- logo start -->
		<div class="header-logo js-midnight-color js-headroom">
			<div class="hidden-box">
				<a href="/" class="header-logo__box js-pointer-large js-animsition-link">
					<img class="header-logo__img white" src="{{ asset('/storage/media/'.'logo/logo-white.png') }}" alt="logo">
					<img class="header-logo__img black" src="{{ asset('/storage/media/'.'logo/logo-black.png') }}" alt="logo">
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
					<a href="Our-Studios" class="nav-btn large  js-pointer-large">
						<span class="nav-btn__inner" data-text="Our-Studios">Our Studios</span>
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
							1 Hotsports Drive, Off Etal Avenue,Kudirat Abiola Way, by NNPC Filling Station, Lagos,
							Ikeja, Lagos,Nigeria
						</a>
					</div>
				</div><!-- nav-address end -->

				<!-- nav-phone start -->
				<div>
					<div class="hidden-box d-inline-block">
						<div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Phone</div>
					</div>
					<div class="nav-fade-anim js-nav-anim margin-top-10">
						<a href="tel:+234 707 316 4361" class="subhead-xxs text-color-white text-hover-to-white">+234 707 316 4361</a><br>
						<a href="tel:+234 807 619 4584" class="subhead-xxs text-color-white text-hover-to-white">+234 807 619 4584</a>
					</div>
				</div><!-- nav-phone end -->
			</div><!-- nav-information end -->

			<!-- nav-copyright start -->
			<div class="nav-copyright text-right">
				<p class="copyright-style nav-fade-anim js-nav-anim">
					&copy; Copyright 2024 HS Studios. Created by <a href="#" class="text-weight-700 js-pointer-small">Zoar
						Imaginarium</a>
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
			<div class="container pos-rel anim-lines flex-min-height-100vh">
				<div class="padding-top-bottom-120 width-100perc">
					<div class="text-center tr-delay-08">
							<!-- title start -->
                            <h2 class="column-l-r-margin-10 headline-big-lg js-scrollanim margin-bottom-60">
                                <span class="hidden-box d-block">
                                    <span class="hidden-box d-block">
                                        <span class="anim-slide tr-delay-01 text-color-white">Studio 5</span>
                                    </span>
                            </h2><!-- title end -->
						<a href="Hsmedia" class="ellipse-btn ellipse-btn_red  js-pointer-large">
							<span class="">Take a Virtual Tour <i class="fa fa-chevron-right"
									aria-hidden="true"></i></span>
						</a>
					</div>
				</div>
			</div><!-- lines-container end -->
		</section><!-- pos-rel end -->

		<!-- photo gallery start -->
		<section class="pos-rel section-bg-dark-2">
			<!-- pos-rel start -->
			<div class="pos-rel padding-top-bottom-60">
				<!-- title start -->
				<h2 class="headline-l text-center hidden-box margin-top-bottom-60">
					<span class="anim-slide js-scrollanim text-color-red">Photo Gallery</span>
				</h2><!-- title end -->

				<!-- js-isotope-grid-box start -->
				<div class="js-isotope-grid-box container full padding-top-30">

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

					<!-- grid-item start -->
					<div class="padding-top-40 grid-item-33-50-100 js-isotope-grid-item margin-top-30">
						<a href="{{ asset('/storage/media/'.'Studios/5.png') }}"
							class="grid-margin-box js-photo-popup js-pointer-zoom">
							<div class="anim-img-scale js-img-scale">
								<img class="anim-img-scale__inner"
									src="{{ asset('/storage/media/'.'Studios/5.png') }}"
									alt="Studio Images">
							</div>
						</a>
					</div><!-- grid-item end -->

					
					<!-- grid-item start -->
					<div class="padding-top-40 grid-item-33-50-100 js-isotope-grid-item margin-top-30">
						<a href="{{ asset('/storage/media/'.'Studios/6.png') }}"
							class="grid-margin-box js-photo-popup js-pointer-zoom">
							<div class="anim-img-scale js-img-scale">
								<img class="anim-img-scale__inner"
									src="{{ asset('/storage/media/'.'Studios/6.png') }}"
									alt="Studio Images">
							</div>
						</a>
					</div><!-- grid-item end -->

					<!-- grid-item start -->
					<div class="padding-top-40 grid-item-33-50-100 js-isotope-grid-item margin-top-30">
						<a href="{{ asset('/storage/media/'.'Studios/8.png') }}"
							class="grid-margin-box js-photo-popup js-pointer-zoom">
							<div class="anim-img-scale js-img-scale">
								<img class="anim-img-scale__inner"
									src="{{ asset('/storage/media/'.'Studios/8.png') }}"
									alt="Studio Images">
							</div>
						</a>
					</div><!-- grid-item end -->

					<!-- grid-item start -->
					<div class="padding-top-40 grid-item-33-50-100 js-isotope-grid-item margin-top-30">
						<a href="{{ asset('/storage/media/'.'Studios/7.png') }}"
							class="grid-margin-box js-photo-popup js-pointer-zoom">
							<div class="anim-img-scale js-img-scale">
								<img class="anim-img-scale__inner"
									src="{{ asset('/storage/media/'.'Studios/7.png') }}"
									alt="Studio Images">
							</div>
						</a>
					</div><!-- grid-item end -->
				</div><!-- js-isotope-grid-box end -->
			</div><!-- pos-rel end -->
		</section><!-- photo gallery end -->

        <!-- photo gallery start -->
		<section class="pos-rel section-bg-dark-2">
			<!-- pos-rel start -->
			<div class="pos-rel padding-top-bottom-60">
				<!-- title start -->
				<h2 class="headline-l text-center hidden-box margin-top-bottom-60">
					<span class="anim-slide js-scrollanim text-color-red">Equipment</span>
				</h2><!-- title end -->

				<!-- js-isotope-grid-box start -->
				<div class="js-isotope-grid-box container full padding-top-30">

						<!-- grid-item start -->
						<div class="padding-top-40 grid-item-33-50-100 js-isotope-grid-item margin-top-30">
							<a href="{{ asset('/storage/media/'.'Studios/5.png') }}"
								class="grid-margin-box js-photo-popup js-pointer-zoom">
								<div class="anim-img-scale js-img-scale">
									<img class="anim-img-scale__inner"
										src="{{ asset('/storage/media/'.'Studios/9.png') }}"
										alt="Studio Images">
								</div>
							</a>
						</div><!-- grid-item end -->
	
						
						<!-- grid-item start -->
						<div class="padding-top-40 grid-item-33-50-100 js-isotope-grid-item margin-top-30">
							<a href="{{ asset('/storage/media/'.'Studios/6.png') }}"
								class="grid-margin-box js-photo-popup js-pointer-zoom">
								<div class="anim-img-scale js-img-scale">
									<img class="anim-img-scale__inner"
										src="{{ asset('/storage/media/'.'Studios/10.png') }}"
										alt="Studio Images">
								</div>
							</a>
						</div><!-- grid-item end -->
	
						<!-- grid-item start -->
						<div class="padding-top-40 grid-item-33-50-100 js-isotope-grid-item margin-top-30">
							<a href="{{ asset('/storage/media/'.'Studios/8.png') }}"
								class="grid-margin-box js-photo-popup js-pointer-zoom">
								<div class="anim-img-scale js-img-scale">
									<img class="anim-img-scale__inner"
										src="{{ asset('/storage/media/'.'Studios/11.png') }}"
										alt="Studio Images">
								</div>
							</a>
						</div><!-- grid-item end -->
				</div><!-- js-isotope-grid-box end -->
			</div><!-- pos-rel end -->
		</section><!-- photo gallery end -->
        <div class="text-center padding-bottom-60 padding-top-60">
            <a href="Hsmedia" class="ellipse-btn ellipse-btn_red  js-pointer-large">
                <span class="">Back to HS Studios<i class="fa fa-chevron-right"
                        aria-hidden="true"></i></span>
            </a>
        </div>
	</main><!-- main end -->



	<!-- scripts -->
	<script src="{{ asset('assets/js/plugins.js') }}"></script>
	<script src="{{ asset('assets/js/footer-reveal.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
	<script src="{{ asset('assets/js/footer-reveal_init.js') }}"></script>
</body>

</html>