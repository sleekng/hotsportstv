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
    <x-side-bar/>
    <div class="w-full h-screen overflow-y-auto  ">
        <div class="text-right bg-gray-800 text-gray-100 p-4">
            <span class="text-sm">Welcome, {{ Auth::user()->name }}</span>
            <i class="fa-sharp fa-light fa-user inline-block rounded-full ml-2" alt="Profile picture"></i>

        </div>
          <!-- Content -->
          <div class="flex-1 p-10 w-4/6">

            <h1 class="text-2xl font-bold mb-6">Edit Company Logo</h1>


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

            <form action="{{ route('pcompanies.update', $company->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                @method('PUT')
 
                <div class="file-input-container">
                    <label for="upload" class="file-input-label">Upload Company Logo</label>
                    <input type="file" id="upload" name="image" class="file-input">
                    <button type="button" class="file-input-button">Upload</button>
                    <span id="file-name" class="file-name">No file selected</span>
                </div>
    
                @if ($company->image)
                    <div class="mt-4 border">
                        <img src="{{ asset('storage/' . $company->image) }}" alt="{{ $company->name }}" class="w-48 h-auto">
                    </div>
                @endif
    
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                </div>
            </form>
        </div>
    </div>

    <script>
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
