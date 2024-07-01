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
    <div class="w-full h-screen overflow-y-auto  ">
        <div class="text-right bg-gray-800 text-gray-100 p-4">
            <span class="text-sm">Welcome, {{ Auth::user()->name }}</span>
            <i class="fa-sharp fa-light fa-user inline-block rounded-full ml-2" alt="Profile picture"></i>

        </div>
          <!-- Content -->
          <div class="flex-1 p-10 w-4/6">

            <h1 class="text-2xl font-bold mb-6">Create Instagram Post URL</h1>


<!-- Display Validation Errors -->
@if ($errors->any())
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
    <ul class="list-disc list-inside">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
  
            <!-- Form -->
            <form action="{{ route('instagram-posts.store') }}" method="POST" class="space-y-4">
                @csrf
                <label for="url">Instagram Post URL:</label>
                <input type="url" id="url" name="url" placeholder="Instagram Post URL" class="w-full p-2 border border-gray-300 rounded" required>


                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
