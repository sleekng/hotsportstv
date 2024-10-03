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


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Swiper CSS from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body class="preloader cursor-anim-enable dark-nav py-40 bg-[#1e1e1e]">
    <!-- preloader-loading start -->
    <div class="preloader__logoload-box">
        <img class="preloader__logo vertical"
            src="{{ asset('/storage/media/'.'Homepage/Main Logos/HS Studios.png') }}" alt="logo">
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
        <div class="header-logo vertical js-midnight-color js-headroom" style="background-color: black;">
            <div class="hidden-box">
                <a href="/" class="header-logo__box  js-pointer-large js-animsition-link">
                    <img class="header-logo__img white margin-left-10 margin-right-20 margin-bottom-20"
                        style="width: 90%;"
                        src="{{ asset('/storage/media/'.'Homepage/Main Logos/HS Media Group@2x.png') }}" alt="logo">
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
    <nav class="nav-container  pos-rel js-dropdown-active-box">
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
                    <a href="{{ route('About-Us') }}" class="nav-btn large  js-pointer-large">
                        <span class="nav-btn__inner" data-text="About-Us">About Us</span>
                    </a>
                </li><!-- nav-btn-box end -->

                <!-- nav-btn-box start -->
                <li class="nav-btn-box">
                    <a href="{{ route('Our-Studios') }}" class="nav-btn large  js-pointer-large">
                        <span class="nav-btn__inner" data-text="Our Studios">Our Studios</span>
                    </a>
                </li><!-- nav-btn-box end -->


                <!-- nav-btn-box start -->
                <li class="nav-btn-box">
                    <a href="{{ route('all-blog') }}" class="nav-btn large  js-pointer-large">
                        <span class="nav-btn__inner" data-text="Blog">Blog</span>
                    </a>
                </li><!-- nav-btn-box end -->


                <!-- nav-btn-box start -->
                <li class="nav-btn-box">
                    <a href="{{ route('Contact-Us') }}"
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
                        <a href="tel:+234 707 316 4361" class="subhead-xxs text-color-white text-hover-to-white">+234 707 316 4361</a><br>
                        <a href="tel:+234 807 619 4584" class="subhead-xxs text-color-white text-hover-to-white">+234 807 619 4584</a>
                    </div>
                </div><!-- nav-phone end -->
            </div><!-- nav-information end -->

            <!-- nav-copyright start -->
            <div class="nav-copyright text-right">
                <p class="copyright-style nav-fade-anim js-nav-anim">
                    &copy; Copyright 2024 HS Studios. <a href="#" class="text-weight-700 js-pointer-small"></a>
                </p>
            </div><!-- nav-copyright end -->
        </div><!-- pos-rel end -->
    </nav><!-- navigation end -->

    <main class="container mx-auto mt-8 js-animsition-overlay" data-animsition-overlay="true">
        <article class=" p-6 rounded-lg anim-fade js-scrollanim w-full flex flex-col justify-center items-center ">
            <img src="{{ asset('storage/'.$post->image) }}" alt="Production Studio"
                class="w-full anim-fade js-scrollanim h-[600px] object-cover rounded-lg  mb-4">

            <div>
                <h1 class="text-4xl mt-4 font-bold text-red-600 mb-2">{{ $post->title }}
                </h1>
                <p class=" mb-4 font-bold">{{ $post->author }}<br> <span class="text-gray-400">Posted on {{ $post->created_at->format('jS M, Y') }}</span></p>
            </div>
            <div class="space-y-4 mt-20 max-w-4xl  leading-normal text-base">
                {!! $post->content !!}
            </div>
        </article>


        <section class="mt-8 md:px-24 px-4">
            <h2 class="text-2xl font-bold mb-4 text-red-600">What to read next</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($similarPosts as $similarPost)
                <a href="{{ route('blog-info.show',$similarPost) }}" class="bg-[#3a3a3a] rounded-md xl:margin-left-50 anim-fade js-scrollanim">
                    <img src="{{ asset('storage/' . $similarPost->image) }}" alt="Featured {{ $similarPost->title }}" class="w-full h-80 object-cover rounded-md mb-4">
                    <div class="p-4">
                        <div class="min-h-[70px]">
                            <h3 class="text-xl font-semibold mb-4">{{ $similarPost->title }}</h3>
                        </div>
                        <p>
                            @php
                                $content = strip_tags($similarPost->content);
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
        </section>

        <section class="pos-rel  pt-10">
            <!-- Subscription Section -->
            <div class="bg-red-600 md:bg-transparent flex justify-center  px-4 md:px-8">
                <div class="container mx-auto md:bg-red-600 py-20 md:py-40">
                    <div class="grid md:grid-cols-2 xl:gap-40 xl:px-40 grid-cols-1">
                        <div class="col-span-1  flex  justify-end">
                            <h2 class="text-3xl  font-bold mb-4 anim-fade js-scrollanim">Subscribe to our newsletter to
                                get latest updates and news</h2>
                        </div>
                        <div class="col-span-1">
                            <form
                                class="flex flex-col md:flex-row justify-center md:space-x-2 space-y-2 md:space-y-0 anim-fade js-scrollanim">
                                <input type="email" placeholder="Enter Your Email"
                                    class="p-4 bg-transparent border-white border-2 text-white w-full  outline-none placeholder:text-white focus:border-white focus:outline-none">
                                <button
                                    class="bg-white hover:bg-black hover:text-white text-black px-10 md:py-2 font-bold py-4">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
			.whatsapp-float {
				position: fixed;
				width: 60px;
				height: 60px;
				bottom: 40px;
				right: 40px;
				background-color: #25d366;
				color: #FFF;
				border-radius: 50px;
				text-align: center;
				font-size: 30px;
				box-shadow: 2px 2px 3px #999;
				z-index: 100;
				transition: transform 0.3s;
			}
	
			.whatsapp-float:hover {
				transform: scale(1.1);
			}
	
			.whatsapp-icon {
				margin-top: 16px;
			}
	
			@keyframes pulse {
				0% {
					transform: scale(0.95);
					box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
				}
	
				70% {
					transform: scale(1);
					box-shadow: 0 0 0 10px rgba(37, 211, 102, 0);
				}
	
				100% {
					transform: scale(0.95);
					box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
				}
			}
	
			.whatsapp-float {
				animation: pulse 2s infinite;
			}
		</style>

		<a href="https://chat.whatsapp.com/I8gPv0UXrdy2e1KDwbpHA5" class="whatsapp-float" target="_blank">
			<i class="fab fa-whatsapp whatsapp-icon"></i>
		</a>
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </main>




    <!-- scripts -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal_init.js') }}"></script>
    <script src="{{ asset('assets/js/modal.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Instagram Embed Script -->
    <script async defer src="//www.instagram.com/embed.js"></script>
</body>

</html>
