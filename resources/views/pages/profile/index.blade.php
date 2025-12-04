@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<div 
    x-data="{ tab: 'profile' }" 
    class="flex flex-col md:flex-row min-h-screen">

    <!-- SIDEBAR (desktop) -->
    <aside class="hidden md:flex md:flex-col md:w-1/4 border-r bg-white py-10 px-6">

        <div class="flex items-center gap-4 md:hidden mb-6">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('icon/arrow-icon.svg') }}" alt="Back">
            </a>
            <h1 class="text-2xl font-semibold">Profil</h1>
        </div>

        <div class="flex flex-col items-center mb-10">
            <div class="w-20 h-20 rounded-full bg-gray-200"></div>
            <h2 class="mt-4 text-xl font-semibold">Halo, {{ Auth::user()->name }}</h2>
            <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
        </div>

        <nav class="flex flex-col space-y-3">
            <button @click="tab = 'profile'" :class="tab === 'profile' ? 'text-blue-600 font-medium' : 'text-gray-700'" class="text-left hover:text-blue-600">Edit Profil</button>
            <button @click="tab = 'notif'" :class="tab === 'notif' ? 'text-blue-600 font-medium' : 'text-gray-700'" class="text-left hover:text-blue-600">Notifikasi</button>
            <button @click="tab = 'orders'" :class="tab === 'orders' ? 'text-blue-600 font-medium' : 'text-gray-700'" class="text-left hover:text-blue-600">Riwayat Pesanan</button>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-left text-red-500 hover:underline">Logout</button>
            </form>
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
<main class="flex-1 py-10 px-6">

    <!-- ================= MOBILE MODE ================= -->
    <div class="md:hidden">

        <!-- HEADER -->
        <div class="flex items-center gap-4 mb-6">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('icon/arrow-icon.svg') }}" alt="Back">
            </a>
            <h1 class="text-2xl font-semibold">Profil</h1>
        </div>

        <!-- PROFIL RINGKAS -->
        <div class="flex flex-col items-center mb-8">
            <div class="w-20 h-20 rounded-full bg-gray-200"></div>
            <h2 class="mt-4 text-lg font-semibold">Halo, {{ Auth::user()->name }}</h2>
            <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
        </div>

        <!-- MENU NAVIGASI -->
        <div class="space-y-3">
            <a href="{{ route('profile.edit') }}" class="flex justify-between items-center p-4 bg-gray-100 rounded-lg">
                <span>Edit Profil</span><span>›</span>
            </a>

            <a href="{{ route('profile.notif') }}" class="flex justify-between items-center p-4 bg-gray-100 rounded-lg">
                <span>Notifikasi</span><span>›</span>
            </a>

            <a href="{{ route('profile.orders') }}" class="flex justify-between items-center p-4 bg-gray-100 rounded-lg">
                <span>Riwayat Pesanan</span><span>›</span>
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full text-left flex justify-between items-center p-4 bg-red-50 text-red-600 rounded-lg">
                    Logout <span>›</span>
                </button>
            </form>
        </div>
    </div>
    <!-- ================= END MOBILE ================= -->


    <!-- ================= DESKTOP MODE ================= -->
    <div class="hidden md:block">

        <!-- TAB CONTENT DESKTOP -->
        <div x-show="tab === 'profile'">
            @include('pages.profile.tabs.edit')
        </div>

        <div x-show="tab === 'notif'" x-cloak>
            @include('pages.profile.tabs.notification')
        </div>

        <div x-show="tab === 'orders'" x-cloak>
            @include('pages.profile.tabs.orders')
        </div>

    </div>
    <!-- ================= END DESKTOP ================= -->

</main>

</div>

@push('scripts')
<script src="//unpkg.com/alpinejs" defer></script>

@endsection
