@extends('layouts.app')

@section('content')
<!-- page title area start -->
<section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="{{asset('frontend/assets/img/page-title/page-title.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="page__title-wrapper mt-110">
                    <h3 class="page__title">Meet the team</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title area end -->

<!-- teacher area start -->
<section class="teacher__area pt-115 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 offset-xxl-3">
                <div class="section__title-wrapper text-center mb-60">
                    <h2 class="section__title">We have <br>
                        A dedicated <span class="yellow-bg"> Team <img src="{{asset('frontend/assets/img/shape/yellow-bg-2.png')}}" alt=""> </span> <br>
                    </h2>
                    <p>You don't have to struggle alone, you've got our assistance and help.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($members as $member)
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">
                    <div class="teacher__thumb w-img fix">
                        <a href="#">
                            <img src="{{asset('frontend/assets/img/teacher/teacger-1.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="teacher__content">
                        <h3 class="teacher__title">{{$member->name}}</h3>
                        <p> {{$member->position}}</p>

                        {{-- hide social links --}}
                        <div class="d-none teacher__social">
                            <ul>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div>No data found</div>
            @endforelse
        </div>
</section>
<!-- teacher area end -->


@endsection
