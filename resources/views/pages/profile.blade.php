@extends('layouts.app')

@section('title', 'Toko Nisa')

@section('content')

    <div class="py-10 px-6">
        <div class="flex items-center gap-4">
            <a href="{{ route('welcome') }}"><img src="{{ 'icon/arrow-icon.svg' }}" alt="Back"></a>
            <span class="text-2xl font-semibold">Profil</span>
        </div>

        <div class="items-center justify-center">
            <div class="flex flex-col items-center justify-center my-8">
                <div class="relative flex flex-col items-center justify-center">
                    <div class="bg-gray-300 rounded-full w-20 h-20 items-center justify-center mb-2"></div>

                    <div class="items-center text-center">
                        <span class="text-xl font-semibold">Fahrunnisa</span><br>
                        <span class="text-base text-gray-500">fahrunnisa01@gmail.com</span>
                    </div>
                </div>
            </div>
            
            <div class="">
                <div class="flex gap-4 items-center justify-between mb-4">
                    <div class="flex gap-4">
                        <img src="{{ 'icon/user-icon.svg' }}" alt="User" class="w-6 h-6">
                        <span class="text-base">Edit Profil</span>
                    </div>
                    <img src="{{ 'icon/chevron-icon.svg' }}" alt="Chevron" class="w-5 h-5 rotate-270">
                </div>
    
                <div class="flex gap-4 items-center justify-between mb-4">
                    <div class="flex gap-4">
                        <img src="{{ 'icon/notification-icon.svg' }}" alt="Notification" class="w-6 h-6">
                        <span class="text-base">Notifikasi</span>
                    </div>
                    <img src="{{ 'icon/chevron-icon.svg' }}" alt="Chevron" class="w-5 h-5 rotate-270">
                </div>
    
                <div class="flex gap-4 items-center justify-between mb-4">
                    <div class="flex gap-4">
                        <img src="{{ 'icon/history-icon.svg' }}" alt="History" class="w-6 h-6">
                        <span class="text-base">Riwayat Pesanan</span>
                    </div>
                    <img src="{{ 'icon/chevron-icon.svg' }}" alt="Chevron" class="w-5 h-5 rotate-270">
                </div>
    
                <div class="flex gap-4 items-center justify-left">
                    <img src="{{ 'icon/logout-icon.svg' }}" alt="Logout" class="w-6 h-6">
                    <span class="text-base text-red-600">Logout</span>
                </div>
            </div>
        </div>

        

    </div>

@endsection

@push('scripts')
<script src="{{ asset('js/navbar.js') }}"></script>
@endpush