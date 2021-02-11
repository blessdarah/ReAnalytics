@extends('layouts.landing')

@section('styles')
    <style>
        .testimonial-img {
            width: 60px;
            height: 60px;
        }

    </style>
@endsection


@section('content')

    <section class="inner-banner gray-bg text-center">
        <div class="thm-container">
            <div class="breadcumb">
                <a href="{{ route('welcome') }}">Home</a>
                <span class="sep">-</span>
                <span class="page-name">Services</span>
            </div><!-- /.breadcumb -->
            <h3>Find out more on the services we offer</h3>
        </div><!-- /.thm-container -->
    </section><!-- /.inner-banner -->

    <section class="services-style-one white-bg sec-pad">
        <div class="thm-container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-service-style-one">
                            <div class="img-box">
                                <img src="{{ asset($service->image) }}" alt="Awesome Image" />
                                {{-- <a href="{{ $service->url() }}" class="read-more">+</a>
                                --}}
                                <a href="{{ $service->url() }}" class="read-more">+</a>
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <a href="{{ $service->url() }}">
                                    <h3>{{ $service->name }}</h3>
                                </a>
                                <p>{!! Str::words($service->detail, 20) !!}</p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-service-style-one -->
                    </div><!-- /.col-md-4 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.services-style-one -->

    <section class="testimonials-style-one sec-pad">
        <div class="thm-container">
            <div class="sec-title text-center">
                <span>what people say</span>
                <h3>Testimonials</h3>
            </div><!-- /.sec-title text-center -->
            <div class="testimonials-style-one-carousel owl-theme owl-carousel">
                @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="single-testimonials-style-one">
                            <p>{{ $testimonial->body }}</p>
                            <h3>{{ $testimonial->author }}</h3>
                            <span>Client</span>
                            <img src="{{ asset($testimonial->image) }}" alt="Awesome Image"
                                class="img-fluid testimonial-img" />
                        </div><!-- /.single-testimonials-style-one -->
                    </div><!-- /.item -->
                @endforeach
            </div><!-- /.testimonials-style-one-carousel -->
        </div><!-- /.thm-container -->
    </section><!-- /.testimonials-style-one -->
@endsection
