@props([
    'image' => '',        // gambar layanan
    'title' => '',        // judul layanan
    'desc' => '',         // deskripsi
    'rating' => 0,  // default rating
    'reviews' => 0, // jumlah ulasan
    'price' => null,// harga utama
    'unit' => ''    // satuan harga
])

<div class="bg-white rounded-md border border-gray-300 hover:shadow-lg transition">
    {{-- Gambar --}}
    <img src="{{ asset($image) }}" alt="{{ $title }}" class="rounded-t-md w-full object-cover">

    <div class="p-3">
        {{-- Judul --}}
        <h3 class="text-xl md:text-2xl font-semibold">{{ $title }}</h3>

        {{-- Deskripsi --}}
        <p class="text-gray-600 text-sm md:text-base mb-3">{{ $desc }}</p>

        {{-- Rating --}}
        @if($rating > 0)
            <div class="flex items-center text-yellow-500 text-xs md:text-base mb-2">
                {{ str_repeat('★', floor($rating)) }}{{ str_repeat('☆', 5 - floor($rating)) }}
                <span class="text-gray-600 ml-1">{{ number_format($rating, 1) }} ({{ $reviews }} ulasan)</span>
            </div>
        @endif

        {{-- Harga --}}
        @if($price)
            <p class="text-sm text-gray-600">Mulai dari</p>
            <p class="text-lg md:text-2xl font-semibold text-blue-600">
                Rp{{ number_format($price, 0, ',', '.') }}
                <span class="text-sm text-gray-600 font-normal">{{ $unit }}</span>
            </p>
        @endif
    </div>
</div>
