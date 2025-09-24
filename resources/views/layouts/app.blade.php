<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <link rel="icon" type="img/png" href="{{asset('images/toko-nisa-logo.png')}}">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-900">

    <header class="fixed top-0 w-full">
        {{-- Navbar --}}
        @include('partials.global.navbar')
    </header>

    {{-- Konten halaman --}}
    <main class="m-0">
        @yield('content')
    </main>

    {{-- global script --}}
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- page specific --}}
    @stack('scripts')

    {{-- Footer --}}
    @include('partials.global.footer')

    @vite('resources/js/app.js')
</body>
</html>
