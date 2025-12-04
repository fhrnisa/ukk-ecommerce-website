<nav class="fixed top-0 left-0 w-full mx-auto flex justify-between items-center py-5 px-6 md:px-20 bg-blue-100/60 backdrop-blur z-50">

    <!-- Logo di mode desktop -->
    <a href="{{ route('welcome') }}" class="hidden md:flex"><img src="{{ asset('images/toko-nisa-logo-text-horizontal.svg') }}" alt="Logo Toko Nisa" class="h-6"></a>

    <!-- Tombol kembali mode mobile -->
    <div class="flex gap-4 md:hidden items-center">
        <a href="{{ route('welcome') }}"><img src="{{ asset('icon/arrow-icon.svg') }}" alt="Back"></a>
        <span class="text-gray-900 text-xl font-semibold">Layanan</span>
    </div>

    <!-- Desktop Menu -->
    <div class="hidden md:flex items-center space-x-10 text-base">
        <a href="#tentang" class="text-gray-900 hover:text-blue-600">Tentang</a>
        <a href="{{route('services.index')}}" class="text-gray-900 hover:text-blue-600">Layanan</a>
        <a href="{{ route('products.index') }}" class="text-gray-900 hover:text-blue-600">Alat Tulis</a>
    </div>

    <!-- Bagian Kanan -->
    <div class="flex items-center gap-4">

        <!-- Search di Desktop (langsung input bar) -->
        <div class="hidden md:flex border-1 border-gray-500 rounded-md px-3 py-2 items-center bg-[#F9FAFB]">
            <form action="{{ route('search') }}" method="GET" class="flex items-center w-full">
                <input type="text" name="q" placeholder="Cari produk atau layanan..." class="outline-none text-sm bg-transparent flex-1">
                <button type="submit" class="ml-2 text-gray-600">
                    <img src="{{ asset('icon/search-icon.svg') }}" alt="Search" class="w-6 h-6 opacity-70">
                </button>
            </form>
        </div>

        <!-- Search -->
        <button id="search-btn" class="hidden">
            <img src="{{ asset('icon/search-icon.svg') }}" alt="Search" class="w-6 h-6">
        </button>

        <!-- Keranjang -->
        <a href="#" class="">
            <img src="{{ asset('icon/cart-icon.svg') }}" alt="Cart" class="w-6 h-6">
        </a>

        <!-- Pembagi -->
        <div class="hidden md:flex w-0.5 h-5 bg-gray-400/60"></div>

        @auth
            <!-- Jika user sudah login -->
             <span>
                <a href="{{ route('profile.index') }}">
                    <img src="{{ 'icon/user-icon.svg' }}" alt="User" class="w-6 h-6">
                </a>
             </span>

        @else 
        <!-- Tombol Masuk & Daftar -->
            <div class="hidden md:flex gap-2">
            <a href="{{ route('login') }}" class="inline-block bg-blue-50 text-blue-600 border-2 border-blue-600 text-base font-semibold md:py-1.5 md:px-4 rounded-sm hover:bg-blue-100 transition duration-300">
                Masuk
            </a>
            <a href="{{ route('signup') }}" class="inline-block bg-blue-600 text-white text-base font-semibold md:py-1.5 md:px-4 rounded-sm hover:bg-blue-700 transition duration-300">
                Daftar
            </a>
            </div>
        @endauth

        <!-- Hamburger Menu (mobile) -->
        <button id="menu-btn" class="md:hidden"
                data-icon-open="{{ asset('icon/close-icon.svg') }}" 
                data-icon-close="{{ asset('icon/hamburger-menu-icon.svg') }}">
            <img id="menu-icon" src="{{ asset('icon/hamburger-menu-icon.svg') }}" alt="Menu" class="w-6 h-6">
        </button>

        <div id="mobile-menu" class="hidden fixed top-16 left-0 w-full">
            <div class="flex flex-col items-center text-base bg-blue-100/90 backdrop-blur-lg z-50 gap-1 space-y-4 p-6 text-gray-800 md:hidden transition-all duration-300">
                <a href="#tentang" class="hover:underline text-base">Tentang</a>
                <a href="{{ route('services.index') }}" class="hover:underline text-base">Layanan</a>
                <a href="{{ route('products.index') }}" class="hover:underline text-base">Alat Tulis</a>
                <a href="#" class="hover:underline text-base">Masuk</a>
                <a href="#" class="hover:underline text-base">Daftar</a>
            </div>
        </div>

    </div>
</nav>