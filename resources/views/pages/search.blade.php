@extends('layouts.landing')

@section('content')
    <section class="inner-banner gray-bg text-center">
        <div class="thm-container">
            <div class="breadcumb">
                <a href="{{ route('welcome') }}">Home</a>
                <span class="sep">-</span>
                <span class="page-name">search</span>
            </div><!-- /.breadcumb -->
            <h3>Found {{ count($posts) }} results for "{{ $phrase }}"</h3>
        </div><!-- /.thm-container -->
    </section><!-- /.inner-banner -->

    <section class="sec-pad blog-style-one">
        <div class="thm-container">
            <div class="row masonary-layout">
                @forelse ($posts as $post)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-blog-style-one">
                            <div class="img-box">
                                <img src="{{ $post->image }}" alt="Awesome Image" />
                                <a href="{{ $post->url() }}" class="read-more">+</a>
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <div class="meta-info">
                                    <a href="#"><i class="fa fa-user"></i> by admin</a>
                                    <a href="#"><i class="fa fa-calendar"></i> {{ $post->created_at->format('d M Y') }}</a>
                                </div><!-- /.meta-info -->
                                <a href="{{ $post->url() }}">
                                    <h3>{{ $post->title }}</h3>
                                </a>
                                {!! Str::words($post->summary, 15) !!}
                            </div><!-- /.text-box -->
                        </div><!-- /.single-blog-style-one -->
                    </div><!-- /.col-md-3 -->
                @empty
                    <div class="col-md-8 offset-md-2 justify-content-center">
                        <div class="alert alert-info px-3 py-4 my-5">
                            <p class="text-center mb-0">No post is available yet</p>
                        </div>
                    </div>
                @endforelse


            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.sec-pad blog-style-one -->
@endsection
