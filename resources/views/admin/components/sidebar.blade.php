<aside class="w-64 bg-white h-screen shadow-md p-5 fixed">

    <a href="{{ route('welcome') }}">
        <img src="{{ asset('images/toko-nisa-logo-text-horizontal.svg') }}" 
             alt="Logo Toko Nisa" 
             class="h-8">
    </a>

    <nav class="space-y-2 text-gray-700 mt-8">

        <!-- DASHBOARD -->
        <a href="{{ route('admin.dashboard') }}"
           class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50 
           {{ request()->is('admin/dashboard') ? 'bg-blue-100 font-semibold' : '' }}">
            Beranda
        </a>

        <!-- USER & TRANSAKSI -->
        <p class="text-xs uppercase text-gray-400 mt-4">Transaksi & User</p>

        <a href=""
           class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
            Pelanggan
        </a>

        <a href="{{ route('admin.transactions.index') }}"
           class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
            Transaksi
        </a>

        <!-- PRODUK -->
        <p class="text-xs uppercase text-gray-400 mt-4">Produk</p>

        <a href="{{ route('admin.orders.index') }}"
           class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
            Pesanan Produk
        </a>

        <a href="{{ route('admin.products.index') }}"
           class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
            Daftar Produk
        </a>

        <!-- JASA -->
        <p class="text-xs uppercase text-gray-400 mt-4">Layanan Jasa</p>

        <a href=""
           class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
            Pesanan Jasa
        </a>

        <!-- ADMIN -->
        <p class="text-xs uppercase text-gray-400 mt-4">Admin</p>

        <a href=""
           class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
            Pengaturan
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="w-full text-left flex items-center gap-3 p-3 rounded-lg hover:bg-red-50 text-red-600">
                Logout
            </button>
        </form>

    </nav>
</aside>
