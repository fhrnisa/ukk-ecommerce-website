<aside class="w-64 bg-white h-screen shadow-md p-5 fixed">

        <a href="{{ route('welcome') }}" class=""><img src="{{ asset('images/toko-nisa-logo-text-horizontal.svg') }}" alt="Logo Toko Nisa" class="h-8"></a>

    <nav class="space-y-2 text-gray-700 mt-8">

        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50 {{ request()->is('admin/dashboard') ? 'bg-blue-100 font-semibold' : '' }}">
            <span>🏠</span> Beranda
        </a>

        <p class="text-xs uppercase text-gray-400 mt-4">Main Menu</p>

        <a class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">📦 Manajemen Pesanan</a>
        <a class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">👥 Pelanggan</a>
        <a class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">🗂 Kategori</a>
        <a class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">💳 Transaksi</a>

        <p class="text-xs uppercase text-gray-400 mt-4">Produk</p>

        <a href="{{ route('admin.products.index') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">📋 Daftar Produk</a>

        <p class="text-xs uppercase text-gray-400 mt-4">Admin</p>

        <a class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">⚙️ Pengaturan</a>

    </nav>
</aside>
