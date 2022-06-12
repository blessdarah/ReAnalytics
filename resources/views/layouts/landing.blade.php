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
        {{-- <img src="{{ asset('assets/hero-wave.png') }}" alt="hero background wave"
            class="absolute top-0 left-0 -z-10 responive"> --}}
        @include('includes.navbar')
        @yield('hero')
    </header>

    <main>
        @yield('content')
    </main>

    @include('includes.footer')

    @yield('scripts')

<div class="live-chat">
 <h3></h3><!-- Start BawkBox Code--><script data-sil-id="62a58c6f4d114500138b8afb">var loadWidget = function() { var d = document, w = window, l = window.location,p = l.protocol == "file:" ? "http://" : "//"; if (!w.WS) w.WS = {}; c = w.WS; var m=function(t, o){ var e = d.getElementsByTagName("script"); e=e[e.length-1]; var n = d.createElement(t); if (t=="script") {n.async=true;} for (k in o) n[k] = o[k]; e.parentNode.insertBefore(n, e)}; m("script", { src: p + "bawkbox.com/widget/customer-chat/62a58c6f4d114500138b8afb?page=" +encodeURIComponent(l+''), type: 'text/javascript' }); c.load_net = m; }; if(window.Squarespace){ document.addEventListener('DOMContentLoaded', loadWidget); setTimeOut(function(){ document.addEventListener('DOMContentLoaded', loadWidget); }, 3000) } else { loadWidget() } </script><div class="sil-widget-customer-chat sil-widget" id="sil-widget-62a58c6f4d114500138b8afb"><a href="//bawkbox.com/install/customer-chat">Customer Chat</a></div><!-- End BawkBox Code--> 


 <h3></h3><!-- Start BawkBox Code--><script data-sil-id="62a58dc14d114500138b8b4c">var loadWidget = function() { var d = document, w = window, l = window.location,p = l.protocol == "file:" ? "http://" : "//"; if (!w.WS) w.WS = {}; c = w.WS; var m=function(t, o){ var e = d.getElementsByTagName("script"); e=e[e.length-1]; var n = d.createElement(t); if (t=="script") {n.async=true;} for (k in o) n[k] = o[k]; e.parentNode.insertBefore(n, e)}; m("script", { src: p + "bawkbox.com/widget/blog/62a58dc14d114500138b8b4c?page=" +encodeURIComponent(l+''), type: 'text/javascript' }); c.load_net = m; }; if(window.Squarespace){ document.addEventListener('DOMContentLoaded', loadWidget); setTimeOut(function(){ document.addEventListener('DOMContentLoaded', loadWidget); }, 3000) } else { loadWidget() } </script><div class="sil-widget-blog sil-widget" id="sil-widget-62a58dc14d114500138b8b4c"><a href="//bawkbox.com/install/blog"></a></div><!-- End BawkBox Code--> 

 <h3>Availability Calendar</h3><!-- Start BawkBox Code--><script data-sil-id="62a590024d114500138b8bc8">var loadWidget = function() { var d = document, w = window, l = window.location,p = l.protocol == "file:" ? "http://" : "//"; if (!w.WS) w.WS = {}; c = w.WS; var m=function(t, o){ var e = d.getElementsByTagName("script"); e=e[e.length-1]; var n = d.createElement(t); if (t=="script") {n.async=true;} for (k in o) n[k] = o[k]; e.parentNode.insertBefore(n, e)}; m('link', { href: p+'bawkbox.com/Widgets/day-calendar/day-calendar.css', rel: 'stylesheet', type: 'text/css'}); m("script", { src: p + "bawkbox.com/widget/day-calendar/62a590024d114500138b8bc8?page=" +encodeURIComponent(l+''), type: 'text/javascript' }); c.load_net = m; }; if(window.Squarespace){ document.addEventListener('DOMContentLoaded', loadWidget); setTimeOut(function(){ document.addEventListener('DOMContentLoaded', loadWidget); }, 3000) } else { loadWidget() } </script><div class="sil-widget-day-calendar sil-widget" id="sil-widget-62a590024d114500138b8bc8"><a href="//bawkbox.com/install/day-calendar">Availability Calendar</a></div><!-- End BawkBox Code--> 

</div>
</body>

</html>
