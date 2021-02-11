<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'btcore') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=OpenSans" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('styles')
    <style>
        body {
            display: grid;
            grid-template-columns: 1.5fr 6fr;
            grid-gap: 1rem;
            /* background: linear-gradient(195deg, rgb(151, 151, 221), rgb(21, 122, 216)); */
        }

        aside {
            grid-column: 1 / span(1);
            min-height: 100vh;
        }

        main {
            grid-column: 2 / -1;
        }

        .btn-link:hover {
            text-decoration: none;
        }

        .logo {
            height: 8rem;
        }

        .list-group-item.active button {
            color: #fff !important;
        }

        .btn-logout {
            cursor: pointer;
        }

    </style>
</head>

<body class="bg-light">
    @include('sweetalert::alert')
    @include('includes.sidebar')
    <main class="container-fluid">
        <header class="d-flex justify-content-between align-items-center my-3">
            <h4>Your Dashboard</h4>
            <ul class="right list-unstyled d-flex justify-content-between align-items-center">
                {{-- <li class="mr-lg-5"><i class="bx bx-bell"></i> Notifications</li>
                --}}
                <li class="dropdown open">
                    <a class="btn dropdown-toggle" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-user-circle"></i> {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu shadow" aria-labelledby="triggerId">
                        <a class="dropdown-item py-2" href="{{ route('profile') }}"><i class="bx bx-user"></i>
                            My
                            profile</a>
                        {{-- <a class="dropdown-item border-bottom border-primary py-2"
                            href="#"><i class="bx bx-slider"></i>
                            Settings</a> --}}
                        <a class="dropdown-item btn-logout py-2" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"><i class="bx bx-log-out-circle"></i>
                            Sign Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </header>
        {{-- optional only for the home dasboard link --}}
        @yield('stats')

        {{-- for other dashboard pages --}}
        @if (Route::currentRouteName() != 'home')
            <div class="card border-0 bg-white shadow-sm rounded-0 mb-5">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        @endif
    </main>


    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{ asset('ckeditor/ckeditor.js') }}">
    </script>
    @yield('scripts')
</body>

</html>
