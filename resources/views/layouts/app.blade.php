<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'My App')</title>
</head>
<body>
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>
