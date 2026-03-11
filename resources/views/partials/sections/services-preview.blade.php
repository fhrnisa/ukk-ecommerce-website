<section id="services" class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="font-semibold text-2xl md:text-4xl text-center mb-8">Layanan Kami</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($services as $service)
            <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-blue-500">
                <h3 class="text-xl font-semibold mb-2">{{ $service->name }}</h3>
                <p class="text-gray-600 mb-4">{{ $service->description }}</p>
                <div class="text-blue-600 font-bold text-lg">
                    Rp {{ number_format($service->price, 0, ',', '.') }}
                </div>
                <a href="#" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Pesan Jasa
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>