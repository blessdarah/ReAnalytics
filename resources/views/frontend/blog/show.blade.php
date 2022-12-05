@extends('layouts.app')

@section('content')
    <!-- page title area start -->
    <div class="mx-auto w-full px-8 lg:max-w-7xl">
        <img src="{{$post->image}}" class="max-w-full h-auto rounded-2xl shadow mb-8" alt="{{$service->title}}">
        <h3 class="text-4xl font-extrabold text-dark my-6">{{$post->title}}</h3>
        <section class="prose prose-zinc">
            {!! $post->content !!}
        </section>
    </div>
    <!-- page title area end -->
@endsection
