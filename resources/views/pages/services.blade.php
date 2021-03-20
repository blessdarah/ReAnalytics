@extends('layouts.landing')

@section('hero')
    {{-- title --}}
    <div class="mt-8 text-center lg:my-16 xl:my-28">
        <span class="inline-block w-16 h-1 mx-auto bg-red-600"></span>
        <h3 class="relative mb-4 text-2xl font-semibold text-center text-indigo-900 ">
            {{ __('Our services') }}
        </h3>
        <p class="text-center text-gray-600 lg:w-2/6 lg:mx-auto">
            {{ __('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna') }}
        </p>
    </div>
@endsection

@section('content')
    {{-- services --}}
    <div class="container px-8 mx-auto mt-8 lg:px-36 lg:my-36">
        {{-- service cards --}}
        <div class="grid grid-cols-12 gap-4 mb-12 lg:gap-8">
            @for ($i = 0; $i < 6; $i++)
                <div
                    class="col-span-12 px-4 py-6 transition-all bg-white lg:px-8 lg:py-8 group md:col-span-6 lg:col-span-4 hover:shadow-md">
                    <span class="flex items-center justify-center w-16 h-16 text-red-700 bg-red-100">
                        <i class="inline-block bx bx-printer bx-md"></i>
                    </span>
                    <a href="#" class="inline-block mt-4 font-semibold text-gray-800 group-hover:underline">
                        {{ __('Data analysis') }}
                    </a>
                    <p class="mt-2 text-gray-600">
                        {{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates excepturi quaerat soluta maxime quod.') }}
                    </p>
                    <a href="{{ route('our-services.show', $i) }}" class="inline-block mt-4 text-blue-500 lg:mt-12">
                        <i class="bx bx-right-arrow-alt bx-sm"></i>
                    </a>
                </div>
            @endfor
        </div>

        {{-- btn: contact us --}}
        <a href="#"
            class="hidden px-8 py-4 mt-12 text-center text-white transition-all bg-blue-600 rounded-lg hover:bg-blue-800">
            <i class="bx bx-phone"></i>
            {{ __('contact us') }}
        </a>
        {{-- services end --}}
    </div>
    {{-- services end --}}

    {{-- our team --}}
    <section class="py-8 bg-blue-500">
        <div class="container px-8 mx-auto mt-8 lg:px-36 lg:my-36">

            {{-- section header --}}
            <div class="mb-10 text-center lg:mb-28">
                <span class="inline-block w-10 h-1 mx-auto bg-red-600"></span>
                <h3 class="relative mb-4 text-2xl font-semibold text-white ">
                    {{ __('Our Team') }}
                </h3>
                <p class="text-blue-100 md:w-2/6 lg:mx-auto">
                    {{ __('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor magna') }}
                </p>
            </div>
            {{-- section header end --}}

            <div class="grid grid-cols-12 gap-8">
                @for ($i = 0; $i < 6; $i++)
                    {{-- team member card --}}
                    <div
                        class="flex flex-col items-center content-center col-span-12 py-10 bg-white xl:py-16 md:col-span-6 lg:col-span-4">
                        <img src="https://picsum.photos/80" alt="member avatar"
                            class="w-20 h-20 mb-2 rounded-full lg:w-32 lg:h-32 responsive">

                        <div class="text-center">
                            <span class="inline-block w-6 h-1 mx-auto bg-red-600"></span>
                            <h5 class="relative text-xl font-semibold text-indigo-900 ">
                                {{ __('Jane Doe') }}
                            </h5>
                            <p class="text-blue-500">{{ __('Founder and CEO') }}</p>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
    </section>
    {{-- our team end --}}
@endsection
