<section id="products" class="py-12">
    <div class="container mx-auto px-4">
        <h2 class="font-semibold text-2xl md:text-4xl text-center mb-8 md:mb-12">Alat Tulis Kantor</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
                <img src="{{ asset('images/products/' . $product->image ) }}" class="w-full h-40 object-cover">
                <div class="p-4">
                    <span class="text-xs text-gray-500 uppercase">{{ $product->product_code }}</span>
                    <h3 class="font-bold text-lg leading-tight">{{ $product->name }}</h3>
                    <p class="text-red-500 font-semibold mt-2">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    <p class="text-sm text-gray-500">Stok: {{ $product->stock }}</p>
                </div>
            </div>
            @endforeach
        </div>
        
         <a href="{{route('products.index') }}" class="inline-block bg-blue-600 text-white font-semibold text-base md:text-xl py-2 px-4 md:py-3 md:px-6 rounded-sm hover:bg-blue-700 transition duration-300">
            Lihat Selengkapnya
        </a>
    </div>
</section>