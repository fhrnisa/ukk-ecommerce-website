@extends('layouts.admin')

@section('title', 'Dashboard Admin Toko Nisa')

@section('content')

<div class="flex h-screen">

    <div class="flex-1 flex flex-col overflow-hidden">

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-6 ml-64 space-y-4">
            
            <div class="grid grid-cols-3 gap-6">
                <!-- Card: Total Penjualan -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-sm font-medium text-gray-500 mb-2">Total Penjualan</h3>
                    <p class="text-xs text-gray-400 mb-4">7 hari terakhir</p>
                    <div class="flex items-end justify-between">
                        <span class="text-4xl font-bold text-gray-900">
                        Rp{{ number_format($total_sales ?? 0, 0, ',', '.') }}
                        </span>
                    </div>
                    <button class="mt-4 text-xs font-semibold text-blue-600 border border-blue-600 py-1 px-3 rounded-full hover:bg-blue-600 hover:text-white transition duration-150">Details</button>
                </div>

                <!-- Card: Total Pesanan -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-sm font-medium text-gray-500 mb-2">Total Pesanan</h3>
                    <p class="text-xs text-gray-400 mb-4">7 hari terakhir</p>
                    <div class="flex items-end justify-between">
                        <span class="text-4xl font-bold text-gray-900">{{ $total_orders ?? 0 }}</span>
                    </div>
                    <button class="mt-4 text-xs font-semibold text-blue-600 border border-blue-600 py-1 px-3 rounded-full hover:bg-blue-600 hover:text-white transition duration-150">Details</button>
                </div>

                <!-- Card: Dalam Proses & Dibatalkan -->
                <div class="bg-white p-6 rounded-xl shadow flex space-x-6">
                    <div class="flex-1">
                        <h3 class="text-sm font-medium text-gray-500 mb-2">Dalam Proses & Dibatalkan</h3>
                        <p class="text-xs text-gray-400 mb-4">7 hari terakhir</p>
                        <div class="flex space-x-4">
                            <div>
                                <div class="text-2xl font-bold text-gray-900">{{ $pending ?? 0 }}</div>
                                <div class="text-xs text-gray-500">Dalam proses</div>
                            </div>
                            <div>
                                    <div class="text-2xl font-bold text-gray-900">{{ $completed ?? 0 }}</div>
                                <div class="text-xs text-gray-500">Dibatalkan</div>
                            </div>
                        </div>
                        <button class="mt-4 text-xs font-semibold text-blue-600 border border-blue-600 py-1 px-3 rounded-full hover:bg-blue-600 hover:text-white transition duration-150">Details</button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-7 gap-6">
                
                <div class="col-span-1 md:col-span-4 bg-white p-6 rounded-xl shadow">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold text-gray-800">Transaksi Terbaru</h2>

                        <a href="{{ route('admin.orders.index') }}" class="flex items-center text-sm font-medium text-gray-600 py-1 px-3 rounded-full bg-gray-100 hover:bg-gray-200">
                             Lihat Semua
                        </a>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <th class="py-3">No.</th>
                                <th class="py-3">Pelanggan</th> 
                                <th class="py-3">Tanggal Pesanan</th>
                                <th class="py-3">Status</th>
                                <th class="py-3 text-right">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-sm">
                            
                            <!-- LOGIKA LOOP UNTUK MENAMPILKAN DATA ORDER -->
                            @forelse ($recent_orders as $index => $order)
                            <tr>
                                <td class="py-3">{{ $index + 1 }}.</td>
                                <td class="py-3 font-semibold">{{ $order->user->name ?? 'N/A' }}</td>
                                <td class="py-3">{{ $order->created_at->format('d M | H:i a') }}</td>
                                <td class="py-3">
                                    <!-- Status Pesanan -->
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                        @if($order->status == 'completed') bg-green-100 text-green-800
                                        @elseif($order->status == 'pending') bg-yellow-100 text-yellow-800
                                        @elseif($order->status == 'cancelled') bg-red-100 text-red-800
                                        @else bg-gray-100 text-gray-800 
                                        @endif">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                </td>
                                
                                <td class="py-3 text-right">Rp{{ number_format($order->total_price, 0, ',', '.') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="py-3 text-center text-gray-500">
                                    Tidak ada data pesanan terbaru ditemukan.
                                </td>
                            </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                    
                    <div class="mt-4 flex justify-end">
                        <a href="{{ route('admin.orders.index') }}" class="text-sm font-semibold text-blue-600 border border-blue-600 py-1 px-3 rounded-full hover:bg-blue-600 hover:text-white transition duration-150">Lihat Semua</a>
                    </div>
                </div>
                
                <!-- Top Produk -->
                <div class="col-span-1 md:col-span-3 bg-white p-6 rounded-xl shadow">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold text-gray-800">Top Produk</h2>
                        <a href="#" class="text-xs font-medium text-blue-600 hover:text-blue-700">Semua produk</a>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between py-2 border-b border-gray-100">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gray-200 rounded mr-3"></div>
                                <div>
                                    <div class="font-semibold text-sm">Pulpen Standard AE7 Hitam</div>
                                    <div class="text-xs text-gray-400">Item: ATK-002</div>
                                </div>
                            </div>
                            <div class="font-bold text-sm">Rp3000</div>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-100">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gray-200 rounded mr-3"></div>
                                <div>
                                    <div class="font-semibold text-sm">Lakban Hitam Nachi</div>
                                    <div class="text-xs text-gray-400">Item: ATK-003</div>
                                </div>
                            </div>
                            <div class="font-bold text-sm">Rp8000</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="pt-6 flex justify-center space-x-6">
                <a href="{{ route('admin.products.create') }}" class="flex items-center px-6 py-3 bg-white border border-gray-300 rounded-xl text-blue-600 font-semibold shadow-sm hover:bg-gray-50 transition duration-150">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Tambah produk
                </a>

                <a href="{{ route('admin.orders.index') }}" class="flex items-center px-6 py-3 bg-white border border-gray-300 rounded-xl text-blue-600 font-semibold shadow-sm hover:bg-gray-50 transition duration-150">
                     Pesanan
                </a>

                <button class="flex items-center px-6 py-3 bg-white border border-gray-300 rounded-xl text-blue-600 font-semibold shadow-sm hover:bg-gray-50 transition duration-150">
                    Pelanggan
                </button>

            </div>

        </main>
    </div>
</div>

@endsection