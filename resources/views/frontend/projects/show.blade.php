@extends('layouts.app')


@section('content')
<!-- page title area start -->
<!-- page title area end -->

<!-- blog area start -->
<section class="blog__area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="course__wrapper">
                    <div class="page__title-content mb-25">
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="course-grid.html">Projects</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$project->name}}</li>
                                </ol>
                            </nav>
                        </div>
                        <span class="page__title-pre">Development</span>
                        <h5 class="page__title-3">{{$project->name}}</h5>
                    </div>
                    <div class="course__img w-img mb-30">
                        <img src="{{asset($project->image)}}" alt="">
                    </div>
                    <div class="course__tab-content mb-95">
                        <div class="tab-content" id="courseTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="course__description">
                                    {!! $project->detail !!}
                                    <div class="course__tag-2 mb-35 mt-35">
                                        <i class="fal fa-tag"></i>
                                        <a href="#">Big data,</a>
                                        <a href="#">Data analysis,</a>
                                        <a href="#">Data modeling</a>
                                    </div>
                                </div>
                            </div>
                            <div class="course__share d-flex alignt-items-center justify-content-between">
                                <h3>Share :</h3>
                                <ul>
                                    <li><a href="#" class="fb d-flex align-items-center justify-content-center"><i class="social_facebook"></i></a></li>
                                    <li><a href="#" class="tw d-flex align-items-center justify-content-center"><i class="social_twitter"></i></a></li>
                                    <li><a href="#" class="pin d-flex align-items-center justify-content-center"><i class="social_pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
                @include('frontend.projects.sidebar')
            </div>
        </div>
    </div>
</section>
<!-- blog area end -->
@endsection
</maink>
