{{-- METODE PEMBAYARAN --}}
<div class="space-y-6 bg-white p-6 rounded-xl shadow-sm border">
    <h2 class="text-xl font-semibold">Metode Pembayaran</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

        {{-- Transfer Bank --}}
        <label class="border rounded-xl p-4 flex items-center gap-3 cursor-pointer hover:bg-gray-50">
            <input type="radio" name="payment_method" value="bank_transfer" class="h-5 w-5" required>
            <span class="font-medium">Transfer Bank</span>
        </label>

        {{-- E-Wallet --}}
        <label class="border rounded-xl p-4 flex items-center gap-3 cursor-pointer hover:bg-gray-50">
            <input type="radio" name="payment_method" value="ewallet" class="h-5 w-5">
            <span class="font-medium">E-Wallet</span>
        </label>

        {{-- Bayar di Tempat --}}
        <label class="border rounded-xl p-4 flex items-center gap-3 cursor-pointer hover:bg-gray-50">
            <input type="radio" name="payment_method" value="cod" class="h-5 w-5">
            <span class="font-medium">Bayar di Tempat</span>
        </label>

    </div>

    <div class="bg-blue-50 border border-blue-200 p-4 rounded-lg text-sm">
        <p class="font-medium text-blue-900">Catatan:</p>
        <ul class="list-disc ml-5 text-blue-800">
            <li>Jika memilih Transfer/E-Wallet, detail pembayaran akan muncul setelah pesanan dibuat.</li>
            <li>Harap pastikan nomor WhatsApp aktif untuk konfirmasi pesanan.</li>
        </ul>
    </div>
</div>
