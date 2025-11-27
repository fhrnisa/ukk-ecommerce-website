<section class="w-full py-20 px-8 md:px-32">
    <div class="max-w-6xl mx-auto">
        <h2 class="font-semibold text-2xl md:text-4xl text-center mb-8 md:mb-12">Alat Tulis Kantor</h2>
        
    <!-- Grid Card -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-6">
        @foreach ($products as $product)
            <x-card-product
                :product="$product"
                :image="'storage/' . $product->image"
                :name="$product->name"
                :price="$product->price"
                :rating="4.7"      {{-- sementara hardcode jika belum ada rating --}}
                :terjual="21"      {{-- sementara hardcode jika belum ada data terjual --}}
            />
        @endforeach
    </div>
    </div>
        <div class="text-center mt-8">
        <a href="{{route('products.index') }}" class="inline-block bg-blue-600 text-white font-semibold text-base md:text-xl py-2 px-4 md:py-3 md:px-6 rounded-sm hover:bg-blue-700 transition duration-300">
            Lihat Selengkapnya
        </a>
        </div>
    </div>
</section>