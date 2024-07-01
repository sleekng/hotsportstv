    <div class="w-1/8 h-screen bg-gray-800 text-gray-100">
        <div class="p-4 whitespace-nowrap font-bold"> <i class="fa-solid fa-house-chimney"></i> HSM Admin Panel</div>
        <nav class="text-sm">
            <a href="/dashboard" class="block py-2.5 px-4 hover:bg-gray-700">
                <i class="fa-sharp fa-solid fa-gauge mr-2"></i> Dashboard
            </a>
            <a href="/blog-list" class="block py-2.5 px-4 hover:bg-gray-700">
                <i class="fas fa-pen mr-2"></i> Posts
            </a>
            <a href="/categories" class="block py-2.5 px-4 hover:bg-gray-700">
                <i class="fas fa-pen mr-2"></i>Blog Categories
            </a>
            <a href="/projects" class="block py-2.5 px-4 hover:bg-gray-700">
                <i class="fas fa-project-diagram mr-2"></i> HS Projects
            </a>
            <a href="/hprojects" class="block py-2.5 px-4 hover:bg-gray-700">
                <i class="fas fa-project-diagram mr-2"></i> Hotsports Projects
            </a>
            <a href="/team" class="block py-2.5 px-4 hover:bg-gray-700">
                <i class="fas fa-users mr-2 "></i> The Team
            </a>
            <a href="/media" class="block py-2.5 px-4 hover:bg-gray-700">
                <i class="fas fa-photo-video mr-2"></i> Media
            </a>
            <a href="/testimonials" class="block py-2.5 px-4 hover:bg-gray-700">
                <i class="fa-solid fa-people-line mr-2"></i> Testimonials
            </a>
            <a href="{{ route('instagram-posts.index') }}" class="block py-2.5 px-4 hover:bg-gray-700">
                <i class="fa-solid fa-people-line mr-2"></i> Instagram Post
            </a>
            <a href="{{ route('companies.index') }}" class="block py-2.5 px-4 hover:bg-gray-700">
                <i class="fa-solid fa-people-line mr-2"></i> Companies (Hotssports)
            </a>
            <a href="{{ route('pcompanies.index') }}" class="block py-2.5 px-4 hover:bg-gray-700">
                <i class="fa-solid fa-people-line mr-2"></i> Companies (Primedia)
            </a>
        </nav>
        <div>
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
        </div>
    </div>