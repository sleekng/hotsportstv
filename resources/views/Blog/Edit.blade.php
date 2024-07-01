<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog Post</title>
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
        <div class="p-10 w-4/6">
            <h1 class="text-2xl font-bold mb-6">Edit Blog Post</h1>
 

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
            <form class="space-y-4 mt-4" action="{{ route('blogs.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" name="title" value="{{ $post->title }}" placeholder="Article Title" class="w-full p-2 border border-gray-300 rounded" required>
                <input type="text" name="author" value="{{ $post->author }}" placeholder="Author" class="w-full p-2 border border-gray-300 rounded" required>

                <div class="file-input-container">
                    <label for="upload" class="file-input-label">Upload Title Image Here</label>
                    <input type="file" id="upload" name="image" class="file-input">
                    <button type="button" class="file-input-button">Upload</button>
                    <span id="file-name" class="file-name">No file selected</span>
                </div>

                @if ($post->image)
                    <div class="mt-4">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Current Image" class="w-48 h-auto">
                    </div>
                @endif

                <select name="category" class="w-full p-2 border border-gray-300 rounded" required>
                    <option  disabled selected>Select Category</option>
                    @foreach ($categories as $category )
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
                    <option value="{{ $post->category }}" selected>{{ $post->category }}</option>
                    <!-- Add more categories dynamically if needed -->
                </select>

                <div>
                    <textarea name="content" class="w-full h-40 p-2 border border-gray-300 rounded" placeholder="Enter text here..." required>{{ $post->content }}</textarea>
                </div>

                <input type="text" name="keywords" value="{{ $post->keywords }}" placeholder="Add keywords" class="w-full p-2 border border-gray-300 rounded mt-4">

                <div class="flex justify-end space-x-4 mt-4">
                    <button type="submit" name="status" value="published" class="py-2 px-4 text-white bg-blue-500 rounded">Update & Publish</button>
                    <button type="submit" name="status" value="draft" class="py-2 px-4 text-white bg-pink-500 rounded">Move to Drafts</button>
                    <button type="submit" name="status" value="trash" class="py-2 px-4 text-white bg-red-600 rounded">Move to Trash</button>
                    <a href="{{ route('dashboard') }}" class="py-2 px-4 text-white bg-gray-500 rounded">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // CKEditor initialization
        CKEDITOR.replace('content');

        // File upload button functionality
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
