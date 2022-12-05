@extends('layouts.app')


@section('content')
<!-- page title area start -->
<div class="mx-auto w-full px-8 lg:max-w-7xl my-8">
    <div class="md:grid gap-8 grid-cols-5">
        <div class="col-span-3">
            <img src="{{asset($service->image)}}" data-aos="fade-right" class="max-w-full h-auto rounded-2xl shadow mb-8" alt="{{$service->title}}">
        </div>
        <div class="col-span-2" data-aos-delay="300">
            <h3 class="text-4xl font-extrabold text-dark my-6" data-aos="slide-down">{{$service->name}}</h3>
            <div class="prose prose-zinc text-gray-600 " data-aos="fade-up" data-aos-delay="200">
                {!! $service->detail !!}
            </div>

            <div>
                <button onclick="window.history.back()" data-aos="fade-up" data-aos-delay="300" class="my-4 text-center text-white bg-dark rounded-xl px-4 py-2 border-2 hover:bg-gray-100 hover:text-dark transition duration-200ms ease-in-out">back</button>    
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
@endsection
