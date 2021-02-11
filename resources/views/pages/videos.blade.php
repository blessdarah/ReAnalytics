@extends('layouts.landing')

@section('styles')
    <style>
        .testimonial-img {
            width: 60px;
            height: 60px;
        }

        .video iframe {
            max-width: 100% !important;
            height: auto !important;
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
                @foreach ($videos as $video)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="card single-service-style-one">
                            <div class="img-fluid video">
                                {!! $video->embed_link !!}
                            </div><!-- /.img-box -->
                            <div class="card-body text-box">
                                <a href="{{ $video->url() }}">
                                    <h3>{{ $video->title }}</h3>
                                </a>
                                <p>{!! Str::words($video->description, 20) !!}</p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-service-style-one -->
                    </div><!-- /.col-md-4 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.services-style-one -->
@endsection
