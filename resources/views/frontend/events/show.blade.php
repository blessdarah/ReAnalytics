@extends('layouts.app')


@section('content')
<main>

    <!-- page title area start -->
    <section class="page__title-area pt-120">
        <div class="page__title-shape">
            <img class="page-title-shape-5 d-none d-sm-block" src="{{asset('frontend/assets/img/page-title/page-title-shape-1.png')}}" alt="">
            <img class="page-title-shape-6" src="{{asset('frontend/assets/img/page-title/page-title-shape-2.png')}}" alt="">
            <img class="page-title-shape-7" src="{{asset('frontend/assets/img/page-title/page-title-shape-4.png')}}" alt="">
            <img class="page-title-shape-8" src="{{asset('frontend/assets/img/page-title/page-title-shape-5.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-xl-8">
                    <div class="page__title-content mb-25 pr-40">
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Event</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$event->name}}</li>
                                </ol>
                            </nav>
                        </div>
                        <span class="page__title-pre purple-bg">{{$event->category->name}}</span>
                        <h5 class="page__title-3">{{$event->name}}</h5>
                    </div>
                    <div class="course__meta-2 d-sm-flex mb-30">
                        <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                            <div class="course__teacher-thumb-3 mr-15">
                                <img src="{{asset($event->flyer)}}" alt="Event flyer">
                            </div>
                            <div class="course__teacher-info-3">
                                <h5>Posted by</h5>
                                <p>Admin</p>
                            </div>
                        </div>
                        <div class="course__update mr-80 mb-30">
                            <h5>Last Update:</h5>
                            <p>{{$event->updated_at->format('M d, Y')}}</p>
                        </div>
                        <div class="course__update mb-30">
                            <h5>Location:</h5>
                            <p>{{$event->venue}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- event details area start -->
    <section class="event__area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="events__wrapper">
                        <div class="events__thumb mb-35 w-img">
                            <img src="{{asset($event->flyer)}}" alt="">
                        </div>
                        <div class="events__details mb-35">
                            <h3>Description</h3>
                            <p>{{$event->description}}</p>
                        </div>
                        <div class="events__tag">
                            <span><i class="fal fa-tag"></i></span>
                            <a href="#">Big data, </a>
                            <a href="#">Data analysis,</a>
                            <a href="#">Data modeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="events__sidebar pl-70">
                        <div class="events__sidebar-widget white-bg mb-20">
                            <div class="events__sidebar-shape">
                                <img class="events-sidebar-img-2" src="{{asset('frontend/assets/img/events/event-shape-2.png')}}" alt="">
                                <img class="events-sidebar-img-3" src="{{asset('frontend/assets/img/events/event-shape-3.png')}}" alt="">
                            </div>
                            <div class="events__info">
                                <div class="events__info-meta mb-25 d-flex align-items-center justify-content-between">
                                    <div class="events__info-price">
                                        <h5>Quick info</h5>
                                    </div>
                                </div>
                                <div class="events__info-content mb-35">
                                    <ul>
                                        <li class="d-flex align-items-center">
                                            <div class="events__info-icon">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                                    <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z" />
                                                    <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 " />
                                                </svg>
                                            </div>
                                            <div class="events__info-item">
                                                <h5><span>End: </span> {{date_format(date_create($event->end_date), "M d, Y")}}</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="events__info-icon">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                                    <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z" />
                                                    <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 " />
                                                </svg>
                                            </div>
                                            <div class="events__info-item">
                                                <h5><span>Time:</span> 10:45 AM-01:30 PM</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="events__info-icon">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                                    <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z" />
                                                    <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 " />
                                                </svg>
                                            </div>
                                            <div class="events__info-item">
                                                <h5><span>Venue: </span> {{$event->venue}}</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="d-none events__sidebar-widget white-bg">
                            <div class="events__sponsor">
                                <h3 class="events__sponsor-title">Sponsors</h3>
                                <div class="events__sponsor-thumb mb-35">
                                    <img src="assets/img/events/sponsor-logo.png" alt="">
                                </div>
                                <div class="events__sponsor-info">
                                    <h3>Thomas R. Toe</h3>
                                    <h4>Email: <span><a href="https://themepure.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="37444247475845437752534254565b1954585a">[email&#160;protected]</a></span></h4>
                                    <div class="events__social d-xl-flex align-items-center">
                                        <h4>Share:</h4>
                                        <ul>
                                            <li><a href="#" class="fb"><i class="social_facebook"></i></a></li>
                                            <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                                            <li><a href="#" class="pin"><i class="social_pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event details area end -->

    <!-- cta area start -->
    <section class="cta__area mb--120">
        <div class="container">
            <div class="cta__inner blue-bg fix">
                <div class="cta__shape">
                    <img src="assets/img/cta/cta-shape.png" alt="">
                </div>
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8">
                        <div class="cta__content">
                            <h3 class="cta__title">You can be your own Guiding star with our help</h3>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-4">
                        <div class="cta__more d-md-flex justify-content-end p-relative z-index-1">
                            <a href="contact.html" class="e-btn e-btn-white">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->


</main>

@endsection
