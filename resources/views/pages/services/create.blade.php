@extends('layouts.app')

@section('content') 
<div class="max-w-4xl mx-auto py-12 px-4">
    <h1 class="text-2xl font-semibold text-center mb-10">Pesan Percetakan</h1>

    <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data" class="space-y-10">
        @csrf

        {{-- FORM DINAMIS --}}
        @include('pages.services.partials.form-dynamic')

        {{-- DATA PELANGGAN --}}
        @include('pages.services.partials.customer')

        {{-- METODE PEMBAYARAN --}}
        @include('pages.services.partials.payment')

        <div class="flex justify-end gap-3">
            <button type="button" class="px-6 py-3 rounded-lg border">+ Keranjang</button>
            <button type="submit" class="px-6 py-3 rounded-lg bg-blue-600 text-white">Pesan Sekarang</button>
        </div>
    </form>

    @include('components.scripts.service-toggle')

</div>
@endsection