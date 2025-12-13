<div class="bg-white p-6 rounded-xl shadow space-y-4">
    <h2 class="font-semibold text-lg">Data Cetak Foto</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <select name="photo_size" class="border rounded-lg p-3">
            <option value="">Ukuran Foto</option>
            <option value="2R">2R</option>
            <option value="3R">3R</option>
            <option value="4R">4R</option>
            <option value="10R">10R</option>
        </select>

        <input type="number" name="copies" placeholder="Jumlah Copy"
            class="border rounded-lg p-3">

        <select name="photo_paper" class="border rounded-lg p-3">
            <option value="">Jenis Kertas Foto</option>
            <option value="glossy">Glossy</option>
            <option value="doff">Doff</option>
        </select>
    </div>

    <div class="border border-dashed rounded-lg p-6 text-center">
        <input type="file" name="file" class="w-full">
        <p class="text-sm text-gray-500 mt-2">Maks. 200MB — PNG, JPG, JPEG</p>
    </div>

    <textarea name="notes" placeholder="Catatan khusus"
        class="border rounded-lg p-3 w-full h-24"></textarea>
</div>
