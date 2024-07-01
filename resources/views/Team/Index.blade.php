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
        const userConfirmed = confirm('Do you really want to delete this?');
        if (userConfirmed) {
            event.target.submit(); // Submit the form if the user confirmed
        }
    }
</script>

</head>

<body class="flex w-full">
    <x-side-bar/>
    <div class="w-full h-screen overflow-y-auto  ">
        <div class="text-right bg-gray-800 text-gray-100 p-4">
            <span class="text-sm">Welcome, {{ Auth::user()->name }}</span>
            <i class="fa-sharp fa-light fa-user inline-block rounded-full ml-2" alt="Profile picture"></i>

        </div>
        <div class="p-10 ">
            <div class="flex-1 p-6 ">
                <h1 class="text-3xl font-semibold">The Team</h1>
                <div class="flex justify-between items-center my-6">
                    <div class=" text-xl font-bold">
                        All ({{ $teams->count() }})
                    </div>
                    <a href="{{ route('team.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add New</a>
                    <div>
                        <input type="text" placeholder="Search Team" class="border p-2 ml-4 rounded-lg" />
                        <button class="bg-blue-500 text-white px-4 py-2 ml-2 rounded-lg">Search Pages</button>
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
                       {{--  <input type="checkbox" class="mr-2"> --}}
                        <span class="font-bold">Name</span>
                    </div>
                    <div class="w-1/6"><span class="font-bold">Role</span></div>
                    <div class="w-1/6"><span class="font-bold">Date</span></div>
                </div>

                @if($teams->isEmpty())
                <div class="border-t item flex flex-col bg-white p-4 hover:bg-gray-200">
                    <div class="flex justify-between items-center mt-2">
                        <div class="w-full flex items-center">
                            <span class="font-bold">No Team Member available.</span>
                        </div>
                    </div>
                </div>
            @else
                @foreach ($teams as $team)
                    <div class=" border-t item flex flex-col bg-white p-4 hover:bg-gray-200">

                        <div class=" flex justify-between items-center mt-2 ">
                            <div class="flex w-1/2  items-center mt-2 space-x-4">
                                <div class="flex space-x-2"> 
                                 {{--    <input type="checkbox" class="mr-2"> --}}
                                @if ($team->image)
                                    <div class="">
                                        <img src="{{ asset('storage/' . $team->image) }}" alt="Current Image" class="w-20 h-20 mr-4">
                                    </div>
                                @endif
                                </div>
                                <div class=" flex flex-col ">
                                    <span class="font-bold">{{ $team->name }}</span>
                                    <div class="actions">
                                        <div class="w-full flex mt-2">
                                            <a href="{{ route('team.edit', $team->id) }}"
                                                class="bg-blue-600 text-white px-4 py-2 rounded mr-2 hover:bg-blue-500">Edit</a>
                                                <form action="{{ route('team.destroy', $team->id) }}" method="POST" class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded" onsubmit="confirmDelete(event)">Delete</button>
                                                </form>
                                        </div>
            
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/6">{{ $team->role }}</div>
                            <div class="w-1/6">
                                Published: <br>{{ $team->created_at->format('jS M, Y') }}
                            </div>
                      
                        </div>
                       
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</body>

</html>
