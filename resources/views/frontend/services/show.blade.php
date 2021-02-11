@extends('layouts.landing')

@section('content')
    <section class="inner-banner gray-bg text-center">
        <div class="thm-container">
            <div class="breadcumb">
                <a href="{{ route('welcome') }}">Home</a>
                <span class="sep">-</span>
                <span class="page-name">Services</span>
            </div><!-- /.breadcumb -->
            <h3>{{ $service->name }}</h3>
        </div><!-- /.thm-container -->
    </section><!-- /.inner-banner -->


    <section class="impact-of-bitcoin sec-pad">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title-box">
                        <span>Blockchain Technology</span>
                        <h3>{{ $service->name }}</h3>
                        <p>{!! $service->detail !!}</p>
                        <button class="thm-btn" onclick="window.history.back()">back</button>
                    </div><!-- /.title-box -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" class="img-fluid">
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section>
@endsection
