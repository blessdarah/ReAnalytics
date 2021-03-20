@extends('layouts.landing')

@section('hero')
    @include('includes.hero')
@endsection

@section('content')

    {{-- services --}}
    <div class="container px-8 mx-auto mt-8 lg:px-36 lg:mt-16">
        {{-- service title --}}
        <div class="text-center">
            <span class="inline-block w-16 h-1 mx-auto bg-red-600"></span>
            <h3 class="relative mb-8 text-2xl font-semibold text-center text-indigo-900 lg:mb-12">{{ __('Our services') }}
            </h3>
        </div>

        {{-- service cards --}}
        <div class="grid grid-cols-12 gap-4 mb-12">
            @for ($i = 0; $i < 6; $i++)
                <div
                    class="col-span-12 px-4 py-6 transition-all group md:col-span-6 lg:col-span-4 hover:bg-white hover:shadow-md">
                    <span class="flex items-center justify-center w-16 h-16 text-red-700 bg-red-100">
                        <i class="inline-block bx bx-printer bx-md"></i>
                    </span>
                    <a href="#" class="inline-block mt-4 font-semibold text-gray-800 group-hover:underline">
                        {{ __('Data analysis') }}
                    </a>
                    <p class="mt-2 text-gray-600">
                        {{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates excepturi quaerat soluta maxime quod.') }}
                    </p>
                </div>
            @endfor
        </div>

        {{-- btn: contact us --}}
        <a href="#" class="px-8 py-4 mt-12 text-center text-white transition-all bg-blue-600 rounded-lg hover:bg-blue-800">
            <i class="bx bx-phone"></i>
            {{ __('contact us') }}
        </a>
        {{-- services end --}}
    </div>
    {{-- services end --}}

    {{-- banner --}}
    <section class="relative flex flex-col items-center justify-center py-20 mt-32 lg:py-48">
        <img src="{{ asset('assets/banner.jpg') }}" alt="banner" class="absolute inset-0 responsive -z-10">

        {{-- banner__content --}}
        <div class="text-center text-white">
            <span class="inline-block w-16 h-1 mx-auto bg-red-600"></span>
            <h3 class="relative mb-2 text-3xl font-semibold text-center">{{ __('Our referral program') }}</h3>
            <p class="mb-6 text-xl">
                {{ __('The team that makes the work we do, have value to the customers we serve.') }}
            </p>

            {{-- banner buttons --}}
            <div class="flex items-center justify-center space-x-2 md:space-x-8">
                <a href="#"
                    class="px-8 py-4 text-center text-blue-600 transition-all bg-white rounded-lg hover:text-white hover:bg-blue-800">
                    <i class="bx bx-face"></i>
                    {{ __('Join the program') }}
                </a>
                <a href="#" class="px-8 py-4 text-center text-white transition-all bg-red-600 rounded-lg hover:bg-red-800">
                    <i class="bx bx-right-arrow"></i>
                    {{ __('Learn more') }}
                </a>
            </div>
        </div>
    </section>
    {{-- banner end --}}

    {{-- how it works --}}
    <section class="grid grid-cols-8 gap-8 my-10 md:my-16 lg:my-16 xl:my-20">
        {{-- left section --}}
        <div class="relative col-span-8 md:col-span-4 top-20">
            {{-- fixed background --}}
            <div class="w-3/5 bg-pink-100 h-3/5"></div>

            {{-- left image --}}
            <img src="{{ asset('assets/how-it-works.jpg') }}"
                alt="white mug with renalytix logo on a table, with user typing on a laptop"
                class="absolute z-10 w-4/5 ml-20 xl:w-4/6 top-36">
        </div>

        {{-- right section --}}
        <div class="col-span-8 md:col-span-4">
            <span class="inline-block w-16 h-1 bg-red-600"></span>
            <h3 class="relative mb-8 text-3xl font-semibold">{{ __('How it works') }}</h3>

            {{-- options --}}
            <ul class="flex flex-col space-y-8">
                {{-- step one --}}
                <li>
                    <div class="inline-block py-4 pl-3 pr-8 mb-6 font-semibold uppercase bg-gray-200">
                        <p class="-mb-1 text-sm">{{ __('step') }}</p>
                        <p class="mt-0 text-xl">{{ __('one') }}</p>
                    </div>
                    <h4 class="mb-2 text-lg font-semibold text-gray-800">
                        {{ __('Request a service or multiple services') }}
                    </h4>
                    <p class="text-gray-500 lg:w-4/6">
                        {{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi possimus magnam reiciendis obcaecati odit.') }}
                    </p>
                </li>

                {{-- step two --}}
                <li>
                    <div class="inline-block py-4 pl-3 pr-8 mb-6 font-semibold uppercase bg-gray-200">
                        <p class="-mb-1 text-sm">{{ __('step') }}</p>
                        <p class="mt-0 text-xl">{{ __('two') }}</p>
                    </div>
                    <h4 class="mb-2 text-lg font-semibold text-gray-800">
                        {{ __('Get the quote from us') }}
                    </h4>
                    <p class="text-gray-500 lg:w-4/6">
                        {{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi possimus magnam reiciendis obcaecati odit.') }}
                    </p>
                </li>

                {{-- step three --}}
                <li>
                    <div class="inline-block py-4 pl-3 pr-8 mb-6 font-semibold uppercase bg-gray-200">
                        <p class="-mb-1 text-sm">{{ __('step') }}</p>
                        <p class="mt-0 text-xl">{{ __('three') }}</p>
                    </div>
                    <h4 class="mb-2 text-lg font-semibold text-gray-800">
                        {{ __('Project engagement') }}
                    </h4>
                    <p class="text-gray-500 lg:w-4/6">
                        {{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi possimus magnam reiciendis obcaecati odit.') }}
                    </p>
                </li>
            </ul>
            {{-- options end --}}
        </div>
    </section>
    {{-- how it works end --}}

    {{-- plans --}}
    <section class="container px-8 mx-auto my-8 mt-8 lg:px-36 lg:my-36 xl:my-52">
        <div class="text-center">
            <span class="inline-block w-16 h-2 mx-auto bg-red-600"></span>
            <h3 class="relative mb-8 text-3xl font-semibold text-center uppercase lg:mb-16">{{ __('Common plans') }}</h3>
        </div>
        <div class="grid grid-cols-12 gap-8">
            {{-- price card --}}
            <div class="col-span-12 px-6 py-6 bg-white shadow-lg lg:px-12 lg:py-12 lg:col-span-4">
                <p class="text-center text-blue-500">
                    {{ __('Small business book keeping') }}
                </p>
                <p class="text-4xl font-semibold text-center text blue-900">
                    {{ __('30,000XFA') }}
                </p>

                <ul class="mt-6 font-semibold text-gray-600">
                    <li class="py-3 border-b border-gray-200">
                        {{ __('Data analysis') }}
                    </li>
                    <li class="py-3 border-b border-gray-200">
                        {{ __('Project typing') }}
                    </li>
                    <li class="py-3 border-b border-gray-200">
                        {{ __('Project formattng') }}
                    </li>
                    <li class="py-3 border-b border-gray-200">
                        {{ __('Guidance and support') }}
                    </li>
                    <li class="py-3">
                        {{ __('Printng and packaging') }}
                    </li>
                </ul>
                <a href="#"
                    class="inline-block w-full py-3 mt-4 text-center text-gray-800 bg-yellow-400 rounded-lg hover:bg-yellow-500">
                    <i class="bx bx-like"></i>
                    {{ __('pick this plan') }}
                </a>
            </div>

            {{-- price card --}}
            <div class="col-span-12 px-6 py-6 bg-white shadow-lg lg:px-12 lg:py-12 lg:col-span-4">
                <p class="text-center text-blue-500">
                    {{ __('Student projects') }}
                </p>
                <p class="text-4xl font-semibold text-center text blue-900">
                    {{ __('50,000XFA') }}
                </p>

                <ul class="mt-6 font-semibold text-gray-600">
                    <li class="py-3 border-b border-gray-200">
                        {{ __('Data analysis') }}
                    </li>
                    <li class="py-3 border-b border-gray-200">
                        {{ __('Project typing') }}
                    </li>
                    <li class="py-3 border-b border-gray-200">
                        {{ __('Project formattng') }}
                    </li>
                    <li class="py-3 border-b border-gray-200">
                        {{ __('Guidance and support') }}
                    </li>
                    <li class="py-3">
                        {{ __('Printng and packaging') }}
                    </li>
                </ul>
                <a href="#"
                    class="inline-block w-full py-3 mt-4 text-center text-white bg-blue-500 rounded-lg hover:bg-blue-600">
                    <i class="bx bx-like"></i>
                    {{ __('pick this plan') }}
                </a>
            </div>

            {{-- price card --}}
            <div class="col-span-12 px-6 py-6 bg-white shadow-lg lg:px-12 lg:py-12 lg:col-span-4">
                <p class="text-center text-blue-500">
                    {{ __('Enterprise Reportng') }}
                </p>
                <p class="text-4xl font-semibold text-center uppercase text blue-900">
                    {{ __('ask us') }}
                </p>

                <ul class="mt-6 font-semibold text-gray-600">
                    <li class="py-3 border-b border-gray-200">
                        {{ __('Data analysis') }}
                    </li>
                    <li class="py-3 border-b border-gray-200">
                        {{ __('Project typing') }}
                    </li>
                    <li class="py-3 border-b border-gray-200">
                        {{ __('Project formattng') }}
                    </li>
                    <li class="py-3 border-b border-gray-200">
                        {{ __('Guidance and support') }}
                    </li>
                    <li class="py-3">
                        {{ __('Printng and packaging') }}
                    </li>
                </ul>

                <a href="#"
                    class="inline-block w-full py-3 mt-4 text-center text-white bg-red-500 rounded-lg hover:bg-red-600">
                    <i class="bx bx-like"></i>
                    {{ __('pick this plan') }}
                </a>
            </div>
        </div>
    </section>
    {{-- plans end --}}

    {{-- testimonials --}}
    <section class="container px-8 mx-auto my-8 mt-8 lg:px-36 lg:my-36 xl:my-52">
        <div class="text-center">
            <span class="inline-block w-16 h-1 mx-auto bg-red-600"></span>
            <h3 class="relative mb-8 text-3xl font-semibold text-center uppercase lg:mb-16">{{ __('Testimonials') }}</h3>
        </div>
        <ul class="flex space-x-16">
            {{-- testimonial item --}}
            <li class="text-center">
                <img src="{{ asset('assets/testimonial-1.jpg') }}" alt="testimonial avatar"
                    class="h-16 mx-auto mb-4 border-2 border-white rounded-full shadow-sm w-26 lg:mb-8">
                <blockquote class="text-sm text-gray-600">
                    {{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati delectus natus modi quod') }}<br>
                    <p class="mt-4 font-bold">Jane Doe</p>
                </blockquote>

            </li>
            {{-- testimonial item --}}
            <li class="text-center">
                <img src="{{ asset('assets/testimonial-2.jpg') }}" alt="testimonial avatar"
                    class="h-16 mx-auto mb-4 border-2 border-white rounded-full shadow-sm w-26 lg:mb-8">
                <blockquote class="text-sm text-gray-600">
                    {{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati delectus natus modi quod') }}<br>
                    <p class="mt-4 font-bold">Jane Doe</p>
                </blockquote>

            </li>
            {{-- testimonial item --}}
            <li class="text-center">
                <img src="{{ asset('assets/testimonial-3.jpg') }}" alt="testimonial avatar"
                    class="h-16 mx-auto mb-4 border-2 border-white rounded-full shadow-sm w-26 lg:mb-8">
                <blockquote class="text-sm text-gray-600">
                    {{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati delectus natus modi quod') }}<br>
                    <p class="mt-4 font-bold">Jane Doe</p>
                </blockquote>

            </li>
        </ul>
    </section>
    {{-- testimonials end --}}

    {{-- get in touch --}}
    <section class="grid grid-cols-8 gap-8 my-10 md:my-16 lg:my-24">
        {{-- right section --}}
        <div class="col-span-8 md:col-span-4 selft-center">
            <div class="lg:w-9/12 lg:ml-auto lg:mt-28">
                <span class="inline-block w-16 h-1 mb-2 bg-red-600"></span>
                <h3 class="relative mb-8 text-6xl font-semibold uppercase">{{ __('Get in touch') }}<br class="hidden lg:block"> {{ __(' now') }}</h3>
                <p class="mb-8 text-gray-500 lg:pr-8 lg:w-4/5 lg:mb-12">
                    {{ __('Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et
                    dolore magna') }}
                </p>

                <a href="#" class="px-8 py-4 text-center text-gray-900 transition-all bg-green-500 rounded-lg hover:bg-green-600">
                    <i class="bx bx-phone"></i>
                    {{ __('Contact us') }}
                </a>
            </div>
        </div>

        {{-- left section --}}
        <div class="relative col-span-8 md:col-span-4 lg:mt-20">
            <div class="absolute right-0 w-3/5 ml-auto bg-pink-100 -z-10 h-3/5 -top-20"></div>
            <img src="{{ asset('assets/get-in-touch.jpg') }}"
                alt="white mug with renalytix logo on a table, with user typing on a laptop" class="w-4/5 responsive">
        </div>
    </section>
    {{-- get in touch end --}}

@endsection
