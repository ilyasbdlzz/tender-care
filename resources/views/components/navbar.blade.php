@use(App\Models\User)
<header class="bg-[#E8DCFF] shadow-md">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="{{('../admin/dist/img/logo2.png')}}" alt="Logo" class="w-16 h-16 mr-2">
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
                    <ul class="flex space-x-8">
                        <li><a href="{{ asset('/') }}" class="text-gray-800 hover:text-purple-600 font-medium">Home</a></li>
                        <li><a href="{{ asset('/healthrecord') }}" class="text-gray-800 hover:text-purple-600 font-medium">Health Record</a></li>
                        <li><a href="{{ asset('/growthrecord') }}" class="text-gray-800 hover:text-purple-600 font-medium">Growth Record</a></li>
                        <li><a href="{{ asset('/growthhistory') }}" class="text-gray-800 hover:text-purple-600 font-medium">History Record</a></li>
                        <li><a href="{{ asset('/article') }}" class="text-gray-800 hover:text-purple-600 font-medium">Article</a></li>
                        <li><a href="{{ asset('/appointment') }}" class="text-gray-800 hover:text-purple-600 font-medium mr-20">Counseling</a></li>

                        <div class="relative">
                            <div class="flex items-center">
                                <img src="{{('../admin/dist/img/user(1).png')}}" alt="User" class="w-4 h-4 mr-1">
                                <a id="dropdownButton" class="nav-link dropdown-toggle font-medium text-purple-800" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                            </div>
                        
                            <!-- Dropdown Menu -->
                            <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white rounded shadow-lg hidden z-50">
                                @auth
                                @if (Auth::user()->role == User::ROLE_MEDIC || Auth::user()->role == User::ROLE_ADMIN)
                                    <a href="{{ asset('/admin/index1') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-100">Dashboard</a>
                                @endif
                            @endauth
                            
                            <a class=" px-4 py-2 text-gray-700 hover:bg-purple-100 flex items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <img src="{{('../admin/dist/img/logout.png')}}" alt="Logout" class="w-4 h-4 mr-1">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
                    <li class="flex items-center">
                        <img src="{{('../admin/dist/img/user(1).png')}}" alt="User" class="w-4 h-4 mr-1">
                        <a id="navbarDropdown" class="text-purple-800 font-medium" href="#">{{ Auth::user()->name }}</a>
                    </li>
                    <li>
                        <a class="text-purple-600 flex items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <img src="{{('../admin/dist/img/logout.png')}}" alt="Logout" class="w-4 h-4 mr-1">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </li>
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

<!-- JavaScript for Mobile Toggle -->
<script>
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const navbarDropdown = document.getElementById('navbarDropdown');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    navbarDropdown?.addEventListener('click', (event) => {
        event.preventDefault();
        const dropdownMenu = navbarDropdown.nextElementSibling;
        dropdownMenu.classList.toggle('hidden');
    });

    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    // Close dropdown if clicked outside
    document.addEventListener('click', (event) => {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });

</script>
