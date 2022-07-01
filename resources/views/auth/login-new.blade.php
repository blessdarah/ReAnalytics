@extends('layouts.app')


@section('content')
<section class="signup__area po-rel-z1 pt-100 pb-145">
    <div class="sign__shape">
        <img class="man-1" src="{{asset('frontend/assets/img/icon/sign/man-1.png')}}" alt="">
        <img class="man-2" src="{{asset('frontend/assets/img/icon/sign/man-2.png')}}" alt="">
        <img class="circle" src="{{asset('frontent/assets/img/icon/sign/circle.png')}}" alt="">
        <img class="zigzag" src="{{asset('frontend/assets/img/icon/sign/zigzag.png')}}" alt="">
        <img class="dot" src="{{asset('frontend/assets/img/icon/sign/dot.png')}}" alt="">
        <img class="bg" src="{{asset('frontend/assets/img/icon/sign/sign-up.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                <div class="section__title-wrapper text-center mb-55">
                    <h2 class="section__title">Admin login</h2>
                    <p>Signin here to have access to your dashobard</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div class="sign__wrapper white-bg">
                    <div class="sign__form">
                        <form action="{{route('login')}}" method="POST">
                            @csrf

                            <div class="sign__input-wrapper mb-25">
                                <h5>Email</h5>
                                @error('email')
                                <p class="mb-0 text-danger small">{{$message}}</p>
                                @enderror
                                <div class="sign__input">
                                    <div class="fx-relay-email-input-wrapper">
                                        <input name="email" value="{{old('email') ?? ''}}" type="text" placeholder="e-mail address" style="padding-right: 80px;">
                                        <div class="fx-relay-icon" style="top: 0px; bottom: 0px;"><button class="fx-relay-button" id="fx-relay-button" type="button" title="Generate new mask" style="background-image: url(&quot;moz-extension://65d42beb-b178-4072-891d-c9b9fd1f8a46/images/logo-image-fx-relay.svg&quot;);"></button></div>
                                    </div>
                                    <i class="fal fa-envelope"></i>
                                </div>
                            </div>
                            <div class="sign__input-wrapper mb-10">
                                <h5>Password</h5>
                                @error('password')
                                <p class="mb-0 text-danger small">{{$message}}</p>
                                @enderror
                                <div class="sign__input">
                                    <input name="password" type="password" placeholder="Password">
                                    <i class="fal fa-lock"></i>
                                </div>
                            </div>
                            <div class="sign__action d-sm-flex justify-content-between mb-30">
                                <div class="sign__agree d-flex align-items-center">
                                    <input class="m-check-input" type="checkbox" id="m-agree">
                                    <label class="m-check-label" for="m-agree">Keep me signed in
                                    </label>
                                </div>
                                <div class="sign__forgot">
                                    <a href="#">Forgot your password?</a>
                                </div>
                            </div>
                            <button class="e-btn w-100"> <span></span> Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
