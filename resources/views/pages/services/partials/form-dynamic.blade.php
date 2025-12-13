{{-- FORM PILIH JENIS LAYANAN --}}
<div class="bg-white p-6 rounded-xl shadow space-y-4">
    <label class="font-medium">Jenis Layanan</label>

    <select id="service_type" name="service_type"
        class="w-full border rounded-lg p-3 focus:ring focus:ring-blue-200">
        <option value="">Pilih Layanan</option>
        <option value="cetak_dokumen">Cetak Dokumen</option>
        <option value="cetak_foto">Cetak Foto</option>
        <option value="pengetikan">Pengetikan</option>
    </select>
</div>

{{-- FORM-FORM KHUSUS --}}
<div id="form-cetak-dokumen" class="hidden">
    @include('pages.services.partials.forms.cetak-dokumen')
</div>

<div id="form-cetak-foto" class="hidden">
    @include('pages.services.partials.forms.cetak-foto')
</div>

<div id="form-pengetikan" class="hidden">
    @include('pages.services.partials.forms.pengetikan')
</div>
