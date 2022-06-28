@extends('layouts.app')


@section('content')
<!-- page title area start -->
<section class="page__title-area page__title-height-2 page__title-overlay d-flex align-items-center" data-background="{{asset($post->image)}}">
    <div class="page__title-shape">
        <img class="page-title-shape-1" src="{{asset('frontend/assets/img/page-title/page-title-shape-1.png') }}" alt="">
        <img class="page-title-shape-2" src="{{ asset('frontend/assets/img/page-title/page-title-shape-2.png') }}" alt="">
        <img class="page-title-shape-3" src="{{asset('frontend/assets/img/page-title/page-title-shape-3.png')}}" alt="">
        <img class="page-title-shape-4" src="{{asset('frontend/assets/img/page-title/page-title-shape-4.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-10 col-xl-10 col-lg-10 ">
                <div class="page__title-wrapper mt-110">
                    <span class="page__title-pre">{{$post->category->name}}</span>
                    <h3 class="page__title-2">{{$post->title}}</h3>
                    <div class="blog__meta d-flex align-items-center">
                        <div class="blog__author d-flex align-items-center mr-40">
                            <div class="blog__author-thumb mr-10">
                                <img src="{{asset('frontend/assets/img/blog/author/author-1.jpg') }}" alt="">
                            </div>
                            <div class="blog__author-info blog__author-info-2">
                                <h5>Admin</h5>
                            </div>
                        </div>
                        <div class="blog__date blog__date-2 d-flex align-items-center">
                            <i class="fal fa-clock"></i>
                            <span>{{$post->created_at->format('M d, Y')}}</span>
                        </div>
                    </div>
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
                <div class="blog__wrapper">
                    <div class="blog__text mb-4">
                        {!! $post->content !!}
                    </div>
                    <div class="blog__line"></div>
                    <div class="blog__meta-3 d-sm-flex justify-content-between align-items-center mb-80">
                        <div class="blog__tag-2">
                            <a href="#">Art & Design</a>
                            <a href="#">Education</a>
                            <a href="#">App</a>
                        </div>
                        <div class="blog__social d-flex align-items-center">
                            <h4>Share:</h4>
                            <ul>
                                <li><a href="#" class="d-flex align-items-center justify-content-center fb"><i class="social_facebook"></i></a></li>
                                <li><a href="#" class="d-flex align-items-center justify-content-center tw"><i class="social_twitter"></i></a></li>
                                <li><a href="#" class="d-flex align-items-center justify-content-center pin"><i class="social_pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__author-3 d-sm-flex grey-bg mb-90">
                        <div class="blog__author-thumb-3 mr-20">
                            <img src="{{asset('frontend/assets/img/blog/author/blog-author-1.jpg') }}" alt="">
                        </div>
                        <div class="blog__author-content">
                            <h4>Justin Case</h4>
                            <span>Author</span>
                            <p>So I said blower wellies a blinding shot jolly good argy-bargy he nicked it, in my flat don't get shirty with me tosser.</p>
                        </div>
                    </div>
                    <div class="blog__recent mb-65">
                        <div class="section__title-wrapper mb-40">
                            <h2 class="section__title">Related <span class="yellow-bg-sm">Post <img src="assets/img/shape/yellow-bg-4.png" alt=""> </span></h2>
                            <p>You don't have to struggle alone, you've got our assistance and help.</p>
                        </div>
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="blog__item white-bg mb-30 transition-3 fix">
                                    <div class="blog__thumb w-img fix">
                                        <a href="blog-details.html">
                                            <img src="assets/img/blog/blog-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="blog__content">
                                        <div class="blog__tag">
                                            <a href="#">Art & Design</a>
                                        </div>
                                        <h3 class="blog__title"><a href="blog-details.html">The Challenge Of Global Learning In Public Education</a></h3>

                                        <div class="blog__meta d-flex align-items-center justify-content-between">
                                            <div class="blog__author d-flex align-items-center">
                                                <div class="blog__author-thumb mr-10">
                                                    <img src="{{asset('frontend/assets/img/blog/author/author-1.jpg') }}" alt="">
                                                </div>
                                                <div class="blog__author-info">
                                                    <h5>Admin</h5>
                                                </div>
                                            </div>
                                            <div class="blog__date d-flex align-items-center">
                                                <i class="fal fa-clock"></i>
                                                <span>April 02, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="blog__item white-bg mb-30 transition-3 fix">
                                    <div class="blog__thumb w-img fix">
                                        <a href="blog-details.html">
                                            <img src="assets/img/blog/blog-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="blog__content">
                                        <div class="blog__tag">
                                            <a href="#" class="purple">Marketing</a>
                                        </div>
                                        <h3 class="blog__title"><a href="blog-details.html">Exactly How Technology Can Make Reading Better</a></h3>

                                        <div class="blog__meta d-flex align-items-center justify-content-between">
                                            <div class="blog__author d-flex align-items-center">
                                                <div class="blog__author-thumb mr-10">
                                                    <img src="assets/img/blog/author/author-2.jpg" alt="">
                                                </div>
                                                <div class="blog__author-info">
                                                    <h5>Barry Tone</h5>
                                                </div>
                                            </div>
                                            <div class="blog__date d-flex align-items-center">
                                                <i class="fal fa-clock"></i>
                                                <span>July 02, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="latest-comments mb-95">
                        <h3>3 Comments</h3>
                        <ul>
                            <li>
                                <div class="comments-box grey-bg">
                                    <div class="comments-info d-flex">
                                        <div class="comments-avatar mr-20">
                                            <img src="assets/img/blog/comments/comment-1.jpg" alt="">
                                        </div>
                                        <div class="avatar-name">
                                            <h5>Eleanor Fant</h5>
                                            <span class="post-meta"> July 14, 2022</span>
                                        </div>
                                    </div>
                                    <div class="comments-text ml-65">
                                        <p>So I said lurgy dropped a clanger Jeffrey bugger cuppa gosh David blatant have it, standard A bit of how's your father my lady absolutely.</p>
                                        <div class="comments-replay">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="children">
                                <div class="comments-box grey-bg">
                                    <div class="comments-info d-flex">
                                        <div class="comments-avatar mr-20">
                                            <img src="assets/img/blog/comments/comment-1.jpg" alt="">
                                        </div>
                                        <div class="avatar-name">
                                            <h5>Dominic</h5>
                                            <span class="post-meta">April 16, 2022 </span>
                                        </div>
                                    </div>
                                    <div class="comments-text ml-65">
                                        <p>David blatant have it, standard A bit of how's your father my lady absolutely.</p>
                                        <div class="comments-replay">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li class="children-2">
                                        <div class="comments-box grey-bg">
                                            <div class="comments-info d-flex">
                                                <div class="comments-avatar mr-20">
                                                    <img src="assets/img/blog/comments/comment-3.jpg" alt="">
                                                </div>
                                                <div class="avatar-name">
                                                    <h5>Von Rails</h5>
                                                    <span class="post-meta">April 18, 2022 </span>
                                                </div>
                                            </div>
                                            <div class="comments-text ml-65">
                                                <p>He nicked it get stuffed mate spend a penny plastered.!</p>
                                                <div class="comments-replay">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="blog__comment">
                        <h3>Write a Review</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="blog__comment-input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="blog__comment-input">
                                        <input type="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="blog__comment-input">
                                        <input type="text" placeholder="Website">
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="blog__comment-input">
                                        <textarea placeholder="Enter your comment ..."></textarea>
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="blog__comment-agree d-flex align-items-center mb-20">
                                        <input class="e-check-input" type="checkbox" id="e-agree">
                                        <label class="e-check-label" for="e-agree">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="blog__comment-btn">
                                        <button type="submit" class="e-btn">Post Comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
</maink>
