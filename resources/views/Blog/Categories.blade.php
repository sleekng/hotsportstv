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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .actions {
            opacity: 0;
        }

        .item:hover {
            background-color: #f5f5f5;
        }

        .item:hover .actions {
            opacity: 1;
        }
    </style>
    <script>
        function confirmDelete(event) {
            event.preventDefault();
            const userConfirmed = confirm('Do you really want to delete the selected categories?');
            if (userConfirmed) {
                event.target.submit();
            }
        }

        function toggleSelectAll(source) {
            const checkboxes = document.querySelectorAll('input[name="category_ids[]"]');
            checkboxes.forEach(checkbox => checkbox.checked = source.checked);
        }
    </script>
</head>

<body class="flex w-full">
    <x-side-bar />
    <div class="w-full h-screen overflow-y-auto">
        <div class="text-right bg-gray-800 text-gray-100 p-4">
            <span class="text-sm">Welcome, {{ Auth::user()->name }}</span>
            <i class="fa-sharp fa-light fa-user inline-block rounded-full ml-2" alt="Profile picture"></i>
        </div>
        <div class="flex-1 p-10 w-full">
            <div class="flex-1 p-6">
                <h1 class="text-3xl font-semibold">Blog Categories</h1>
                <div class="flex justify-between items-center my-6">
                    <div class="text-xl font-bold">
                        All ({{ $categories->count() }})
                    </div>
                    <a href="{{ route('categories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add New</a>
                    <div>
                        <input type="text" placeholder="Search Categories" class="border p-2 ml-4 rounded-lg" />
                        <button class="bg-blue-500 text-white px-4 py-2 ml-2 rounded-lg">Search Pages</button>
                    </div>
                </div>
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif

                <form action="{{ route('categories.massDestroy') }}" method="POST" onsubmit="confirmDelete(event)">
                    @csrf
                    @method('DELETE')

                    <div class="mt-4">
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete Selected</button>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-t flex mt-4 justify-between items-center">
                        <div class="w-full flex items-center">
                            <input type="checkbox" onclick="toggleSelectAll(this)" class="mr-2">
                            <span class="font-bold">Title</span>
                        </div>
                    </div>

                    @if ($categories->isEmpty())
                        <div class="border-t item flex flex-col bg-white p-4 hover:bg-gray-200">
                            <div class="flex justify-between items-center mt-2">
                                <div class="w-full flex items-center">
                                    <span class="font-bold">No categories available.</span>
                                </div>
                            </div>
                        </div>
                    @else
                        @foreach ($categories as $category)
                            <div class="border-t item flex flex-col bg-white p-4 hover:bg-gray-200">
                                <div class="flex justify-between items-center mt-2">
                                    <div class="w-1/2 flex items-center">
                                        <input type="checkbox" name="category_ids[]" value="{{ $category->id }}" class="mr-2">
                                        <span class="font-bold">{{ $category->name }}</span>
                                    </div>
                                    <div class="actions flex ml-6">
                                        <a href="{{ route('categories.edit', $category->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded mr-2 hover:bg-blue-500">Edit</a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Do you really want to delete this category?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                       
                    @endif

                  
                </form>
            </div>
        </div>
    </div>
</body>

</html>
