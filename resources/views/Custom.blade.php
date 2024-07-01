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
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}">

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
<body class="bg-[#1e1e1e] text-white font-sans">

    <header class="bg-black p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">GB Studios</div>
            <div>
                <button class="text-white text-xl">&#9776;</button>
            </div>
        </div>
    </header>

    <main class="container mx-auto mt-8">
        <article class=" p-6 rounded-lg">
            <img src="{{ asset('assets/images/blog/blog-bg.jpg') }}" alt="Production Studio" class="w-full h-[600px] object-cover rounded-lg mb-4">
            <h1 class="text-4xl font-bold text-red-500 mb-2">5 Things To Note Before Picking A Production Studio</h1>
            <p class=" mb-4 font-bold">Andrew Jonson<br> <span class="text-gray-400">Posted on 27th January 2022</span></p>
            <div class="space-y-4 mt-20">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <ul class="list-disc list-inside ml-5 space-y-1">
                    <li>List Item 1</li>
                    <li>List Item 2</li>
                    <li>List Item 3</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </article>

        <section class="mt-8">
            <h2 class="text-2xl font-bold mb-4 text-red-500">What to read next</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class=" p-4 rounded-lg">
                    <img src="{{ asset('assets/images/blog/blog-bg.jpg') }}" alt="Related Post 1" class="w-full h-80 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">Designing the perfect media program that garners attention</h3>
                    <p class="text-gray-400">By John Doe<br>Aug 25, 2021</p>
                </div>
                <div class=" p-4 rounded-lg">
                    <img src="{{ asset('assets/images/blog/blog-bg.jpg') }}" alt="Related Post 2" class="w-full h-80 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">Designing the perfect media program that garners attention</h3>
                    <p class="text-gray-400">By Jane Doe<br>Aug 27, 2021</p>
                </div>
                <div class=" p-4 rounded-lg">
                    <img src="{{ asset('assets/images/blog/blog-bg.jpg') }}" alt="Related Post 3" class="w-full h-80 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">Designing the perfect media program that garners attention</h3>
                    <p class="text-gray-400">By Alex Smith<br>Aug 29, 2021</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-red-600 py-8 mt-8">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold mb-4">Subscribe to our newsletter to get latest updates and news</h2>
            <form class="flex justify-center">
                <input type="email" placeholder="Enter your email" class="px-4 py-2 rounded-l-lg bg-white text-black" required>
                <button type="submit" class="px-4 py-2 bg-black text-white rounded-r-lg">Subscribe</button>
            </form>
        </div>
    </footer>

</body>
</html>
