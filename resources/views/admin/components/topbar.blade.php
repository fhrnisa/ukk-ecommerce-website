<header class="bg-white shadow-sm flex items-center justify-between px-8 py-4 ml-62">

    <!-- KIRI: Search -->
    <form action="{{ route('admin.search') }}" method="GET" class="relative w-96">
        <input 
            type="text" 
            name="q"
            value="{{ request('q') }}"
            placeholder="Cari data, pengguna, atau pesanan"
            class="w-full py-2 pl-10 pr-4 bg-gray-50 border border-gray-200 rounded-4xl 
                   focus:outline-none focus:border-blue-500">

        <svg 
            class="absolute left-3 top-1/2 transform -translate-y-1/2 
                   w-5 h-5 text-gray-400 pointer-events-none" 
            fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
        </svg>
    </form>

    <!-- KANAN: Notif & Profile -->
    <div class="flex items-center space-x-4">
        <button type="button" class="text-gray-600 hover:text-blue-500 relative">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" 
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 
                         0118 14.158V11a6.002 6.002 0 00-4-5.659V5
                         a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 
                         11v3.159c0 .538-.214 1.055-.595 
                         1.436L4 17h5m6 0v1a3 3 0 11-6 
                         0v-1m6 0H9"/>
            </svg>
        </button>

        <div class="w-8 h-8 rounded-full bg-gray-300"></div>
    </div>

</header>
