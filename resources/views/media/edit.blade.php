<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Testimonial</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Font Awesome -->
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> --}}
    <link href="{{ asset('assets/fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fontawesome/css/sharp-light.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fontawesome/css/sharp-regular.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fontawesome/css/sharp-solid.css') }}" rel="stylesheet" type="text/css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

         <!-- CKEditor -->
         <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <style>
        .file-input-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .file-input-label {
            flex-grow: 1;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            background-color: #fff;
            cursor: pointer;
        }

        .file-input-button {
            padding: 0.5rem 1rem;
            background-color: #3490dc;
            color: #fff;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
        }

        .file-input {
            display: none;
        }

        .file-name {
            margin-left: 1rem;
            font-size: 0.875rem;
            color: #555;
        }
    </style>
</head>

<body class="flex w-full">
    <x-side-bar />
    <div class="w-full h-screen overflow-y-auto">
        <div class="text-right bg-gray-800 text-gray-100 p-4">
            <span class="text-sm">Welcome, {{ Auth::user()->name }}</span>
            <i class="fa-sharp fa-light fa-user inline-block rounded-full ml-2" alt="Profile picture"></i>
        </div>
        <div class="flex-1 p-10 w-4/6">
            <h1 class="text-2xl font-bold mb-6">Edit Media File</h1>


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
            <form class="space-y-4 mt-4" action="{{ route('media.update', $media->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
               {{ $media->page }}
                <input type="text"  name="page" value="{{ $media->page }}" placeholder="Category" class="w-full bg-gray-300 hidden p-2 border border-gray-300 rounded" required>
                <input type="text"  name="category" value="{{ $media->category }}" placeholder="Category" class="w-full bg-gray-300 hidden p-2 border border-gray-300 rounded" >
                <input type="text" disabled  name="type" value="{{ $media->type }}" placeholder="Type" class="w-full bg-gray-300 p-2 border border-gray-300 rounded" required>
               
               
                <div class="file-input-container">
                    <label for="upload" class="file-input-label">Upload New Image Here</label>
                    <input type="file" id="upload" name="image" class="file-input">
                    <button type="button" class="file-input-button">Upload</button>
                    <span id="file-name" class="file-name">No file selected</span>
                </div>

                @if ($media->image)
                    <div class="mt-4">
                        <img src="{{ asset('storage/' . $media->image) }}" alt="Current Image" class="w-48 h-auto">
                    </div>
                @endif

                <div class="flex justify-start space-x-4 mt-4">
                    <button type="submit" class="py-2 px-4 text-white bg-blue-500 rounded">Update</button>
                    <a href="{{ route('media.index') }}" class="py-2 px-4 text-white bg-gray-500 rounded">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script>

     // CKEditor initialization
     CKEDITOR.replace('content');

        document.getElementById('upload').addEventListener('change', function() {
            var fileName = this.files[0] ? this.files[0].name : 'No file selected';
            document.getElementById('file-name').textContent = fileName;
        });

        document.querySelector('.file-input-button').addEventListener('click', function() {
            document.getElementById('upload').click();
        });
    </script>
</body>

</html>
