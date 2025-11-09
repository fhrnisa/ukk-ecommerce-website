@extends('layouts.auth')

@section('title', 'Masuk')

@section('content')

<div class="h-screen w-screen flex flex-col gap-12 md:gap-0 md:flex-row-reverse m-0 p-0">

    <!-- Bagian Kanan (Gambar - di mobile atas, di desktop kanan) -->
    <div class="flex w-full md:w-1/2 bg-blue-200 items-center justify-center p-6">
        <img src="{{ asset('images/printer-signin.svg')}}" alt="Ilustrasi Print" class="w-1/2 md:w-4/5">
    </div>

    <!-- Bagian Kiri (Form Daftar) -->
    <div class="flex w-full md:w-1/2 items-center justify-center px-8">
        <div class="w-full max-w-md">
            <h2 class="text-3xl font-semibold mb-16 md:mb-8 text-gray-800 text-center">Masuk</h2>

            @if(session('success'))
                <script>
                    window.addEventListener('DOMContentLoaded', () => {
                        setTimeout(() => {
                            Swal.fire({
                                icon: 'success',
                                title: 'Pendaftaran Berhasil!',
                                text: '{{ session('success') }}',
                                confirmButtonText: 'OK',
                                confirmButtonColor: '#2563eb',
                            });
                        }, 200);
                    });
                </script>
            @endif

            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-base font-normal text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="mt-1 block w-full rounded-md border border-gray-400 focus:ring-blue-500 focus:border-blue-500 p-2"
                        required>
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-base font-normal text-gray-700">Password</label>
                    <input type="password" name="password" id="password"
                        class="mt-1 block w-full rounded-md border border-gray-400 focus:ring-blue-500 focus:border-blue-500 p-2"
                        required>
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white text-lg font-medium mt-6 py-2 rounded-md hover:bg-blue-700 transition">
                    Masuk
                </button>
            </form>

            <p class="mt-4 text-center text-base text-gray-600">
                Belum memiliki akun?
                <a href="{{ route('signup') }}" class="text-blue-600 hover:underline">Daftar</a>
            </p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection