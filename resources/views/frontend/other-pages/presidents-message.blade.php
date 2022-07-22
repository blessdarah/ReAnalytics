@extends('layouts.app')

@section('styles')
<style>
    .teacher__bio img {
        width: 100%;
        max-width: 100%;
        height: auto;
    }
</style>
@endsection
@section('content')
<section class="teacher__area pt-100 pb-110">
    <div class="page__title-shape">
        <img class="page-title-shape-5 d-none d-sm-block" src="{{asset('frontend/assets/img/page-title/page-title-shape-1.png')}}" alt="">
        <img class="page-title-shape-6" src="{{asset('frontend/assets/img/page-title/page-title-shape-6.png')}}" alt="">
        <img class="page-title-shape-3" src="{{asset('frontend/assets/img/page-title/page-title-shape-3.png')}}" alt="">
        <img class="page-title-shape-7" src="{{asset('frontend/assets/img/page-title/page-title-shape-4.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="teacher__details-thumb p-relative w-img pr-30">
                    <img src="{{asset($message->image)}}" alt="">
                    <div class="teacher__details-shape">
                        <img class="teacher-details-shape-1" src="{{asset('frontend/assets/img/teacher/details/shape/shape-1.png')}}" alt="">
                        <img class="teacher-details-shape-2" src="{{asset('frontend/assets/img/teacher/details/shape/shape-2.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="teacher__wrapper">
                    <div class="teacher__top d-md-flex align-items-end justify-content-between">
                        <div class="teacher__info">
                            <h4>{{ucfirst($message->author)}}'s Message</h4>
                            <span>Last updated: {{$message->updated_at->format('M d, Y')}}</span>
                        </div>
                    </div>
                    <div class="teacher__bio">
                        {!! $message->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
