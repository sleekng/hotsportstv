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
            /* Hide actions by default */
        }

        .item:hover {
            background-color: #f5f5f5;
            /* Change background color on hover */
        }

        .item:hover .actions {
            opacity: 1;
            /* Show actions on hover */
        }
    </style>
    <script>
        function confirmDelete(event) {
            event.preventDefault(); // Prevent the form from submitting immediately
            const userConfirmed = confirm('Do you really want to delete this category?');
            if (userConfirmed) {
                event.target.submit(); // Submit the form if the user confirmed
            }
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
        <!-- Content -->
        <div class="flex-1 p-10 w-full">
            <div class="flex-1 p-6">
                <h1 class="text-3xl font-semibold">Instagram Post</h1>
                <div class="flex justify-between items-center my-6">
                    <div class="text-xl font-bold">
                        All ({{ $instagramPosts->count() }})
                    </div>
                    <a href="{{ route('instagram-posts.create') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add New</a>
                    <div>
                 {{--        <input type="text" placeholder="Search Instagram Post" class="border p-2 ml-4 rounded-lg" /> --}}
                        <button class="bg-blue-500 text-white px-4 py-2 ml-2 rounded-lg">Search Post</button>
                    </div>
                </div>
                <!-- Display Success Message -->
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                        role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif



                <div class="bg-gray-100 p-4 rounded-t flex mt-4 justify-between items-center">
                    <div class="w-full flex items-center">


                    </div>
                </div>

                @if ($instagramPosts->isEmpty())
                    <div class="border-t item flex flex-col bg-white p-4 hover:bg-gray-200">
                        <div class="flex justify-between items-center mt-2">
                            <div class="w-full flex items-center">
                                <span class="font-bold">No Instagram Post available.</span>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($instagramPosts as $post)
                        <div class="inline-block item overflow-hidden relative card min-w-80 min-h-80">
                            <blockquote class="instagram-media" data-instgrm-version="14" data-hidecaption="true"
                                data-instgrm-permalink="{{ $post->url }}">
                            </blockquote>
                            <div class="actions ml-6">
                                <div class="w-full flex mt-2">
                                    <a href="{{ route('instagram-posts.edit', $post->id) }}"
                                        class="bg-blue-600 text-white px-4 py-2 rounded mr-2 hover:bg-blue-500">Edit</a>
                                    <form action="{{ route('instagram-posts.destroy', $post->id) }}" method="POST"
                                        class="inline-block" onsubmit="confirmDelete(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>


    <!-- Instagram Embed Script -->
    <script async defer src="//www.instagram.com/embed.js"></script>
</body>

</html>
