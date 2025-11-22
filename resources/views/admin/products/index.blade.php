@extends('layouts.admin')

@section('content')

<div class="flex h-screen">

    <div class="flex-1 flex flex-col overflow-hidden">

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-6 ml-64 space-y-4">
            <h2 class="text-xl font-bold mb-4">Daftar Produk</h2>
    
            <a href="{{ route('admin.products.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Tambah Produk</a>
            
            <table class="w-full mt-4 border">
                <tr class="bg-gray-200">
                    <th class="p-2">Kode</th>
                    <th class="p-2">Nama</th>
                    <th class="p-2">Harga</th>
                    <th class="p-2">Stok</th>
                    <th class="p-2">Aksi</th>
                </tr>
            
                @foreach ($products as $product)
                <tr>
                    <td class="p-2">{{ $product->product_code }}</td>
                    <td class="p-2">{{ $product->name }}</td>
                    <td class="p-2">Rp {{ number_format($product->price) }}</td>
                    <td class="p-2">{{ $product->stock }}</td>
                    <td class="p-2 flex gap-2">
                        <a href="{{ route('admin.products.edit', $product) }}" class="text-blue-600">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Yakin hapus produk?')" class="text-red-600">
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
