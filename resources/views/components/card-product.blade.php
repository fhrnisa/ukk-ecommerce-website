@props([
    'image' => '',
    'title' => '',
    'price' => null,
    'rating' => 0,
    'terjual' => 0
    ])

<div class="bg-white rounded-md border-1 border-gray-300 w-full hover:shadow-xl transition">
    {{-- Gambar --}}
    <img src="{{ asset($image) }}" alt="{{$title}}" class="rounded-t-md"> 

    <div class="p-2 md:p-4">
        {{-- Judul --}}
        <h3 class="text-sm md:text-xl font-normal">{{ $title }}</h3> 

        {{-- Harga --}}
        @if($price)
            <p class="text-lg md:text-xl font-medium text-blue-600">Rp {{ number_format($price, 0, ',', '.') }}</p> 
        @endif

        {{-- Rating --}}
        @if ($rating > 0)
        <div class="flex items-center text-yellow-500 text-xs md:text-base mb-2">
             ★ <span class="text-gray-600 ml-1">
                <span>{{ $rating}}</span>
                •
                <span>{{ $terjual }} terjual</span>
             </span>
        </div>
        @endif
    </div>
</div>