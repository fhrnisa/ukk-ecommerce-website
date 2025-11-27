<div id="search-overlay" class="hidden fixed inset-0 bg-black/10 backdrop-blur-sm justify-center items-start z-50">
    <div class="bg-white w-full md:w-1/2 p-4 flex items-center">
        <button id="close-search" class="mr-2"><img src="{{ asset('icon/arrow-icon.svg') }}" alt="Arrow Left"></button>
            <form action="{{ route('products.search') }}" method="GET" class="flex items-center w-full p-2 border-1 border-gray-400 rounded-md">
                <input type="text" placeholder="Cari produk atau layanan..." class="flex-1 border-none outline-none text-base">
            </form>
    </div>
</div>