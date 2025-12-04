@extends('layouts.admin')

@section('title', 'Data Transaksi')

@section('content')
<div class="ml-70 mr-8">
    <div class="p-6">
    
        <!-- HEADER -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Data Transaksi</h1>
            <p class="text-sm text-gray-500 mt-2 md:mt-0">
                Total Pemasukan:
                <span class="font-semibold text-green-600">
                    Rp{{ number_format($totalIncome, 0, ',', '.') }}
                </span>
            </p>
        </div>
    
        <!-- TABLE -->
        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="min-w-full text-sm text-gray-700">
                <thead class="bg-gray-100 text-xs uppercase font-semibold">
                    <tr>
                        <th class="px-4 py-3 text-left">No</th>
                        <th class="px-4 py-3 text-left">Pelanggan</th>
                        <th class="px-4 py-3 text-left">Tanggal</th>
                        <th class="px-4 py-3 text-left">Metode</th>
                        <th class="px-4 py-3 text-right">Total</th>
                        <th class="px-4 py-3 text-center">Status</th>
                    </tr>
                </thead>
    
                <tbody class="divide-y">
                    @forelse ($transactions as $trx)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3 font-medium">{{ $trx->user->name ?? '-' }}</td>
                        <td class="px-4 py-3">
                            {{ $trx->updated_at->format('d M Y H:i') }}
                        </td>
    
                        <td class="px-4 py-3">
                            {{ $trx->payment_method ?? 'Manual' }}
                        </td>
    
                        <td class="px-4 py-3 text-right font-semibold">
                            Rp{{ number_format($trx->total, 0, ',', '.') }}
                        </td>
    
                        <td class="px-4 py-3 text-center">
                            <span class="px-3 py-1 rounded-full text-xs bg-green-100 text-green-800">
                                Berhasil
                            </span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-6 text-gray-500">
                            Belum ada transaksi.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    
    </div>
</div>
@endsection
