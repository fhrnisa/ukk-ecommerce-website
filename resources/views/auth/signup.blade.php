@extends('layouts.auth')

@section('title', 'Daftar')

@section('content')

<div class="h-screen w-screen flex flex-col gap-12 md:gap-0 md:flex-row m-0 p-0">

    <!-- Bagian Kiri (Gambar) -->
    <div class="flex w-full md:w-1/2 bg-blue-200 items-center justify-center">
        <img src="{{ asset('images/printer-signup.svg')}}" alt="Ilustrasi Print" class="w-1/2 md:w-4/5 ">
    </div>

    <!-- Bagian Kanan (Form Daftar) -->
    <div class="flex w-full md:w-1/2 items-center justify-center px-8">
        <div class="w-full max-w-md">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800 text-center">Daftar</h2>

            @if(session('success'))
                <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('signup') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-base font-normal text-gray-700">Nama Pengguna</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="mt-1 block w-full rounded-md border-1 border-gray-400 focus:ring-blue-500 focus:border-blue-500 p-2"
                        required>
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-base font-normal text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="mt-1 block w-full rounded-md border-1 border-gray-400 focus:ring-blue-500 focus:border-blue-500 p-2"
                        required>
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-base font-normal text-gray-700">Password</label>
                    <input type="password" name="password" id="password"
                        class="mt-1 block w-full rounded-md border-1 border-gray-400 focus:ring-blue-500 focus:border-blue-500 p-2"
                        required>
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-base font-normal text-gray-700">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="mt-1 block w-full rounded-md border-1 border-gray-400 focus:ring-blue-500 focus:border-blue-500 p-2"
                        required>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white text-lg font-medium mt-6 py-2 rounded-md hover:bg-blue-700 transition">
                    Daftar
                </button>
            </form>

            <p class="mt-4 text-center text-base text-gray-600">
                Sudah memiliki akun?
                <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Masuk</a>
            </p>
        </div>
    </div>
</div>

@endsection