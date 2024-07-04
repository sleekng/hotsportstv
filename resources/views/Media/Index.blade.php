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

        .accordion-header {
            cursor: pointer;
            background-color: #e2e8f0;
            padding: 1em;
            border: 1px solid #cbd5e0;
            margin-top: 1em;
        }

        .accordion-content {
            display: none;
            padding: 1em;
            border: 1px solid #cbd5e0;
            border-top: none;
        }
    </style>
    <script>
        function confirmDelete(event) {
            event.preventDefault();
            const userConfirmed = confirm('Do you really want to delete this?');
            if (userConfirmed) {
                event.target.submit();
            }
        }

        function toggleAccordion(event) {
            const header = event.target;
            const content = header.nextElementSibling;
            content.style.display = content.style.display === 'none' ? 'block' : 'none';
        }

        document.addEventListener('DOMContentLoaded', () => {
            const headers = document.querySelectorAll('.accordion-header');
            headers.forEach(header => {
                header.addEventListener('click', toggleAccordion);
            });
        });
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
                <h1 class="text-3xl font-semibold">All media Files</h1>

                <div class="flex justify-between items-center my-6">
                   
                    <a href="{{ route('media.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add New</a>
                </div>

                <!-- Display Success Message -->
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                @if ($media->isEmpty())
                    <div class="border-t item flex flex-col bg-white p-4 hover:bg-gray-200">
                        <div class="flex justify-between items-center mt-2">
                            <div class="w-full flex items-center">
                                <span class="font-bold">No Media File available.</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="accordion-header">Homepage</div>
                    <div class="accordion-content">
                        <div class="grid grid-cols-6 gap-4">
                            @foreach ($HomePage as $item)
                                <div class="border-t item bg-white p-4 hover:bg-gray-200 flex flex-col">
                                    @if ($item->image)
                                        <div class="mt-4 flex-shrink-0">
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->type }}" class="w-full h-auto max-h-40 object-contain">
                                        </div>
                                    @endif
                                  
                                    <div class="whitespace-normal mt-2"><span>{{ $item->image }}</span></div>
                                    <div class="actions mt-4">
                                        <div class="w-full flex mt-2">
                                            <a href="{{ route('media.edit', $item->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded mr-2 hover:bg-blue-500">Edit</a>
                                            <form action="{{ route('media.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="confirmDelete(event)">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                    </div>

                    <div class="accordion-header">HotSports</div>
                    <div class="accordion-content">
                        <div class="grid grid-cols-6 gap-4">
                            @foreach ($HotSports as $item)
                            <div class="border-t item bg-white p-4 hover:bg-gray-200 flex flex-col">
                                @if ($item->image)
                                    <div class="mt-4 flex-shrink-0">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->type }}" class="w-full h-auto max-h-40 object-contain">
                                    </div>
                                @endif
                                <div class="whitespace-normal mt-2"><span>{{ $item->image}}</span></div>
                                <div class="actions mt-4">
                                    <div class="w-full flex mt-2">
                                        <a href="{{ route('media.edit', $item->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded mr-2 hover:bg-blue-500">Edit</a>
                                        <form action="{{ route('media.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="confirmDelete(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="accordion-header">HS-Studios</div>
                    <div class="accordion-content">
                        <div class="grid grid-cols-6 gap-4">
                            @foreach ($HSStudios as $item)
                            <div class="border-t item bg-white p-4 hover:bg-gray-200 flex flex-col">
                                @if ($item->image)
                                    <div class="mt-4 flex-shrink-0">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->type }}" class="w-full h-auto max-h-40 object-contain">
                                    </div>
                                @endif
                                <div class="whitespace-normal mt-2"><span>{{ $item->image }}</span></div>
                                <div class="actions mt-4">
                                    <div class="w-full flex mt-2">
                                        <a href="{{ route('media.edit', $item->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded mr-2 hover:bg-blue-500">Edit</a>
                                        <form action="{{ route('media.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="confirmDelete(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="accordion-header">Our Companies</div>
                    <div class="accordion-content">
                        <div class="grid grid-cols-6 gap-4">
                            @foreach ($OurCompanies as $item)
                            <div class="border-t item bg-white p-4 hover:bg-gray-200 flex flex-col">
                                @if ($item->image)
                                    <div class="mt-4 flex-shrink-0">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->type }}" class="w-full h-auto max-h-40 object-contain">
                                    </div>
                                @endif
                                <div class="whitespace-normal mt-2"><span>{{ $item->image }}</span></div>
                                <div class="actions mt-4">
                                    <div class="w-full flex mt-2">
                                        <a href="{{ route('media.edit', $item->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded mr-2 hover:bg-blue-500">Edit</a>
                                        <form action="{{ route('media.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="confirmDelete(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="accordion-header">Primedia</div>
                    <div class="accordion-content">
                        <div class="grid grid-cols-6 gap-4">
                            @foreach ($Primedia as $item)
                            <div class="border-t item bg-white p-4 hover:bg-gray-200 flex flex-col">
                                @if ($item->image)
                                    <div class="mt-4 flex-shrink-0">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->type }}" class="w-full h-auto max-h-40 object-contain">
                                    </div>
                                @endif
                                <div class="whitespace-normal mt-2"><span>{{ $item->image }}</span></div>
                                <div class="actions mt-4">
                                    <div class="w-full flex mt-2">
                                        <a href="{{ route('media.edit', $item->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded mr-2 hover:bg-blue-500">Edit</a>
                                        <form action="{{ route('media.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="confirmDelete(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="accordion-header">Studios</div>
                    <div class="accordion-content">
                        <div class="grid grid-cols-6 gap-4">
                            @foreach ($Studios as $item)
                            <div class="border-t item bg-white p-4 hover:bg-gray-200 flex flex-col">
                                @if ($item->image)
                                    <div class="mt-4 flex-shrink-0">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->type }}" class="w-full h-auto max-h-40 object-contain">
                                    </div>
                                @endif
                                <div class="whitespace-normal mt-2"><span>{{ $item->image }}</span></div>
                                <div class="actions mt-4">
                                    <div class="w-full flex mt-2">
                                        <a href="{{ route('media.edit', $item->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded mr-2 hover:bg-blue-500">Edit</a>
                                        <form action="{{ route('media.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="confirmDelete(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="accordion-header">Team-Page</div>
                    <div class="accordion-content">
                        <div class="grid grid-cols-6 gap-4">
                            @foreach ($TeamPage as $item)
                            <div class="border-t item bg-white p-4 hover:bg-gray-200 flex flex-col">
                                @if ($item->image)
                                    <div class="mt-4 flex-shrink-0">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->type }}" class="w-full h-auto max-h-40 object-contain">
                                    </div>
                                @endif
                                <div class="whitespace-normal mt-2"><span>{{ $item->image }}</span></div>
                                <div class="actions mt-4">
                                    <div class="w-full flex mt-2">
                                        <a href="{{ route('media.edit', $item->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded mr-2 hover:bg-blue-500">Edit</a>
                                        <form action="{{ route('media.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="confirmDelete(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>
