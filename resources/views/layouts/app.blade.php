<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('includes.document-head')
    @yield('styles')
</head>

<body>
    @if(Route::currentRouteName() != 'welcome')
        @include('includes.navbar')
    @endif
    @yield('content')
    @include('includes.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>
