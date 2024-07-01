<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('assets/fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fontawesome/css/sharp-light.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fontawesome/css/sharp-regular.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fontawesome/css/sharp-solid.css') }}" rel="stylesheet" type="text/css">

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .actions {
            opacity: 0; /* Hide actions by default */
        }

        .item:hover {
            background-color: #f5f5f5; /* Change background color on hover */
        }

        .item:hover .actions {
            opacity: 1; /* Show actions on hover */
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
        <!-- Content -->
        <div class="flex-1 p-10 w-4/6">
            <h1 class="text-2xl font-bold mb-6">Create Blog Post</h1>


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
            <form class="space-y-4 mt-4" action="{{ route('blog-posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" placeholder="Article Title" class="w-full p-2 border border-gray-300 rounded" required>
                <input type="text" name="author" placeholder="Author" class="w-full p-2 border border-gray-300 rounded" required>

                <div class="flex items-center">
                    <input type="file" id="upload" name="image" class="hidden">
                    <label for="upload" class="w-full p-2 border border-gray-300 rounded cursor-pointer">Upload Title Image Here</label>
                    <button type="button" id="uploadBtn" class="py-2 px-4 text-white bg-blue-500 rounded ml-2">Upload</button>
                </div>

                <select name="category" class="w-full p-2 border border-gray-300 rounded" required>
                    <option value="" disabled selected>Select Category</option>
                    <!-- Add categories dynamically if needed -->
                    @foreach ($categories as $category )
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach

                </select>

                <div>
                    <textarea name="content" class="w-full h-40 p-2 border border-gray-300 rounded" placeholder="Enter text here..." required></textarea>
                </div>

                <input type="text" name="keywords" placeholder="Add keywords" class="w-full p-2 border border-gray-300 rounded mt-4">

                <div class="flex justify-end space-x-4 mt-4">
                    <button type="submit" name="status" value="published" class="py-2 px-4 text-white bg-blue-500 rounded">Publish</button>
                    <button type="submit" name="status" value="draft" class="py-2 px-4 text-white bg-pink-500 rounded">Save to Drafts</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // CKEditor initialization
        CKEDITOR.replace('content');

        // File upload button functionality
        document.getElementById('uploadBtn').addEventListener('click', function() {
            document.getElementById('upload').click();
        });

        document.getElementById('upload').addEventListener('change', function() {
            const label = document.querySelector('label[for="upload"]');
            label.textContent = this.files[0].name;
        });
    </script>
</body>

</html>
