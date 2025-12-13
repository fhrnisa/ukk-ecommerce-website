@extends('layouts.app')

@section('content')
<h2 class="text-xl font-semibold mb-4">Daftar Layanan</h2>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

@foreach ($services as $service)
    <div class="p-4 bg-white rounded shadow">
        <img src="{{ asset('images/' . $service->gambar) }}" class="w-full h-40 object-cover rounded">

        <h3 class="text-lg font-bold mt-2">{{ $service->nama }}</h3>
        <p class="text-sm text-gray-600">{{ $service->deskripsi }}</p>

        <p class="mt-2 font-semibold text-blue-600">
            Rp {{ number_format($service->harga) }}
        </p>

        <a href="{{ route('services.create', $service->id) }}" 
           class="mt-3 inline-block bg-blue-600 text-white py-1 px-3 rounded">
           Pesan Sekarang
        </a>
    </div>
@endforeach

</div>
@endsection
