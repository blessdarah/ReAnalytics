@extends('layouts.app')


@section('content')

<!-- page title area start -->
<section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="{{asset('frontend/assets/img/page-title/page-title-2.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="page__title-wrapper mt-110">
                    <h3 class="page__title">Blog Grid</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title area end -->

<!-- blog area start -->
<section class="blog__area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="blog__wrapper">
                            <div class="blog__item white-bg mb-30 transition-3 fix">
                                <div class="blog__thumb w-img fix">
                                    <a href="{{$post->url()}}">
                                        <img src="{{asset($post->image) }}" alt="">
                                    </a>
                                </div>
                                <div class="blog__content">
                                    <div class="blog__tag">
                                        <a href="#">{{$post->category->name}}</a>
                                    </div>
                                    <h3 class="blog__title"><a href="{{$post->url()}}">{{$post->title}}</a></h3>

                                    <div class="blog__meta d-flex align-items-center justify-content-between">
                                        <div class="blog__author d-flex align-items-center">
                                            <div class="blog__author-thumb mr-10">
                                                <img src="{{ asset('frontend/assets/img/blog/author/author-1.jpg') }}" alt="">
                                            </div>
                                            <div class="blog__author-info">
                                                <h5>Admin</h5>
                                            </div>
                                        </div>
                                        <div class="blog__date d-flex align-items-center">
                                            <i class="fal fa-clock"></i>
                                            <span>{{$post->created_at->format('M d, Y')}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="basic-pagination wow fadeInUp mt-30" data-wow-delay=".2s">
                            <ul class="d-flex align-items-center">
                                <li class="prev">
                                    <a href="blog.html" class="link-btn link-prev">
                                        Prev
                                        <i class="arrow_left"></i>
                                        <i class="arrow_left"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>1</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="blog.html">
                                        <span>2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog.html">
                                        <span>3</span>
                                    </a>
                                </li>
                                <li class="next">
                                    <a href="blog.html" class="link-btn">
                                        Next
                                        <i class="arrow_right"></i>
                                        <i class="arrow_right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">

                @include('frontend.blog.sidebar')
            </div>
        </div>
    </div>
</section>
<!-- blog area end -->


@endsection
