@extends('layouts.admin')

@section('title', 'Daftar Produk')

@section('content')

<div class="flex h-screen">

    <div class="flex-1 flex flex-col overflow-hidden">

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-6 ml-64 space-y-4">
            <h2 class="text-xl font-semibold mb-4">Daftar Produk</h2>
    
            <a href="{{ route('admin.products.create') }}" class="px-4 py-2 border-1 border-blue-600 bg-white text-blue-600 rounded">+ Tambah Produk</a>
            
            <table class="w-full mt-4 bg-white rounded-sm">
                <tr class="">
                    <th class="font-semibold p-2">Kode</th>
                    <th class="font-semibold p-2">Nama</th>
                    <th class="font-semibold p-2">Harga</th>
                    <th class="font-semibold p-2">Stok</th>
                    <th class="font-semibold p-2">Aksi</th>
                </tr>
            
                @foreach ($products as $product)
                <tr>
                    <td class="p-2">{{ $product->product_code }}</td>
                    <td class="p-2">{{ $product->name }}</td>
                    <td class="p-2">Rp {{ number_format($product->price) }}</td>
                    <td class="p-2">{{ $product->stock }}</td>
                    <td class="p-2 flex items-center justify-center gap-2">
                        <a href="{{ route('admin.products.edit', $product) }}" class="bg-blue-600 text-white py-1 px-2 rounded-md">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Yakin hapus produk?')" class="bg-red-600 text-white py-1 px-2 rounded-md">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </main>
    </div>
</div>



@endsection
