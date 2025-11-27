@extends('layouts.admin')

@section('content')

<div class="flex h-screen">

    <div class="flex-1 flex flex-col overflow-hidden">

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-6 ml-64 space-y-4 ">
            <h2 class="text-xl font-semibold mb-4">Tambah Produk</h2>

            @if ($errors->any())
                <div class="bg-red-200 p-2 mb-3 text-red-800 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 p-6 bg-white rounded-lg">
                @csrf

                <div>
                    <label class="block">Nama Produk</label>
                    <input type="text" name="name" class="border border-gray-300 rounded-md p-2 w-full" required>
                </div>

                <div>
                    <label class="block">Harga</label>
                    <input type="number" name="price" class="border border-gray-300 rounded-md p-2 w-full" required>
                </div>

                <div>
                    <label class="block">Stok</label>
                    <input type="number" name="stock" class="border border-gray-300 rounded-md p-2 w-full" required>
                </div>

                <div>
                    <label class="block">Deskripsi</label>
                    <textarea name="description" class="border border-gray-300 rounded-md p-2 w-full"></textarea>
                </div>

                <div>
                    <label class="block">Gambar Produk</label>
                    <input type="file" name="image" class="border border-gray-300 rounded-md p-2 w-full">
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                    Simpan
                </button>
            </form>
        </main>
    </div>
</div>


@endsection
