@extends('layouts.app')

@section('title', 'Layanan')

@section('content')

        @include('partials.global.navbar-services')

        <div class="mt-24 mb-20 px-8 md:mt-32 md:mb-20 md:px-32">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <x-card-services 
                        image="images/percetakan.jpg"
                        title="Cetak Dokumen"
                        desc="Cetak dokumen dalam ukuran A4, F4, HVS, pilihan warna hitam/putih"
                        rating="4.9"
                        reviews="55"
                        price="500"
                        unit="/ lembar"

                        :withButtons="true" 
                        detailUrl="{{ route('services.show', 1) }}" 
                        orderUrl="Detail"
                        />

                        <x-card-services 
                        image="images/percetakan.jpg"
                        title="Cetak Dokumen"
                        desc="Cetak dokumen dalam ukuran A4, F4, HVS, pilihan warna hitam/putih"
                        rating="4.9"
                        reviews="55"
                        price="500"
                        unit="/ lembar"

                        :withButtons="true" 
                        detailUrl="{{ route('services.show', 1) }}" 
                        orderUrl="Detail"
                        />

                        <x-card-services 
                        image="images/percetakan.jpg"
                        title="Cetak Dokumen"
                        desc="Cetak dokumen dalam ukuran A4, F4, HVS, pilihan warna hitam/putih"
                        rating="4.9"
                        reviews="55"
                        price="500"
                        unit="/ lembar"

                        :withButtons="true" 
                        detailUrl="{{ route('services.show', 1) }}" 
                        orderUrl="Detail"
                        />
                </div>
        </div>

@endsection


@push('scripts')
<script src="{{ asset('js/navbar.js') }}"></script>
@endpush