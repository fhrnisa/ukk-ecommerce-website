<div class="bg-white p-6 rounded-xl shadow space-y-4">
    <h2 class="font-semibold text-lg">Data Cetak Dokumen</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <input type="number" name="copies" placeholder="Jumlah Copy"
            class="border rounded-lg p-3">

        <select name="paper_size" class="border rounded-lg p-3">
            <option value="">Ukuran Kertas</option>
            <option value="A4">A4</option>
            <option value="F4">F4</option>
        </select>

        <select name="color_type" class="border rounded-lg p-3">
            <option value="">Warna</option>
            <option value="warna">Warna</option>
            <option value="hitam_putih">Hitam Putih</option>
        </select>

        <select name="paper_type" class="border rounded-lg p-3">
            <option value="">Jenis Kertas</option>
            <option value="HVS">HVS</option>
            <option value="Art Paper">Art Paper</option>
        </select>
    </div>

    <select name="finishing" class="border rounded-lg p-3 w-full">
        <option value="">Finishing</option>
        <option value="jilid">Jilid</option>
        <option value="laminating">Laminating</option>
    </select>

    <div class="border border-dashed rounded-lg p-6 text-center">
        <input type="file" name="file" class="w-full">
        <p class="text-sm text-gray-500 mt-2">Maks. 200MB — PNG, JPG, DOCX, XLSX, CSV</p>
    </div>

    <textarea name="notes" placeholder="Catatan khusus"
        class="border rounded-lg p-3 w-full h-24"></textarea>
</div>
