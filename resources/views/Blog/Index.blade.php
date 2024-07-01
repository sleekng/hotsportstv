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
            opacity: 0
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
        <div class="p-10 ">
            <div class="flex-1 p-6 ">
                <h1 class="text-2xl font-bold mb-4">Blog Posts</h1>

                <div class="flex items-center justify-between mb-4">
                    <div>
                        <ul class="flex space-x-4 text-blue-600">
                            <li><a href="{{ route('blog-list', ['status' => 'all']) }}" class="{{ request('status') == 'all' ? 'font-bold' : '' }}">All ({{ $allCount }})</a></li>
                            <li><a href="{{ route('blog-list', ['status' => 'published']) }}" class="{{ request('status') == 'published' ? 'font-bold' : '' }}">Published ({{ $publishedCount }})</a></li>
                            <li><a href="{{ route('blog-list', ['status' => 'draft']) }}" class="{{ request('status') == 'draft' ? 'font-bold' : '' }}">Drafts ({{ $draftCount }})</a></li>
                            <li><a href="{{ route('blog-list', ['status' => 'trash']) }}" class="{{ request('status') == 'trash' ? 'font-bold' : '' }}">Trash ({{ $trashCount }})</a></li>
                        </ul>
                        
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('blogs.create') }}"
                            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Add New</a>
                        <div class="flex items-center">
                            <input type="text" class="border border-gray-300 rounded px-3 py-2"
                                placeholder="Search Pages">
                            <button class="bg-blue-600 text-white px-4 py-2 rounded ml-2 hover:bg-blue-500">Search
                                Pages</button>
                        </div>
                    </div>
                </div>
                <!-- Display Success Message -->
@if(session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
    <span class="block sm:inline">{{ session('success') }}</span>
</div>
@endif



                <div class="bg-gray-100 p-4 rounded-t flex justify-between items-center">
                    <div class="w-1/2 flex items-center">
                        <input type="checkbox" class="mr-2">
                        <span class="font-bold">Title</span>
                    </div>
                    <div class="w-1/3"><span class="font-bold">Author</span></div>
                    <div class="w-1/3"><span class="font-bold">Date</span></div>
                    <div class="w-1/3"><span class="font-bold">Status</span></div>
                    <div class="w-1/3"><span class="font-bold">SEO Details</span></div>
                </div>

                @foreach ($posts as $post)
                    <div
                        class="border-t item flex flex-col bg-white p-4 {{ $loop->even ? 'bg-white' : 'bg-gray-200' }}">
                        <div class="flex justify-between items-center mt-2">
                            <div class="w-1/2 flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span class="font-bold">{{ $post->title }}</span>
                            </div>
                            <div class="w-1/3">{{ $post->author }}</div>
                            <div class="w-1/3">
                               <br>{{ $post->created_at->format('jS M, Y') }}
                            </div>
                            @if ($post->status == 'published')
                                <div class="w-1/3 text-green-600">
                                    Published
                                </div>
                            @endif
                            @if ($post->status == 'trash')
                                <div class="w-1/3 text-red-600">
                                    Trash
                                </div>
                            @endif
                            @if ($post->status == 'draft')
                                <div class="w-1/3">
                                   Draft
                                </div>
                            @endif

                            <div class="w-1/3">
                                Keyword: {{ $post->keywords }}<br>
                            </div>
                        </div>
                        <div class="actions ml-6">
                            <div class="w-full flex mt-2">
                                <a href="{{ route('blogs.edit', $post->id) }}"
                                    class="bg-blue-600 text-white px-4 py-2 rounded mr-2 hover:bg-blue-500">Edit</a>
                                <form action="{{ route('blogs.destroy', $post->id) }}" method="POST" onsubmit="confirmDelete(event)">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
