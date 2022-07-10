@php
$currentRouteName = \Request::route()->getName();
@endphp

<header>
    @if($currentRouteName == 'welcome')
    <div id="header-sticky" class="header__area header__transparent header__padding">
        @else
        <div id="header-sticky" class="header__area header__transparent header__padding header__white">
            @endif
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                        <div class="header__left d-flex">
                            <div class="logo">
                                <a href="{{route('welcome')}}">
                                    <img src="{{ asset('assets/app-logo.png')}}" alt="logo" class="img-fluid" style="height: 80px">
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- Begin navbar --}}
                    @include('includes.navbar')
                    {{-- End navbar --}}
                </div>
            </div>
        </div>
</header>
