<div class="max-w-4xl mx-auto bg-white shadow rounded-lg p-8">
    <h2 class="text-2xl font-semibold mb-6">Edit Profil</h2>

    <!-- FOTO PROFIL + BUTTON -->
    <div class="flex items-center gap-6 mb-8">
        <!-- Foto + Icon Kamera -->
        <div class="relative w-28 h-28">
            <!-- Foto profil -->
            <div class="w-full h-full bg-gray-300 rounded-full"></div>

            <!-- Tombol kamera -->
            <button 
                class="absolute bottom-0 right-0 w-9 h-9 bg-blue-600 rounded-full flex justify-center items-center shadow">
                <img src="{{ 'icon/camera-icon.svg' }}" alt="camera" class="w-4 h-4">
            </button>
        </div>

        <!-- Tombol upload dan hapus -->
        <div class="flex items-center gap-3 ml-5">
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Unggah foto baru</button>
            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300">Hapus foto</button>
        </div>
    </div>

    <!-- FORM -->
    <form action="#" method="POST" class="space-y-6">
        <!-- Nama -->
        <div>
            <label class="block mb-1 font-medium">Nama Pengguna</label>
            <input 
                type="text" 
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
        </div>

        <!-- Email & Nomor Telepon -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block mb-1 font-medium">Email</label>
                <input 
                    type="email" 
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <div>
                <label class="block mb-1 font-medium">Nomor Telepon</label>
                <input 
                    type="text" 
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>
        </div>

        <!-- Tombol Submit -->
        <button 
            class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">
            Simpan Perubahan
        </button>
    </form>
</div>
