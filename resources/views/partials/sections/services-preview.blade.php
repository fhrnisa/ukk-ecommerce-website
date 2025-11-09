<section class="py-16 px-8 md:px-32">
    <div class="max-w-6xl mx-auto">
        <h2 class="font-semibold text-2xl md:text-4xl text-center mb-8">Layanan Kami</h2>

    <!-- Grid Card -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <x-card-services 
            image="images/percetakan.jpg"
            title="Cetak Dokumen"
            desc="Cetak dokumen dalam ukuran A4, F4, HVS, pilihan warna hitam/putih"
            rating="4.9"
            reviews="55"
            price="500"
            unit="/ lembar"
        />

        <x-card-services
            image="images/percetakan.jpg"
            title="Pengetikan"
            desc="Pengetikan cepat dan rapi untuk surat, laporan, dan dokumen lainnya"
            rating="4.9"
            reviews="55"
            price="3000"
            unit="/ lembar"
        />

        <x-card-services
            image="images/percetakan.jpg"
            title="Cetak Foto"
            desc="Cetak foto mulai dari ukuran 3x4, 4x6, hingga 10R"
            rating="4.9"
            reviews="55"
            price="5000"
            unit="/ baris cetak"
        />

    </div>
        <div class="text-center mt-8">
        <a href="{{ route('services.index') }}" class="inline-block bg-blue-600 text-white font-semibold text-base md:text-xl py-2 px-4 md:py-3 md:px-6 rounded-sm hover:bg-blue-700 transition duration-300">
            Lihat Selengkapnya
        </a>
        </div>
    </div>
</section>