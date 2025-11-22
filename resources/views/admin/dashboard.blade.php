@extends('layouts.admin')

@section('title', 'Dashboard Admin Toko Nisa')

@section('content')
    
<div class="flex h-screen">

    <div class="flex-1 flex flex-col overflow-hidden">

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-6 ml-64 space-y-4">
            
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-sm font-medium text-gray-500 mb-2">Total Penjualan</h3>
                    <p class="text-xs text-gray-400 mb-4">7 hari terakhir</p>
                    <div class="flex items-end justify-between">
                        <span class="text-4xl font-bold text-gray-900">$350K</span>
                        <div class="text-green-500 text-sm font-semibold flex items-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                            10.4%
                        </div>
                    </div>
                    <p class="text-xs text-gray-400 mt-2">Previous 7days ($235)</p>
                    <button class="mt-4 text-xs font-semibold text-blue-600 border border-blue-600 py-1 px-3 rounded-full hover:bg-blue-600 hover:text-white transition duration-150">Details</button>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-sm font-medium text-gray-500 mb-2">Total Pesanan</h3>
                    <p class="text-xs text-gray-400 mb-4">7 hari terakhir</p>
                    <div class="flex items-end justify-between">
                        <span class="text-4xl font-bold text-gray-900">10.7K</span>
                        <div class="text-green-500 text-sm font-semibold flex items-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                            14.4%
                        </div>
                    </div>
                    <p class="text-xs text-gray-400 mt-2">Previous 7days (7.6K)</p>
                    <button class="mt-4 text-xs font-semibold text-blue-600 border border-blue-600 py-1 px-3 rounded-full hover:bg-blue-600 hover:text-white transition duration-150">Details</button>
                </div>

                <div class="bg-white p-6 rounded-xl shadow flex space-x-6">
                    <div class="flex-1">
                        <h3 class="text-sm font-medium text-gray-500 mb-2">Dalam Proses & Dibatalkan</h3>
                        <p class="text-xs text-gray-400 mb-4">7 hari terakhir</p>
                        <div class="flex space-x-4">
                            <div>
                                <div class="text-2xl font-bold text-gray-900">509</div>
                                <div class="text-xs text-gray-500">Dalam proses</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-gray-900">94</div>
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
                        <h2 class="text-lg font-semibold text-gray-800">Transaction</h2>
                        <button class="flex items-center text-sm font-medium text-gray-600 py-1 px-3 rounded-full bg-gray-100 hover:bg-gray-200">
                            Filter
                        </button>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <th class="py-3">No.</th>
                                <th class="py-3">Id Customer</th>
                                <th class="py-3">Order Date</th>
                                <th class="py-3">Status</th>
                                <th class="py-3 text-right">Amount</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-sm">
                            <tr>
                                <td class="py-3">1.</td>
                                <td class="py-3 font-semibold">#6545</td>
                                <td class="py-3">01 Oct | 11:29 am</td>
                                <td class="py-3"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Paid</span></td>
                                <td class="py-3 text-right">$64</td>
                            </tr>
                            <tr>
                                <td class="py-3">2.</td>
                                <td class="py-3 font-semibold">#5812</td>
                                <td class="py-3">01 Oct | 11:29 am</td>
                                <td class="py-3"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span></td>
                                <td class="py-3 text-right">$557</td>
                            </tr>
                            </tbody>
                    </table>
                    <div class="mt-4 flex justify-end">
                        <button class="text-sm font-semibold text-blue-600 border border-blue-600 py-1 px-3 rounded-full hover:bg-blue-600 hover:text-white transition duration-150">Details</button>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-3 bg-white p-6 rounded-xl shadow">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold text-gray-800">Top Products</h2>
                        <a href="#" class="text-xs font-medium text-blue-600 hover:text-blue-700">All product</a>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between py-2 border-b border-gray-100">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gray-200 rounded mr-3"></div>
                                <div>
                                    <div class="font-semibold text-sm">Apple iPhone 13</div>
                                    <div class="text-xs text-gray-400">Item: #FKZ-4567</div>
                                </div>
                            </div>
                            <div class="font-bold text-sm">$999.00</div>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-100">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gray-200 rounded mr-3"></div>
                                <div>
                                    <div class="font-semibold text-sm">Nike Air Jordan</div>
                                    <div class="text-xs text-gray-400">Item: #FKZ-4567</div>
                                </div>
                            </div>
                            <div class="font-bold text-sm">$72.40</div>
                        </div>
                        </div>
                </div>
            </div>
            
            <div class="pt-6 flex justify-center space-x-6">
                <a href="{{ route('admin.products.create') }}" class="flex items-center px-6 py-3 bg-white border border-gray-300 rounded-xl text-blue-600 font-semibold shadow-sm hover:bg-gray-50 transition duration-150">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Tambah produk
                </a>

                <button class="flex items-center px-6 py-3 bg-white border border-gray-300 rounded-xl text-blue-600 font-semibold shadow-sm hover:bg-gray-50 transition duration-150">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Pesanan
                </button>
                
                <button class="flex items-center px-6 py-3 bg-white border border-gray-300 rounded-xl text-blue-600 font-semibold shadow-sm hover:bg-gray-50 transition duration-150">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Kategori
                </button>

                <button class="flex items-center px-6 py-3 bg-white border border-gray-300 rounded-xl text-blue-600 font-semibold shadow-sm hover:bg-gray-50 transition duration-150">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Pelanggan
                </button>

            </div>

        </main>
    </div>
</div>

</body>
</html>

@endsection