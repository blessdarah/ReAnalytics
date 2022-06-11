@extends('layouts.landing')

@section('hero')
{{-- title --}}
<div class="mt-8 text-center lg:my-16 xl:my-28">
    <span class="inline-block w-8 h-1 mx-auto bg-red-600"></span>
    <h3 class="relative mb-3 text-4xl font-bold text-center text-indigo-900 ">{{$service->name ?? __('Temporal name')}}</h3>
    <ul class="flex items-center justify-center space-x-3">
        <li class="text-blue-400 hover:underline">
            <a href="#">{{ __('Home /') }}</a>
        </li>
        <li class="text-blue-300 hover:underline">
            <a href="#">{{ __('blog') }}</a>
        </li>
    </ul>
</div>
@endsection


@section('content')
<article class="container px-8 mx-auto mt-8 lg:px-36 lg:my-16">

    <span class="flex items-center justify-center w-16 h-16 mb-8 text-red-700 bg-red-100">
        <i class="inline-block bx bx-printer bx-md"></i>
    </span>

    {{-- service detail --}}
    <div class="flex content-between space-x-20">

        {{-- left --}}
        <div class="lg:w-8/12 prose">
            <img src="{{asset($service->image)}}" alt="Service cover image">
            {!! Illuminate\Support\Str::markdown($service->detail) ?? 'No data' !!}
            <a href="#" class="px-8 py-4 mt-12 text-center text-white transition-all bg-blue-600 rounded-lg hover:bg-blue-800">
                <i class="bx bx-hand"></i>
                {{ __('request service') }}
            </a>
        </div>
    </div>

</article>
@endsection
