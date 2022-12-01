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
</body>

</html>
