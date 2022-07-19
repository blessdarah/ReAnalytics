@extends('layouts.app')

@section('content')
<!-- page title area start -->
<section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="{{asset('frontend/assets/img/page-title/page-title.jpg')}}" style="background-image: url(&quot;assets/img/page-title/page-title.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="page__title-wrapper mt-110">
                    <h3 class="page__title">Projects</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Projects</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title area end -->

<!-- course area start -->
<section class="course__area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="course__tab-conent">
                    <div class="tab-content" id="courseTabContent">
                        <div class="tab-pane fade" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                            <div class="row">
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                        <div class="course__thumb w-img p-relative fix">
                                            <a href="course-details.html">
                                                <img src="assets/img/course/course-1.jpg" alt="">
                                            </a>
                                            <div class="course__tag">
                                                <a href="#">Art &amp; Design</a>
                                            </div>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__meta d-flex align-items-center justify-content-between">
                                                <div class="course__lesson">
                                                    <span><i class="far fa-book-alt"></i>43 Lesson</span>
                                                </div>
                                                <div class="course__rating">
                                                    <span><i class="icon_star"></i>4.5 (44)</span>
                                                </div>
                                            </div>
                                            <h3 class="course__title"><a href="course-details.html">Become a product Manager learn the skills &amp; job.</a></h3>
                                            <div class="course__teacher d-flex align-items-center">
                                                <div class="course__teacher-thumb mr-15">
                                                    <img src="assets/img/course/teacher/teacher-1.jpg" alt="">
                                                </div>
                                                <h6><a href="instructor-details.html">Jim Séchen</a></h6>
                                            </div>
                                        </div>
                                        <div class="course__more d-flex justify-content-between align-items-center">
                                            <div class="course__status">
                                                <span>Free</span>
                                            </div>
                                            <div class="course__btn">
                                                <a href="course-details.html" class="link-btn">
                                                    Know Details
                                                    <i class="far fa-arrow-right"></i>
                                                    <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                        <div class="course__thumb w-img p-relative fix">
                                            <a href="course-details.html">
                                                <img src="assets/img/course/course-2.jpg" alt="">
                                            </a>
                                            <div class="course__tag">
                                                <a href="#" class="sky-blue">Mechanical</a>
                                            </div>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__meta d-flex align-items-center justify-content-between">
                                                <div class="course__lesson">
                                                    <span><i class="far fa-book-alt"></i>72 Lesson</span>
                                                </div>
                                                <div class="course__rating">
                                                    <span><i class="icon_star"></i>4.5 (44)</span>
                                                </div>
                                            </div>
                                            <h3 class="course__title"><a href="course-details.html">Fundamentals of music theory Learn new</a></h3>
                                            <div class="course__teacher d-flex align-items-center">
                                                <div class="course__teacher-thumb mr-15">
                                                    <img src="assets/img/course/teacher/teacher-2.jpg" alt="">
                                                </div>
                                                <h6><a href="instructor-details.html">Barry Tone</a></h6>
                                            </div>
                                        </div>
                                        <div class="course__more d-flex justify-content-between align-items-center">
                                            <div class="course__status d-flex align-items-center">
                                                <span class="sky-blue">$32.00</span>
                                                <span class="old-price">$68.00</span>
                                            </div>
                                            <div class="course__btn">
                                                <a href="course-details.html" class="link-btn">
                                                    Know Details
                                                    <i class="far fa-arrow-right"></i>
                                                    <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                        <div class="course__thumb w-img p-relative fix">
                                            <a href="course-details.html">
                                                <img src="assets/img/course/course-7.jpg" alt="">
                                            </a>
                                            <div class="course__tag">
                                                <a href="#" class="blue-2">Development</a>
                                            </div>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__meta d-flex align-items-center justify-content-between">
                                                <div class="course__lesson">
                                                    <span><i class="far fa-book-alt"></i>43 Lesson</span>
                                                </div>
                                                <div class="course__rating">
                                                    <span><i class="icon_star"></i>4.4 (40)</span>
                                                </div>
                                            </div>
                                            <h3 class="course__title"><a href="course-details.html">Bases Matemáticas dios Álgebra Ecuacion</a></h3>
                                            <div class="course__teacher d-flex align-items-center">
                                                <div class="course__teacher-thumb mr-15">
                                                    <img src="assets/img/course/teacher/teacher-7.jpg" alt="">
                                                </div>
                                                <h6><a href="instructor-details.html">Samuel Serif</a></h6>
                                            </div>
                                        </div>
                                        <div class="course__more d-flex justify-content-between align-items-center">
                                            <div class="course__status d-flex align-items-center">
                                                <span class="blue-2">$46.00</span>
                                                <span class="old-price">$68.00</span>
                                            </div>
                                            <div class="course__btn">
                                                <a href="course-details.html" class="link-btn">
                                                    Know Details
                                                    <i class="far fa-arrow-right"></i>
                                                    <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                        <div class="course__thumb w-img p-relative fix">
                                            <a href="course-details.html">
                                                <img src="assets/img/course/course-3.jpg" alt="">
                                            </a>
                                            <div class="course__tag">
                                                <a href="#" class="green">Development</a>
                                            </div>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__meta d-flex align-items-center justify-content-between">
                                                <div class="course__lesson">
                                                    <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                                </div>
                                                <div class="course__rating">
                                                    <span><i class="icon_star"></i>3.5 (55)</span>
                                                </div>
                                            </div>
                                            <h3 class="course__title"><a href="course-details.html">Strategy law and organization Foundation</a></h3>
                                            <div class="course__teacher d-flex align-items-center">
                                                <div class="course__teacher-thumb mr-15">
                                                    <img src="assets/img/course/teacher/teacher-3.jpg" alt="">
                                                </div>
                                                <h6><a href="instructor-details.html">Elon Gated</a></h6>
                                            </div>
                                        </div>
                                        <div class="course__more d-flex justify-content-between align-items-center">
                                            <div class="course__status d-flex align-items-center">
                                                <span class="green">$46.00</span>
                                                <span class="old-price">$68.00</span>
                                            </div>
                                            <div class="course__btn">
                                                <a href="course-details.html" class="link-btn">
                                                    Know Details
                                                    <i class="far fa-arrow-right"></i>
                                                    <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                        <div class="course__thumb w-img p-relative fix">
                                            <a href="course-details.html">
                                                <img src="assets/img/course/course-4.jpg" alt="">
                                            </a>
                                            <div class="course__tag">
                                                <a href="#" class="blue">Marketing</a>
                                            </div>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__meta d-flex align-items-center justify-content-between">
                                                <div class="course__lesson">
                                                    <span><i class="far fa-book-alt"></i>22 Lesson</span>
                                                </div>
                                                <div class="course__rating">
                                                    <span><i class="icon_star"></i>4.5 (42)</span>
                                                </div>
                                            </div>
                                            <h3 class="course__title"><a href="course-details.html">The business Intelligence analyst Course 2022</a></h3>
                                            <div class="course__teacher d-flex align-items-center">
                                                <div class="course__teacher-thumb mr-15">
                                                    <img src="assets/img/course/teacher/teacher-4.jpg" alt="">
                                                </div>
                                                <h6><a href="instructor-details.html">Eleanor Fant</a></h6>
                                            </div>
                                        </div>
                                        <div class="course__more d-flex justify-content-between align-items-center">
                                            <div class="course__status d-flex align-items-center">
                                                <span class="blue">$62.00</span>
                                                <span class="old-price">$97.00</span>
                                            </div>
                                            <div class="course__btn">
                                                <a href="course-details.html" class="link-btn">
                                                    Know Details
                                                    <i class="far fa-arrow-right"></i>
                                                    <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                        <div class="course__thumb w-img p-relative fix">
                                            <a href="course-details.html">
                                                <img src="assets/img/course/course-8.jpg" alt="">
                                            </a>
                                            <div class="course__tag">
                                                <a href="#" class="yellow">Marketing</a>
                                            </div>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__meta d-flex align-items-center justify-content-between">
                                                <div class="course__lesson">
                                                    <span><i class="far fa-book-alt"></i>22 Lesson</span>
                                                </div>
                                                <div class="course__rating">
                                                    <span><i class="icon_star"></i>4.5 (42)</span>
                                                </div>
                                            </div>
                                            <h3 class="course__title"><a href="course-details.html">The business Intelligence analyst Course 2022</a></h3>
                                            <div class="course__teacher d-flex align-items-center">
                                                <div class="course__teacher-thumb mr-15">
                                                    <img src="assets/img/course/teacher/teacher-8.jpg" alt="">
                                                </div>
                                                <h6><a href="instructor-details.html">Brian Cumin</a></h6>
                                            </div>
                                        </div>
                                        <div class="course__more d-flex justify-content-between align-items-center">
                                            <div class="course__status d-flex align-items-center">
                                                <span class="yellow">$62.00</span>
                                                <span class="old-price">$97.00</span>
                                            </div>
                                            <div class="course__btn">
                                                <a href="course-details.html" class="link-btn">
                                                    Know Details
                                                    <i class="far fa-arrow-right"></i>
                                                    <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                        <div class="course__thumb w-img p-relative fix">
                                            <a href="course-details.html">
                                                <img src="assets/img/course/course-5.jpg" alt="">
                                            </a>
                                            <div class="course__tag">
                                                <a href="#" class="orange">Audio &amp; Music</a>
                                            </div>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__meta d-flex align-items-center justify-content-between">
                                                <div class="course__lesson">
                                                    <span><i class="far fa-book-alt"></i>18 Lesson</span>
                                                </div>
                                                <div class="course__rating">
                                                    <span><i class="icon_star"></i>4.5 (37)</span>
                                                </div>
                                            </div>
                                            <h3 class="course__title"><a href="course-details.html">Build your media and Public presence</a></h3>
                                            <div class="course__teacher d-flex align-items-center">
                                                <div class="course__teacher-thumb mr-15">
                                                    <img src="assets/img/course/teacher/teacher-5.jpg" alt="">
                                                </div>
                                                <h6><a href="instructor-details.html">Pelican Steve</a></h6>
                                            </div>
                                        </div>
                                        <div class="course__more d-flex justify-content-between align-items-center">
                                            <div class="course__status d-flex align-items-center">
                                                <span class="orange">$62.00</span>
                                                <span class="old-price">$97.00</span>
                                            </div>
                                            <div class="course__btn">
                                                <a href="course-details.html" class="link-btn">
                                                    Know Details
                                                    <i class="far fa-arrow-right"></i>
                                                    <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                        <div class="course__thumb w-img p-relative fix">
                                            <a href="course-details.html">
                                                <img src="assets/img/course/course-6.jpg" alt="">
                                            </a>
                                            <div class="course__tag">
                                                <a href="#" class="pink">UX Design</a>
                                            </div>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__meta d-flex align-items-center justify-content-between">
                                                <div class="course__lesson">
                                                    <span><i class="far fa-book-alt"></i>13 Lesson</span>
                                                </div>
                                                <div class="course__rating">
                                                    <span><i class="icon_star"></i>4.5 (72)</span>
                                                </div>
                                            </div>
                                            <h3 class="course__title"><a href="course-details.html">Creative writing through Storytelling</a></h3>
                                            <div class="course__teacher d-flex align-items-center">
                                                <div class="course__teacher-thumb mr-15">
                                                    <img src="assets/img/course/teacher/teacher-6.jpg" alt="">
                                                </div>
                                                <h6><a href="instructor-details.html">Shahnewaz Sakil</a></h6>
                                            </div>
                                        </div>
                                        <div class="course__more d-flex justify-content-between align-items-center">
                                            <div class="course__status d-flex align-items-center">
                                                <span class="pink">$46.00</span>
                                                <span class="old-price">$72.00</span>
                                            </div>
                                            <div class="course__btn">
                                                <a href="course-details.html" class="link-btn">
                                                    Know Details
                                                    <i class="far fa-arrow-right"></i>
                                                    <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                        <div class="course__thumb w-img p-relative fix">
                                            <a href="course-details.html">
                                                <img src="assets/img/course/course-9.jpg" alt="">
                                            </a>
                                            <div class="course__tag">
                                                <a href="#" class="blue-2">UX Design</a>
                                            </div>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__meta d-flex align-items-center justify-content-between">
                                                <div class="course__lesson">
                                                    <span><i class="far fa-book-alt"></i>25 Lesson</span>
                                                </div>
                                                <div class="course__rating">
                                                    <span><i class="icon_star"></i>4.5 (35)</span>
                                                </div>
                                            </div>
                                            <h3 class="course__title"><a href="course-details.html">Creative writing through Storytelling</a></h3>
                                            <div class="course__teacher d-flex align-items-center">
                                                <div class="course__teacher-thumb mr-15">
                                                    <img src="assets/img/course/teacher/teacher-9.jpg" alt="">
                                                </div>
                                                <h6><a href="instructor-details.html">Hilary Ouse</a></h6>
                                            </div>
                                        </div>
                                        <div class="course__more d-flex justify-content-between align-items-center">
                                            <div class="course__status d-flex align-items-center">
                                                <span class="blue-2">$46.00</span>
                                                <span class="old-price">$72.00</span>
                                            </div>
                                            <div class="course__btn">
                                                <a href="course-details.html" class="link-btn">
                                                    Know Details
                                                    <i class="far fa-arrow-right"></i>
                                                    <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                            <div class="row">
                                @foreach($projects as $project)
                                <div class="col-xxl-12">
                                    <div class="course__item white-bg mb-30 fix">
                                        <div class="row gx-0">
                                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                    <a href="{{$project->url()}}">
                                                        <img src="{{asset($project->image)}}" alt="">
                                                    </a>
                                                    <div class="course__tag">
                                                        <a href="#">{{$project->category ?? 'category'}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-8 col-xl-8 col-lg-8">
                                                <div class="course__right">
                                                    <div class="course__content course__content-3">
                                                        <div class="course__meta d-flex align-items-center">
                                                            <div class="course__lesson mr-20">
                                                                <span><i class="fa fa-calendar"></i>Date: {{$project->formatDate($project->start_date)}}</span>
                                                                <span> - {{$project->formatDate($project->end_date)}}</span>
                                                            </div>
                                                        </div>
                                                        <h3 class="course__title course__title-3">
                                                            <a href="{{$project->url()}}">{{$project->name}}</a>
                                                        </h3>
                                                        <div class="course__summary mb-4">
                                                            <p>{{$project->summary}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                        <div class="course__status">
                                                            <span>{{$project->status}}</span>
                                                        </div>
                                                        <div class="course__btn">
                                                            <a href="{{$project->url()}}" class="link-btn">
                                                                Know Details
                                                                <i class="far fa-arrow-right"></i>
                                                                <i class="far fa-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- course area end -->

@endsection
