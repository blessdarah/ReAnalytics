@extends('layouts.app')


@section('content')
<section class="signup__area po-rel-z1 pt-100 pb-145">
    {{-- <div class="sign__shape">
        <img class="man-1" src="{{asset('frontend/assets/img/icon/sign/man-1.png')}}" alt="">
        <img class="man-2" src="{{asset('frontend/assets/img/icon/sign/man-2.png')}}" alt="">
        <img class="circle" src="{{asset('frontent/assets/img/icon/sign/circle.png')}}" alt="">
        <img class="zigzag" src="{{asset('frontend/assets/img/icon/sign/zigzag.png')}}" alt="">
        <img class="dot" src="{{asset('frontend/assets/img/icon/sign/dot.png')}}" alt="">
        <img class="bg" src="{{asset('frontend/assets/img/icon/sign/sign-up.png')}}" alt="">
    </div> --}}

    <div class="mx-auto lg:w-2/6">
        <div class="rounded-lg p-4 my-4 lg:my-8 lg:rounded-xl">
            <div class="text-center mb-8">
                <h2 class="font-bold h2">Admin login</h2>
                <p class="text-gray-500">Signin here to have access to your dashobard</p>
            </div>
            <!-- input fields -->
            <form action="{{route('login')}}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="email">Email</label>
                    @error('email')
                        <p class="font-small text-red-400 my-1">{{$message}}</p>
                    @enderror
                    <input id="email" name="email" type="email" value="{{old('email') ?? ''}}" class="rounded color-gray-700 py-1 px-2 h-12 border border-gray-700 bg-white block w-full">
                </div>

                <div class="mb-4">
                    <label for="password">Password</label>
                    @error('password')
                        <p class="font-small text-red-400 my-1">{{$message}}</p>
                    @enderror
                    <input id="password" name="password" type="password" class="rounded color-gray-700 py-1 px-2 h-12 border border-gray-700 bg-white block w-full">
                </div>

                <div class="flex items-center justify-between mb-4">
                    <div class="flex align-center">
                        <input class="m-check-input" type="checkbox" id="m-agree">
                        <label class="ml-2 mb-0 text-gray-500" for="m-agree">Keep me signed in </label>
                    </div>
                    <a href="#" class="text-blue-500">Forgot your password?</a>
                </div>
                <button class="rounded w-full bg-blue-700 text-white py-3 hover:bg-blue-900 transition duration-300 ease-in-out">Sign In</button>
                <a href="{{route('register')}}" class="block text-blue-500 mt-4 text-center underline hover:text-blue-600 transition duration-300 ease-in-out">Or register</a>
            </form>
        </div>
    </div>
</section>
@endsection
