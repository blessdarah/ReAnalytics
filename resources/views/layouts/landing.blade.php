<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
@yield('styles')

<body class="overflow-x-hidden bg-blue-50">
    <header id="app-header" class="relative">
        <img src="{{ asset('assets/hero-wave.png') }}" alt="hero background wave"
            class="absolute top-0 left-0 -z-10 responive">
        @include('includes.navbar')
        @yield('hero')
    </header>

    <main>
        @yield('content')
    </main>

    @include('includes.footer')
</body>

</html>
