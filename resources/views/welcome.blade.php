@extends('layouts.landing')

@section('content')
    <div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one" data-ride="carousel">
        <div id="particles-js"></div><!-- /#particles-js -->
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active slide-1"
                style="background-image: url(img/laptop.png);background-position: right center;">

                <div class="carousel-caption">
                    <div class="thm-container">
                        <div class="box valign-middle">
                            <div class="content ">
                                <h3 data-animation="animated fadeInUp">Bitcoin private<br>key finder</h3>
                                <p data-animation="animated fadeInDown">Equipping and shaping the future generation<br>
                                    within
                                    seconds with our very highly<br>efficient and intuitive application</p>
                                <a href="{{ route('pages.softwares') }}" class="thm-btn"
                                    data-animation="animated fadeInDown">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slide-2" style="background-image: url(img/globe.png);background-position: right center;">

                <div class="carousel-caption">
                    <div class="thm-container">
                        <div class="box valign-middle">
                            <div class="content ">
                                <h3 data-animation="animated fadeInUp">Bitcoins are secure <br /> in your pocket</h3>
                                <p data-animation="animated fadeInDown">Excepteur sint occaecat cupidatat non proident sunt
                                    in culpa <br /> qui officia deserunt mollit anim id est laborum.</p>
                                <a href="{{ route('our-services') }}" class="thm-btn"
                                    data-animation="animated fadeInDown">Our services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>

        <ul class="carousel-indicators list-inline custom-navigation">
            <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li>
            <!--
                                                                                                                                                                                                                                                                        -->
            <li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li>
        </ul>
    </div>

    <section class="feature-style-one sec-pad text-center">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-feature-style-one">
                        <div class="icon-box">
                            <i class="bx bxs-bolt"></i>
                        </div><!-- /.icon-box -->
                        <h3>Extremely fast</h3>
                        <p>Generate your Bitcoin private key within seconds with our very highly efficient and intuitive
                            application.</p>
                    </div><!-- /.single-feature-style-one -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-feature-style-one">
                        <div class="icon-box bg-primary">
                            <i class='bx bx-check-shield'></i>
                        </div><!-- /.icon-box -->
                        <h3>Extremely secured</h3>
                        <p>what this tool does differently is that is faster more reliable and apply additional security to
                            cover or hide your tracks form any 3rd party trackers.</p>
                    </div><!-- /.single-feature-style-one -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-feature-style-one">
                        <div class="icon-box">
                            <i class='bx bx-stats'></i>
                        </div><!-- /.icon-box -->
                        <h3>Extremely Reliable</h3>
                        <p>To have easy access to this site make sure you explore its menu and have discover to other
                            features</p>
                    </div><!-- /.single-feature-style-one -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.feature-style-one -->

    <section class="about-style-one gray-bg sec-pad">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-style-one-content">
                        <span>Get to understand it</span>
                        <h3>How it works</h3>
                        <p>We have developed a tool that will generate randomly bitcoin private keys with balance and this
                            tool is not 100% guaranteed but we are assuring you that in a month you may be as lucky as a
                            Ginny owner or you may fail but you will generate random bitcoin private keys with balance of
                            any amount and some with nothing or already spend fund.</p>
                        <a href="#" class="thm-btn yellow-bg-hvr">Get Started</a>
                    </div><!-- /.about-style-one-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <img src="{{ asset('pics/video-poster.png') }}" alt="" class="moc-img img-fluid" />
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.about-style-one -->

    <section class="sec-pad blog-style-one">
        <div class="thm-container">
            <div class="sec-title text-center">
                <span>updates from blog</span>
                <h3>The future is here</h3>
            </div><!-- /.sec-title text-center -->
            <div class="row masonary-layout">
                @foreach ($posts as $post)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-blog-style-one">
                            <div class="img-box">
                                <img src="{{ asset($post->image) }}" alt="Awesome Image" />
                                <a href="{{ $post->url() }}" class="read-more">+</a>
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <div class="meta-info">
                                    <a href="#"><i class="fa fa-user"></i> by admin</a>
                                    <a href="#"><i class="fa fa-clock"></i>{{ $post->created_at->format('d M Y') }}</a>
                                </div><!-- /.meta-info -->
                                <a href="{{ $post->url() }}">
                                    <h3>{{ $post->title }}</h3>
                                </a>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-blog-style-one -->
                    </div><!-- /.col-md-3 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.sec-pad blog-style-one -->

    <section class="btc-calculator sec-pad">
        <div class="thm-container">
            <div class="sec-title text-center black">
                <span>Embrace the freedom</span>
                <h3>Request the product today</h3>
                <p>Get up to speed with our one-of-a-kind product. You will find it handly because it does more than just
                    saving time, it enables you to generate keys with just the press of a button</p>
                <a href="{{ route('contact-us') }}" class="thm-btn white-bg-hvr">Request software</a>
            </div><!-- /.sec-title -->

        </div><!-- /.thm-container -->
    </section><!-- /.btc-calculator -->

    <section class="how-it-works sec-pad">
        <div class="thm-container">
            <div class="sec-title text-center">
                <span>check our process</span>
                <h3>How It Works</h3>
            </div><!-- /.sec-title text-center -->
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-how-it-works text-center">
                        <div class="icon-box">
                            <i class='bx bxs-bullseye'></i>
                            <div class="count">01</div><!-- /.count -->
                        </div><!-- /.icon-box -->
                        <h3>Select your target product</h3>
                        <p>Find the product that works for you <br /> then make your demand</p>
                    </div><!-- /.single-how-it-works text-center -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-how-it-works text-center">
                        <div class="icon-box">
                            <i class='bx bx-message-rounded-dots'></i>
                            <div class="count">02</div><!-- /.count -->
                        </div><!-- /.icon-box -->
                        <h3>Send a message about your inquiry</h3>
                        <p>Demand has to be confirmed through a verified email address. Once done, you move to the next
                            step</p>
                    </div><!-- /.single-how-it-works text-center -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-how-it-works text-center">
                        <div class="icon-box">
                            <i class='bx bx-link'></i>
                            <div class="count">03</div><!-- /.count -->
                        </div><!-- /.icon-box -->
                        <h3>Get your unique download link</h3>
                        <p>We will process and send you a download link after proper payment has been established.</p>
                    </div><!-- /.single-how-it-works text-center -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.how-it-works -->

@endsection
