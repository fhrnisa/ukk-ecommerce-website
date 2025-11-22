<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Nisa • Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <div class="flex">

        {{-- Sidebar --}}
        @include('admin.components.sidebar')

        {{-- Content --}}
        <main class="flex-1 min-h-screen">

            {{-- Topbar --}}
            @include('admin.components.topbar')

            <div class="">
                @yield('content')
            </div>
        </main>

    </div>

</body>

</html>