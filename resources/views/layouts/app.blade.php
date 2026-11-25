<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Gymstick — Elite Athletic Club & Sanctuary' }}</title>

    <!-- Google Fonts: Inter & Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Montserrat:wght@600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#06080d] text-slate-100 antialiased selection:bg-[#ff5e14] selection:text-white overflow-x-hidden relative">
    <div class="min-h-screen flex flex-col overflow-x-hidden relative">
        @include('components.navbar')

        <main class="flex-1">
            @yield('content')
        </main>

        @include('components.footer')
        @include('components.login-modal')
        @auth
            @include('components.change-plan-modal')
        @endauth
    </div>
</body>
</html>
