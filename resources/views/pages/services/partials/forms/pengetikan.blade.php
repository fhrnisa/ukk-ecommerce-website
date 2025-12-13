<div class="bg-white p-6 rounded-xl shadow space-y-4">
    <h2 class="font-semibold text-lg">Data Pengetikan</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <input type="number" name="page_estimation" placeholder="Estimasi Halaman"
            class="border rounded-lg p-3">

        <select name="paper_size" class="border rounded-lg p-3">
            <option value="">Ukuran Kertas</option>
            <option value="A4">A4</option>
            <option value="F4">F4</option>
        </select>
    </div>

    <div class="border border-dashed rounded-lg p-6 text-center">
        <input type="file" name="file" class="w-full">
        <p class="text-sm text-gray-500 mt-2">Upload file referensi (opsional)</p>
    </div>

    <textarea name="notes" placeholder="Format pengetikan (font, spasi, dll)"
        class="border rounded-lg p-3 w-full h-24"></textarea>
</div>
