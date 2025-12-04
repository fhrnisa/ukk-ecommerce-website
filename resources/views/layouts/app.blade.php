<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Toko Nisa')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/toko-nisa-logo.png') }}">
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-gray-50 text-gray-900">

    <header class="fixed top-0 w-full">
        <!-- Navbar -->
        @yield('navbar')
    </header>

    <!-- Konten halaman -->
    <main class="flex-grow m-0">
        @yield('content')
    </main>

    <!-- global script -->
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')

    <!-- Footer -->
    @include('partials.global.footer')

    @vite('resources/js/app.js')
</body>
</html>
