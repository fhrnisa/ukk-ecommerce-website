<form method="POST" action="{{ route('service.store') }}" enctype="multipart/form-data"
      class="max-w-4xl mx-auto space-y-10">
@csrf

<h1 class="text-2xl font-semibold text-center">Pesan Layanan</h1>

{{-- PILIH JENIS LAYANAN --}}
<div class="bg-white p-6 rounded-xl shadow">
  <label class="block mb-2 font-medium">Jenis Layanan</label>
  <select id="service_type" name="service_type"
          class="w-full border rounded-lg p-3">
      <option value="">Pilih Layanan</option>
      <option value="cetak_dokumen">Cetak Dokumen</option>
      <option value="cetak_foto">Cetak Foto</option>
      <option value="pengetikan">Pengetikan</option>
  </select>
</div>

{{-- ================= CETAK DOKUMEN ================= --}}
<div id="form-cetak-dokumen" class="hidden bg-white p-6 rounded-xl shadow space-y-4">
  <h2 class="font-semibold text-lg">Data Cetak Dokumen</h2>

  <div class="grid grid-cols-2 gap-4">
    <input name="copies" type="number" placeholder="Jumlah Copy"
           class="border rounded-lg p-2">

    <select name="paper_size" class="border rounded-lg p-2">
      <option value="">Ukuran Kertas</option>
      <option value="A4">A4</option>
      <option value="F4">F4</option>
    </select>

    <select name="color_type" class="border rounded-lg p-2">
      <option value="">Warna</option>
      <option value="warna">Warna</option>
      <option value="hitam_putih">Hitam Putih</option>
    </select>

    <select name="paper_type" class="border rounded-lg p-2">
      <option value="">Jenis Kertas</option>
      <option value="HVS">HVS</option>
      <option value="Art Paper">Art Paper</option>
    </select>
  </div>

  <select name="finishing" class="border rounded-lg p-2 w-full">
    <option value="">Finishing</option>
    <option value="jilid">Jilid</option>
    <option value="laminating">Laminating</option>
  </select>

  <input type="file" name="file"
         class="border rounded-lg p-2 w-full">

  <textarea name="notes" class="border rounded-lg p-2 w-full"
            placeholder="Catatan khusus"></textarea>
</div>

{{-- ================= CETAK FOTO ================= --}}
<div id="form-cetak-foto" class="hidden bg-white p-6 rounded-xl shadow space-y-4">
  <h2 class="font-semibold text-lg">Data Cetak Foto</h2>

  <div class="grid grid-cols-2 gap-4">
    <select name="photo_size" class="border rounded-lg p-2">
      <option value="">Ukuran Foto</option>
      <option value="2R">2R</option>
      <option value="3R">3R</option>
      <option value="4R">4R</option>
      <option value="10R">10R</option>
    </select>

    <input name="copies" type="number" placeholder="Jumlah Copy"
           class="border rounded-lg p-2">

    <select name="photo_paper" class="border rounded-lg p-2">
      <option value="">Jenis Kertas Foto</option>
      <option value="glossy">Glossy</option>
      <option value="doff">Doff</option>
    </select>
  </div>

  <input type="file" name="file"
         class="border rounded-lg p-2 w-full">

  <textarea name="notes" class="border rounded-lg p-2 w-full"
            placeholder="Catatan khusus"></textarea>
</div>

{{-- ================= PENGETIKAN ================= --}}
<div id="form-pengetikan" class="hidden bg-white p-6 rounded-xl shadow space-y-4">
  <h2 class="font-semibold text-lg">Data Pengetikan</h2>

  <div class="grid grid-cols-2 gap-4">
    <input name="page_estimation" type="number"
           placeholder="Estimasi Halaman"
           class="border rounded-lg p-2">

    <select name="paper_size" class="border rounded-lg p-2">
      <option value="">Ukuran Kertas</option>
      <option value="A4">A4</option>
      <option value="F4">F4</option>
    </select>
  </div>

  <input type="file" name="file"
         class="border rounded-lg p-2 w-full">

  <textarea name="notes" class="border rounded-lg p-2 w-full"
            placeholder="Format pengetikan (font, spasi, dll)"></textarea>
</div>

{{-- ================= DATA PELANGGAN ================= --}}
<div class="bg-white p-6 rounded-xl shadow space-y-4">
  <h2 class="font-semibold">Data Pelanggan</h2>

  <input name="customer_name" class="border rounded-lg p-2 w-full"
         placeholder="Nama Pemesan">

  <input name="customer_phone" class="border rounded-lg p-2 w-full"
         placeholder="Nomor HP">

  <div class="grid grid-cols-2 gap-4">
    <input type="date" name="pickup_date" class="border rounded-lg p-2">
    <input type="time" name="pickup_time" class="border rounded-lg p-2">
  </div>
</div>

{{-- ================= METODE PEMBAYARAN ================= --}}
<div class="bg-white p-6 rounded-xl shadow space-y-4">
  <h2 class="font-semibold">Metode Pembayaran</h2>

  <label class="flex items-center gap-2">
    <input type="radio" name="payment_method" value="cod">
    COD (Bayar di tempat)
  </label>

  <label class="flex items-center gap-2">
    <input type="radio" name="payment_method" value="transfer">
    Transfer
  </label>
</div>

<button class="w-full bg-blue-600 text-white py-3 rounded-lg">
  Pesan Sekarang
</button>

</form>

{{-- ================= TOGGLE FORM JS ================= --}}
<script>
const type = document.getElementById('service_type');
type.addEventListener('change', function () {
  document.querySelectorAll('[id^="form-"]').forEach(el => el.classList.add('hidden'));

  if (this.value === 'cetak_dokumen') {
    document.getElementById('form-cetak-dokumen').classList.remove('hidden');
  }
  if (this.value === 'cetak_foto') {
    document.getElementById('form-cetak-foto').classList.remove('hidden');
  }
  if (this.value === 'pengetikan') {
    document.getElementById('form-pengetikan').classList.remove('hidden');
  }
});
</script>
