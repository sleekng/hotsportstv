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
    <style>
        .actions {
            opacity: 0 /* Hide actions by default */
        }

        .item:hover{
            background-color: #f5f5f5; /* Change background color on hover */
        }

        .item:hover .actions {
            opacity: 1; /* Show actions on hover */
            
        }
    </style>
</head>

<body class="flex w-full">
    <x-side-bar/>
    <div class="w-full h-screen overflow-y-auto  ">
        <div class="text-right bg-gray-800 text-gray-100 p-4">
            <span class="text-sm">Welcome, Uche</span>
            <i class="fa-sharp fa-light fa-user inline-block rounded-full ml-2" alt="Profile picture"></i>

        </div>
          <!-- Content -->
          <div class="flex-1 p-10 w-4/6">

            <h1 class="text-2xl font-bold mb-6">Edit File</h1>
            <!-- Form -->
            <form class="space-y-4 mt-4">
                <div>
                    <img src="{{ asset('assets/images/test/3.png') }}" alt="placeholder" class="w-80 h-80 mr-4">
                </div>
                <div class="flex items-center">
                    <input type="file" id="upload" class="hidden">
                    <label for="upload" class="w-full p-2 border border-gray-300 ">Upload New Cover Image Here</label>
                    <button type="button" class="py-2 px-4 text-white bg-blue-500  ">Upload</button>
                </div>
                <input type="text" placeholder="Image Title" class="w-full p-2 border border-gray-300 rounded">


                <div class="flex justify-start space-x-4 mt-4">
                    <button type="button" class="py-2 px-4 text-white bg-blue-500 rounded">Update</button>
                    <button type="button" class="py-2 px-4 text-white bg-pink-500 rounded">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
