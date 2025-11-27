@props([
    'product',
    'image' => '',
    'name' => '',
    'price' => null,
    'rating' => 0,
    'terjual' => 0
])

<div class="bg-white rounded-md border border-gray-300 w-full hover:shadow-xl transition p-2">
    
    <!-- Image -->
    <a href="{{ route('products.show', $product->id) }}">
        <img src="{{ asset($image) }}" alt="{{ $name }}" class="rounded-t-md w-full h-40 md:h-60 object-cover">
    </a>

    <div class="p-2 md:p-3 flex flex-col gap-1">

        <h3 class="text-sm md:text-lg font-medium line-clamp-2">{{ $name }}</h3>

        @if ($price)
            <p class="text-base md:text-lg font-semibold text-blue-600">
                Rp {{ number_format($price, 0, ',', '.') }}
            </p>
        @endif

        @if ($rating > 0)
            <div class="flex items-center text-yellow-500 text-xs md:text-sm">
                ★ <span class="text-gray-600 ml-1">{{ $rating }} • {{ $terjual }} terjual</span>
            </div>
        @endif

        <!-- BUTTON -->
        <div class="mt-2 flex-row-2 md:flex gap-2 justify-center items-center">

            <!-- Detail -->
            <a href="{{ route('products.show', $product->id) }}"
               class="w-full sm:mb-2 text-center text-blue-600 px-3 py-1 border border-blue-600 rounded hover:bg-gray-100">
               Detail
            </a>

            <!-- Keranjang -->
            <form action="{{ route('cart.add', $product->id) }}" method="POST" class="flex-1">
                @csrf
                <button type="submit"
                    class="w-full px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Keranjang
                </button>
            </form>

        </div>

    </div>
</div>
