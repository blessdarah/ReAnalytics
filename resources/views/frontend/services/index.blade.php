@extends('layouts.app')

@section('content')
    <livewire:page-banner title="Services" subTitle="Here is the pages subtitle" />
    {{-- sevices card --}}
    <section class="bg-white">
        <div class="px-8 py-10 mx-auto lg:max-w-screen-xl sm:max-w-xl md:max-w-full sm:px-12 md:px-16 lg:py-20 sm:py-16">
            <div class="grid gap-x-8 gap-y-12 sm:gap-y-16 md:grid-cols-2 lg:grid-cols-3">
                @forelse($services as $service)
                    <div class="relative">
                        <a href="{{$service->url()}}" class="block overflow-hidden group rounded-xl">
                            <img src="{{asset($service->image)}}" class="object-cover w-full h-56 transition-all duration-300 ease-out sm:h-64 group-hover:scale-110" alt="">
                        </a>
                        <div class="relative mt-5">
                            <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">{{$service->created_at->diffForHumans()}}</p>
                            <a href="{{$service->url()}}" class="block mb-3 hover:underline">
                                <h2 class="text-2xl font-bold leading-5 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">{{$service->name}}</h2>
                            </a>
                            <p class="mb-4 text-gray-700">{{$service->description}}</p>
                            <a href="{{$service->url()}}" class="font-medium underline">Read More</a>
                        </div>
                    </div>
                @empty
                    <div>No service available</div>
                @endforelse
            </div>
        </div>
    </section>
    {{-- sevices card end --}}

    <section class="h-auto py-16 sm:py-20 lg:px-0 px-10 bg-[#fcf8f0]">
        <div class="w-full max-w-2xl mx-auto flex space-y-8 sm:space-y-12 flex-col items-center">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl tracking-tight max-w-lg lg:max-w-full lg:leading-tight sm:text-center">We are happy to always be in touch with our services<br></h2>
            <a href="#_" class="block sm:w-auto w-full text-center px-6 py-3 flex-shrink-0 bg-amber-400 text-white rounded font-bold shadow-xl text-lg hover:bg-gray-900 uppercase">Book a service today</a>
            <p class="text-gray-500 text-base lg:text-xl md:text-center text-left">We are keen to your requirements and meet them always.<br></p>
        </div>
    </section>

@endsection
