<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        .file-input-container {
            position: relative;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .file-input-label {
            flex-grow: 1;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            background-color: #fff;
            cursor: pointer;
            text-align: center;
        }

        .file-input-button {
            padding: 0.5rem 1rem;
            background-color: #3490dc;
            color: #fff;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            margin-left: 0.5rem;
        }

        .file-input {
            display: none;
        }

        .file-name {
            margin-left: 1rem;
            font-size: 0.875rem;
            color: #555;
            margin-top: 0.5rem;
        }
    </style>
</head>

<body class="flex w-full">
    <x-side-bar />
    <div class="w-full h-screen overflow-y-auto  ">
        <div class="text-right bg-gray-800 text-gray-100 p-4">
            <span class="text-sm">Welcome, {{ Auth::user()->name }}</span>
            <i class="fa-sharp fa-light fa-user inline-block rounded-full ml-2" alt="Profile picture"></i>

        </div>
        <!-- Content -->
        <div class="flex-1 p-10 w-4/6">

            <h1 class="text-2xl font-bold mb-6">Add Media File</h1>



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
            <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-4">
                @csrf

                   <select name="page" id=""  class="w-full p-2 border border-gray-300 rounded">
                        <option value="" disabled selected>Select Page</option>
                        <option value="Homepage">Home Page</option>
                        <option value="HotSports">HotSports</option>
                        <option value="HS-Studios">HS-Studios</option>
                        <option value="Our Studios">Our Studios</option>
                        <option value="Primedia">Primedia</option>
                        <option value="Studios">Studios</option>
                        <option value="Team-Page">Team-Page</option>

                        
                    </select>

                <input type="text" name="category" placeholder="Enter Image Category"
                    class="w-full p-2 border border-gray-300 rounded">

                <div class="file-input-container">
                    <label for="upload" class="file-input-label">Upload Company Logos</label>
                    <input type="file" id="upload" name="images[]" class="file-input" multiple>
                    <button type="button" class="file-input-button">Upload</button>
                    <div id="file-names" class="file-name">No files selected</div>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    document.getElementById('upload').addEventListener('change', function() {
        var fileNames = [];
        for (var i = 0; i < this.files.length; i++) {
            fileNames.push(this.files[i].name);
        }
        document.getElementById('file-names').textContent = fileNames.length > 0 ? fileNames.join(', ') :
            'No files selected';
    });

    document.querySelector('.file-input-button').addEventListener('click', function() {
        document.getElementById('upload').click();
    });
</script>

</html>
