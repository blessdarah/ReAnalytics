@extends('layouts.landing')


@section('content')
    <section class="inner-banner gray-bg text-center">
        <div class="thm-container">
            <div class="breadcumb">
                <a href="{{ route('welcome') }}">Home</a>
                <span class="sep">-</span>
                <span class="page-name">Let's keep in touch</span>
            </div><!-- /.breadcumb -->
            <h3>Contact us</h3>
        </div><!-- /.thm-container -->
    </section><!-- /.inner-banner -->

    <section class="contact-page-wrapper sec-pad">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-8">
                    <form action="inc/sendemail.php" class="contact-form row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Name" name="name" />
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <input type="text" placeholder="Email Address" name="email" />
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-12">
                            <textarea name="message" placeholder="Type message here" name="message"></textarea>
                            <button class="thm-btn yellow-bg" type="submit">Send Nessage</button>
                        </div><!-- /.col-md-12 -->
                    </form><!-- /.contact-form -->
                </div><!-- /.col-md-8 -->
                <div class="col-md-4">
                    <div class="contact-sidebar">
                        <div class="single-contact-info">
                            <div class="title">
                                <h3>Address</h3>
                            </div><!-- /.title -->
                            <p>Suite 20 Bitcoin Street West - 018 <br /> United States</p>
                        </div><!-- /.single-contact-info -->
                        <div class="single-contact-info">
                            <div class="title">
                                <h3>Phone</h3>
                            </div><!-- /.title -->
                            <p>Local: 2800 256 508 <br /> Mobile: 666 777 888</p>
                        </div><!-- /.single-contact-info -->
                        <div class="single-contact-info">
                            <div class="title">
                                <h3>Email</h3>
                            </div><!-- /.title -->
                            <p>needhelp@bitcoin.com <br /> inquiry@bitcoin.com</p>
                        </div><!-- /.single-contact-info -->
                        <div class="single-contact-info social-widget">
                            <div class="title">
                                <h3>Follow</h3>
                            </div><!-- /.title -->
                            <div class="social">
                                <a href="#" class="fa fa-twitter"></a>
                                <!--
                                                                        --><a href="#" class="fa fa-facebook"></a>
                                <!--
                                                                        --><a href="#" class="fa fa-youtube-play"></a>
                                <!--
                                                                        --><a href="#" class="fa fa-pinterest"></a>
                            </div><!-- /.social -->
                        </div><!-- /.single-contact-info -->
                    </div><!-- /.contact-sidebar -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.contact-page-wrapper -->
@endsection
