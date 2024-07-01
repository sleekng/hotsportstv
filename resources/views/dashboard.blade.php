<!-- dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device="width=device-width", initial-scale="1.0">
    <title>Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
 {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> --}}
    <link href="{{ asset('assets/fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fontawesome/css/sharp-light.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fontawesome/css/sharp-regular.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fontawesome/css/sharp-solid.css') }}" rel="stylesheet" type="text/css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head> 
<body class="flex w-full">
<x-side-bar/>
    <div class="w-full h-screen  bg-gray-100">
        <div class="text-right bg-gray-800 text-gray-100 p-4">
            <span class="text-sm">Welcome, {{ Auth::user()->name }}</span>
            <i class="fa-sharp fa-light fa-user inline-block rounded-full ml-2"  alt="Profile picture"></i>
         
        </div>
        <div class="p-10 w-4/6">
            <h1 class="text-xl font-semibold mb-4">Welcome,</h1>
            <p class="text-lg mb-8">Where do you want to go?</p>
            <div class="grid grid-cols-3 gap-4">
                <a href="/blog-list" class="bg-cyan-500 text-white font-bold py-8 text-xl px-4 rounded">Blog Posts</a>
                <a href="/categories" class="bg-purple-600 text-white font-bold py-8 text-xl px-4 rounded">Blog Categories</a>
                <a href="/projects" class="bg-indigo-700 text-white font-bold py-8 text-xl px-4 rounded">HS Projects</a>
                <a href="/hprojects" class="bg-green-700 text-white font-bold py-8 text-xl px-4 rounded">Hotsports Projects</a>
                <a href="/team" class="bg-cyan-500 text-white font-bold py-8 text-xl px-4 rounded">The Team</a>
                <a href="/media" class="bg-pink-500 text-white font-bold py-8 text-xl px-4 rounded">Media Files</a>
            </div>
        </div>
    </div>
</body>
</html>
