<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Nisa</title>
    <link rel="icon" type="img/png" href="{{asset('images/toko-nisa-logo-icon.png')}}">

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F9FAFB]">
    <!-- NAVBAR -->
    <header class="fixed top-0 left-0 w-full bg-white/10 backdrop-blur">
        <nav class="container mx-auto flex justify-between items-center py-5 px-4">

            <!-- Logo -->
            <a href="#" class=""><img src="{{ asset('images/toko-nisa-logo-text-horizontal.svg') }}" alt="Logo Toko Nisa" class="h-6"></a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-10">
                <a href="#" class="text-gray-900 hover:text-blue-600">Tentang</a>
                <a href="#" class="text-gray-900 hover:text-blue-600">Layanan</a>
                <a href="#" class="text-gray-900 hover:text-blue-600">Alat Tulis</a>
            </div>

            <!-- Icon Bagian Kanan -->
            <div class="flex items-center space-x-4">

                <!-- Search -->
                <button class="hover:text-blue-600">
                    <img src="{{ asset('icon/search-icon.svg') }}" alt="Search" class="w-6 h-6">
                </button>

                <!-- Cart -->
                <a href="#" class="">
                    <img src="{{ asset('icon/cart-icon.svg') }}" alt="Cart" class="w-6 h-6">
                </a>

                <!-- Hamburger Menu (mobile) -->
                <button id="menu-btn" class="md:hidden">
                    <img src="{{ asset('icon/hamburger-menu-icon.svg') }}" alt="Menu" class="w-6 h-6">
                </button>

            </div>

        </nav>
    </header>

<!-- Hero Section -->
<section class="bg-gradient-to-b from-blue-200 to-[#F9FAFB] pt-28 pb-20 px-8">
    <div class="container mx-auto flex flex-col md:flex-row items-center px-3 md:px-12">
        <div class="w-90 text-center md:text-left mb-10 md:mb-0">
            <h1 class="text-4xl font-semibold text-gray-900 mb-4">
                <span class="text-blue-600">Solusi Cepat</span> Percetakan, Pengetikan, dan Belanja Alat Tulis
            </h1>
            <p class="md:w-120 text-base md:text-lg text-gray-700 mb-6">
                Cetak dokumen, scan, beli alat tulis, hingga materai. Semua cepat, mudah, dan terpercaya
            </p>
            <a href="#" class="inline-block bg-blue-600 text-white font-semibold text-base md:text-xl py-2 px-4 md:py-3 md:px-6 rounded-sm hover:bg-blue-700 transition duration-300">
                Pesan Sekarang
            </a>
        </div>

        <div class="w-full">
            <img src="{{ asset('images/printer-hero-img.svg') }}" alt="Hero Image" class="w-auto h-auto">
        </div>
    </div>
</section>

<!-- Tentang -->
<section class="py-24 px-6">
    <div class="container mx-auto flex flex-col-reverse md:flex-row items-center">
        <div class="w-full">
            <img src="{{ asset('images/toko-nisa.svg') }}" alt="Toko Nisa 2025" class="w-auto h-auto">
        </div>

        <div class="w-100 text-center md:text-left mb-8 px-8">
            <h2 class="w-full text-left text-2xl font-semibold text-gray-900 mb-4">
                <span class="text-blue-600">Lebih dari 20 Tahun</span> Menjadi Pilihan Utama Pelanggan
            </h2>
            <p class="w-full text-left text-base md:text-lg text-gray-700 mb-6">
                Berdiri sejak tahun 2000 dengan nama awal Toko Perisai Computer yang melayani rental dan pengetikan skripsi bagi mahasiswa. Kini, Toko Nisa berkembang menjadi usaha jasa percetakan, pengetikan, serta menjual ATK dan materai. Dengan pengalaman lebih dari 20 tahun, 
                Toko Nisa terus menjadi pilihan terpercaya bagi mahasiswa hingga masyarakat umum.
            </p>
        </div>
    </div>
</section>


<!-- Layanan -->
<section class="py-16 px-4">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="font-semibold text-2xl md:text-4xl text-center mb-8">Layanan Kami</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Card Layanan -->
      <div class="bg-white rounded-md border-1 border-gray-300">
        <img src="{{ asset('images/percetakan.jpg') }}" alt="Cetak Dokumen" class="rounded-t-md">
        <div class="p-3">
            <h3 class="text-xl md:text-2xl font-semibold">Cetak Dokumen</h3>
            <p class="text-gray-600 text-sm md:text-base mb-3">
              Cetak dokumen dalam ukuran A4, F4, HVS, pilihan warna hitam/putih
            </p>
            <div class="flex items-center text-yellow-500 text-xs md:text-base mb-2">
              ★★★★★ <span class="text-gray-600 ml-1">4.9 (55 ulasan)</span>
            </div>
            <p class="text-sm text-gray-600">Mulai dari</p>
            <p class="text-lg md:text-2xl font-semibold text-blue-600">Rp500 <span class="text-sm text-gray-600 font-normal">/ lembar</span></p>
        </div>
    </div>

    <div class="bg-white rounded-md border-1 border-gray-300">
        <img src="{{ asset('images/percetakan.jpg') }}" alt="Pengetikan" class="rounded-t-md">
        <div class="p-3">
            <h3 class="text-xl font-semibold">Pengetikan</h3>
            <p class="text-gray-600 text-sm mb-3">
              Pengetikan cepat dan rapi untuk surat, laporan, dan dokumen lainnya
            </p>
            <div class="flex items-center text-yellow-500 text-xs md:text-base mb-2">
              ★★★★★ <span class="text-gray-600 ml-1">4.9 (55 ulasan)</span>
            </div>
            <p class="text-sm text-gray-600">Mulai dari</p>
            <p class="text-lg font-semibold text-blue-600">Rp2000 <span class="text-sm text-gray-600 font-normal">/ halaman</span></p>
        </div>
    </div>

    <div class="bg-white rounded-md border-1 border-gray-300">
        <img src="{{ asset('images/percetakan.jpg') }}" alt="Cetak Foto" class="rounded-t-md">
        <div class="p-3">
            <h3 class="text-xl font-semibold">Cetak Foto</h3>
            <p class="text-gray-600 text-sm mb-3">
              Cetak foto mulai dari ukuran 3x4, 4x6, hingga 10R
            </p>
            <div class="flex items-center text-yellow-500 text-xs md:text-base mb-2">
              ★★★★★ <span class="text-gray-600 ml-1">4.9 (55 ulasan)</span>
            </div>
            <p class="text-sm text-gray-600">Mulai dari</p>
            <p class="text-lg font-semibold text-blue-600">Rp12000 <span class="text-sm text-gray-600 font-normal">/ cetak</span></p>
        </div>
    </div>

    </div>
        <div class="text-center mt-8">
        <a href="/layanan" class="inline-block bg-blue-600 text-white font-semibold text-base md:text-xl py-2 px-4 md:py-3 md:px-6 rounded-sm hover:bg-blue-700 transition duration-300">
            Lihat Selengkapnya
        </a>
        </div>
    </div>
</section>


<!-- Produk ATK -->
<section class="py-16 px-4">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="font-semibold text-2xl md:text-4xl text-center mb-8">Alat Tulis Kantor</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
    <!-- Card Produk ATK -->
    <div class="bg-white rounded-md border-1 border-gray-300 w-38">
        <img src="{{ asset('images/nota-kontan-1ply.jpg') }}" alt="Cetak Dokumen" class="rounded-t-md">
        <div class="p-2">
            <h3 class="text-sm md:text-xl">Nota Kontan 1 Ply 50 Lembar | Gelatik Kembar</h3>
            <p class="text-lg md:text-xl font-medium text-blue-600">Rp4000</p>
            <div class="flex items-center text-yellow-500 text-xs md:text-base mb-2">
              ★ <span class="text-gray-600 ml-1">4.3 • 70 terjual</span>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-md border-1 border-gray-300 w-38">
        <img src="{{ asset('images/nota-kontan-1ply.jpg') }}" alt="Cetak Dokumen" class="rounded-t-md">
        <div class="p-2">
            <h3 class="text-sm md:text-xl">Nota Kontan 1 Ply 50 Lembar | Gelatik Kembar</h3>
            <p class="text-lg md:text-xl font-medium text-blue-600">Rp4000</p>
            <div class="flex items-center text-yellow-500 text-xs md:text-base mb-2">
              ★ <span class="text-gray-600 ml-1">4.3 • 70 terjual</span>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-md border-1 border-gray-300 w-38">
        <img src="{{ asset('images/nota-kontan-1ply.jpg') }}" alt="Cetak Dokumen" class="rounded-t-md">
        <div class="p-2">
            <h3 class="text-sm md:text-xl">Nota Kontan 1 Ply 50 Lembar | Gelatik Kembar</h3>
            <p class="text-lg md:text-xl font-medium text-blue-600">Rp4000</p>
            <div class="flex items-center text-yellow-500 text-xs md:text-base mb-2">
              ★ <span class="text-gray-600 ml-1">4.3 • 70 terjual</span>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-md border-1 border-gray-300 w-38">
        <img src="{{ asset('images/nota-kontan-1ply.jpg') }}" alt="Cetak Dokumen" class="rounded-t-md">
        <div class="p-2">
            <h3 class="text-sm md:text-xl">Nota Kontan 1 Ply 50 Lembar | Gelatik Kembar</h3>
            <p class="text-lg md:text-xl font-medium text-blue-600">Rp4000</p>
            <div class="flex items-center text-yellow-500 text-xs md:text-base mb-2">
              ★ <span class="text-gray-600 ml-1">4.3 • 70 terjual</span>
            </div>
        </div>
    </div>

    </div>

    </div>
        <div class="text-center mt-8">
        <a href="/layanan" class="inline-block bg-blue-600 text-white font-semibold text-base md:text-xl py-2 px-4 md:py-3 md:px-6 rounded-sm hover:bg-blue-700 transition duration-300">
            Lihat Selengkapnya
        </a>
        </div>
    </div>

</section>


<!-- Kontak -->
<section class="py-16 px-4 md:py-32 md:px-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="font-semibold text-2xl md:text-4xl text-center mb-8">Kontak</h2>
        <div class="">
            <div class="grid-row">
                <!-- Alamat -->
                <div class="flex gap-6 mb-4">
                    <img src="{{ asset('icon/map-icon.svg') }}" alt="Map Icon">
                    <p class="text-md font-semibold">Alamat
                        <br><span class="text-md text-gray-500 font-normal">Jl. Raya Kaligawe No. 35 Tambakrejo, Gayamsari, Kota Semarang, Jawa Tengah, Indonesia</span>
                    </p>
                </div>
                
                <!-- Nomor Telepon -->
                <div class="flex gap-6 mb-4">
                    <img src="{{ asset('icon/phone-icon.svg') }}" alt="Telephone Icon">
                    <p class="text-md font-semibold">Nomor Telepon
                        <br><span class="text-md text-gray-500 font-normal">+62 813-2576-8119</span>
                    </p>
                </div>

                <!-- Email -->
                <div class="flex gap-6 mb-4">
                    <img src="{{ asset('icon/mail-icon.svg') }}" alt="Email Icon">
                    <p class="text-md font-semibold">Email
                        <br><span class="text-md text-gray-500 font-normal">perisai.computer@gmail.com</span>
                    </p>
                </div>

                <!-- Jam Operasional -->
                <div class="flex gap-6 mb-4">
                    <img src="{{ asset('icon/clock-icon.svg') }}" alt="Clock Icon">
                    <p class="text-md font-semibold">Jam Operasional
                        <br><span class="text-md text-gray-500 font-normal">Senin-Sabtu, 07.30-15.30 WIB</span>
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>


<footer class="bg-blue-700 items-center py-2">
    <p class="text-white text-center text-sm">©2025 Toko Nisa. All Right Reserved.</p>
</footer>

</body>
</html>