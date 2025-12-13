{{-- DATA PELANGGAN --}}
<div class="space-y-6 bg-white p-6 rounded-xl shadow-sm border">
    <h2 class="text-xl font-semibold">Data Pelanggan</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Nama Lengkap --}}
        <div class="flex flex-col gap-2">
            <label class="font-medium">Nama Lengkap</label>
            <input type="text" name="customer_name"
                   class="border rounded-lg p-3 focus:ring focus:ring-blue-300"
                   placeholder="Masukkan nama Anda" required>
        </div>

        {{-- Nomor WhatsApp --}}
        <div class="flex flex-col gap-2">
            <label class="font-medium">Nomor WhatsApp</label>
            <input type="text" name="customer_phone"
                   class="border rounded-lg p-3 focus:ring focus:ring-blue-300"
                   placeholder="08xxxxxxxxxx" required>
        </div>

        {{-- Email --}}
        <div class="flex flex-col gap-2">
            <label class="font-medium">Email</label>
            <input type="email" name="customer_email"
                   class="border rounded-lg p-3 focus:ring focus:ring-blue-300"
                   placeholder="email@example.com" required>
        </div>

        {{-- Tanggal Pengambilan --}}
        <div class="flex flex-col gap-2">
            <label class="font-medium">Tanggal Pengambilan</label>
            <input type="date" name="pickup_date"
                   class="border rounded-lg p-3 focus:ring focus:ring-blue-300" required>
        </div>

    </div>

    {{-- Catatan --}}
    <div class="flex flex-col gap-2">
        <label class="font-medium">Catatan Tambahan</label>
        <textarea name="notes"
                  class="border rounded-lg p-3 focus:ring focus:ring-blue-300"
                  placeholder="Contoh: Mohon jilid tebal, urutkan halaman..."
                  rows="3"></textarea>
    </div>

</div>
