@extends('layouts.landing')
@section('styles')
    <style>
        .row {
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
        }

        .row>.col-md-10 {
            margin: 0 auto;
        }

    </style>
@endsection
@section('content')
    <section class="inner-banner gray-bg text-center">
        <div class="thm-container">
            <div class="breadcumb">
                <a href="{{ route('welcome') }}">Home</a>
                <span class="sep">-</span>
                <span class="page-name">Vidoes</span>
            </div><!-- /.breadcumb -->
            <h3>{{ $video->title }}</h3>
        </div><!-- /.thm-container -->
    </section><!-- /.inner-banner -->


    <section class="impact-of-bitcoin sec-pad">
        <div class="thm-container">
            <div class="row justify-content-center">

                <div class="col-md-10">
                    <div class="title-box">
                        <span>Tutorial - product</span>
                        {!! $video->embed_link !!}
                    </div><!-- /.title-box -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-10">
                    <h3>{{ $video->title }}</h3>
                    {!! $video->description !!}
                    <button class="thm-btn" onclick="window.history.back()">back</button>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section>
@endsection
