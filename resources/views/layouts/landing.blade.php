<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script>
    --}}

    <!-- Styles -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    {{--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{--
    <link href="{{ asset('css/main.css') }}" rel="stylesheet"> --}}
    <!-- 1. Addchat css -->
    <link href="{{ asset('assets/addchat/css/addchat.min.css') }}" rel="stylesheet">


    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<style>
    .img-fluid {
        max-width: 100%;
        height: auto;
    }

</style>
@yield('styles')

<body>
    <!-- 2. AddChat widget -->
    <div id="addchat_app" data-baseurl="{{ url('') }}" data-csrfname="{{ 'X-CSRF-Token' }}"
        data-csrftoken="{{ csrf_token() }}"></div>
    <div id="app" class="active-preloader-ovh">

        @include('includes.navbar')
        {{-- yeild hero --}}
        <main>
            @yield('content')
        </main>

        @include('includes.footer')
    </div>




    <!-- 3. AddChat JS -->
    <!-- Modern browsers -->
    <script type="module" src="<?php echo asset('assets/addchat/js/addchat.min.js'); ?>">
    </script>
    <!-- Fallback support for Older browsers -->
    <script nomodule
        src="<?php echo asset('assets/addchat/js/addchat-legacy.min.js'); ?>">
    </script>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/isotope.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>

    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script src="{{ asset('js/particles-config.js') }}"></script>
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/chart-config.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>


    <!-- Whatsapp plugin -->
    <div id="watodiv"
        name="WAT0|MQ==|NTE4MjkwMDI3NQ==|TWFya2xvdHVz|TGV0J3MgQ2hhdCBmb3IgbW9yZSAh|d2FncmVlbjMucG5n|VW5pdGVkIFN0YXRlcyAoKzEp|I0U0RTZFOA==|cmlnaHQ=">
    </div>
    <script src="https://wato.xyz/wato.js">
    </script>
</body>

</html>