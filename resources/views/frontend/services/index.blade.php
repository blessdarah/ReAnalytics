@extends('layouts.app')

@section('content')
<livewire:page-banner title="Services" pageName="Services" />

<section class="what__area pt-115">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div class="section__title-wrapper mb-60 text-center">
                    <h2 class="section__title">What is <span class="yellow-bg-big">Skilline? <img src="{{asset('frontend/assets/img/shape/yellow-bg-2.png')}}" alt=""></span></h2>
                    <p>Sloshed faff about me old mucker blatant bubble and squeak hanky panky some dodgy chav bevvy arse chimney pot I, ruddy plastered buggered smashing blow off I'm telling up the kyver he legged it bleeder jolly good, </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($services as $service)
            <div class="col-xxl-5 offset-xl-1 col-xl-5 offset-xl-1 col-lg-6">
                <div class="what__item transition-3 mb-30 p-relative fix">
                    <div class="what__thumb w-img">
                        <img src="{{asset($service->image)}}" alt="">
                    </div>
                    <div class="what__content p-absolute text-center">
                        <h3 class="what__title white-color">{{$servict->title}}</h3>
                        <a href="{{$service->url()}}" class="e-btn e-btn-border-2">Learn more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="why__area pt-125">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 col-lg-6 col-md-8">
                <div class="why__content pr-50 mt-40">
                    <div class="section__title-wrapper mb-30">
                        <span class="section__sub-title">Why Choses Me</span>
                        <h2 class="section__title">Tools for <span class="yellow-bg yellow-bg-big">Teachers<img src="assets/img/shape/yellow-bg.png" alt=""></span> and Learners</h2>
                        <p>Oxford chimney pot Eaton faff about blower blatant brilliant, bubble and squeak he legged it Charles bonnet arse at public school bamboozled.</p>
                    </div>
                    <div class="why__btn">
                        <a href="{{route('app.contact-us')}}" class="e-btn e-btn-3 mr-30">Get in touch</a>
                        <a href="{{route('app.about')}}" class="link-btn">
                            Learn More
                            <i class="far fa-arrow-right"></i>
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8">
                <div class="why__thumb">
                    <img src="{{asset('frontend/assets/img/why/why.png')}}" alt="">
                    <img class="why-green" src="{{asset('frontend/assets/img/why/why-shape-green.png')}}" alt="">
                    <img class="why-pink" src="{{asset('frontend/assets/img/why/why-shape-pink.png')}}" alt="">
                    <img class="why-dot" src="{{asset('frontend/assets/img/why/why-shape-dot.png')}}" alt="">
                    <img class="why-line" src="{{asset('frontend/assets/img/why/why-shape-line.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
