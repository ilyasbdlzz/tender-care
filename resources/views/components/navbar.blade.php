@use(App\Models\User)
<header class="bg-[#E8DCFF] shadow-md">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="{{ asset('admin/dist/img/logo2.png') }}" alt="Logo" class="w-16 h-16 mr-2">
            <span class="text-2xl font-semibold text-[#A375FF]">
                Tender <span class="text-[#8C52FF]">Care</span>
            </span>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menuButton" class="lg:hidden flex items-center text-purple-600 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Navigation Links -->
        <nav id="navLinks" class="hidden lg:flex space-x-8">
            @if (Route::has('login'))
                @auth
                    <ul class="flex space-x-8 items-center">
                        <li><a href="{{ asset('/') }}" class="text-gray-800 hover:text-purple-600 font-medium">Home</a></li>
                        <li><a href="{{ asset('/healthrecord') }}" class="text-gray-800 hover:text-purple-600 font-medium">Health Record</a></li>
                        <li><a href="{{ asset('/growthrecord') }}" class="text-gray-800 hover:text-purple-600 font-medium">Growth Record</a></li>
                        <li><a href="{{ asset('/growthhistory') }}" class="text-gray-800 hover:text-purple-600 font-medium">History Record</a></li>
                        <li><a href="{{ asset('/article') }}" class="text-gray-800 hover:text-purple-600 font-medium">Article</a></li>
                        <li><a href="{{ asset('/appointment') }}" class="text-gray-800 hover:text-purple-600 font-medium mr-20">Counseling</a></li>

                        <!-- Dropdown -->
                        <li class="relative">
                            <button id="navbarDropdown" class="flex items-center text-purple-800 font-medium focus:outline-none">
                                <img src="{{('../admin/dist/img/user(1).png')}}" alt="User" class="w-4 h-4 mr-1">
                                {{ Auth::user()->name }}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                                <a href="{{ route('logout') }}" 
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                   class="block px-4 py-2 text-red-600 hover:bg-gray-100">
                                    <img src="{{('../admin/dist/img/logout.png')}}" alt="Logout" class="w-4 h-4 mr-2 inline">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        
                    </ul>
                @else
                    <a href="{{ route('login') }}" class="text-gray-800 hover:text-purple-600 font-medium">Log In</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-gray-800 hover:text-purple-600 font-medium">Register</a>
                    @endif
                @endauth
            @endif
        </nav>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobileMenu" class="lg:hidden hidden flex-col mt-4 px-6 space-y-4">
        @if (Route::has('login'))
            @auth
                <ul class="space-y-4">
                    <li><a href="{{ asset('/') }}" class="text-gray-800 hover:text-purple-600 font-medium">Home</a></li>
                    <li><a href="{{ asset('/healthrecord') }}" class="text-gray-800 hover:text-purple-600 font-medium">Health Record</a></li>
                    <li><a href="{{ asset('/growthrecord') }}" class="text-gray-800 hover:text-purple-600 font-medium">Growth Record</a></li>
                    <li><a href="{{ asset('/growthhistory') }}" class="text-gray-800 hover:text-purple-600 font-medium">History Record</a></li>
                    <li><a href="{{ asset('/article') }}" class="text-gray-800 hover:text-purple-600 font-medium">Article</a></li>
                    <li><a href="{{ asset('/appointment') }}" class="text-gray-800 hover:text-purple-600 font-medium">Counseling</a></li>
                </ul>
            @else
                <a href="{{ route('login') }}" class="text-gray-800 hover:text-purple-600 font-medium block">Log In</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-gray-800 hover:text-purple-600 font-medium block">Register</a>
                @endif
            @endauth
        @endif
    </div>
</header>

<!-- JavaScript -->
<script>
    // Toggle mobile menu
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Toggle dropdown menu
    const navbarDropdown = document.getElementById('navbarDropdown');
    const dropdownMenu = document.getElementById('dropdownMenu');

    navbarDropdown.addEventListener('click', (event) => {
        event.preventDefault();
        dropdownMenu.classList.toggle('hidden');
    });

    // Close dropdown if clicked outside
    document.addEventListener('click', (event) => {
        if (!navbarDropdown.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
</script>
