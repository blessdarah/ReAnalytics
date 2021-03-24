@extends('layouts.landing')

@section('hero')
    {{-- title --}}
    <div class="mt-8 text-center lg:my-16 xl:my-28">
        <span class="inline-block w-16 h-1 mx-auto bg-red-600"></span>
        <h3 class="relative mb-4 text-2xl font-semibold text-center text-indigo-900 ">
            {{ __('Get to know us') }}
        </h3>
        <ul class="flex items-center justify-center space-x-3">
            <li class="text-blue-400 hover:underline">
                <a href="#">{{ __('Home /') }}</a>
            </li>
            <li class="text-blue-300 hover:underline">
                <a href="#">{{ __('about us') }}</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container px-8 mx-auto mt-8 lg:px-36 lg:my-36">
        <div class="grid grid-cols-2 gap-8">
            {{-- left --}}
            <div>
                <span class="inline-block w-16 h-1 bg-red-600"></span>
                <h3 class="relative mb-4 text-2xl font-semibold text-indigo-900 ">
                    {{ __('We are problem solvers') }}
                </h3>

                <p class="mb-8 text-gray-600">
                    {{ __('One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy.') }}
                </p>

                <a href="#"
                    class="px-8 py-4 mt-12 text-center text-white transition-all bg-blue-600 hover:bg-blue-800">
                    <i class="bx bx-hand"></i>
                    {{ __('request service') }}
                </a>
            </div>

            {{-- right --}}
            <picture>
                <img src="{{ asset('assets/get-in-touch.jpg') }}" alt="about us" class="responsive">
            </picture>
        </div>

        {{-- why choose us --}}
        <div class="grid grid-cols-2 gap-8 my-8 lg:my-20">
            {{-- left --}}
            <picture>
                <img src="{{ asset('assets/get-in-touch.jpg') }}" alt="about us" class="responsive">
            </picture>

            {{-- right --}}
            <div>
                <span class="inline-block w-16 h-1 bg-red-600"></span>
                <h3 class="relative mb-8 text-2xl font-semibold text-indigo-900 ">
                    {{ __('Why people choose us') }}
                </h3>

                {{-- our strong points --}}
                <ul class="flex flex-col space-y-6">
                    <li class="flex space-x-4">
                        <div class="flex items-center justify-center w-20 h-20 text-green-700 bg-green-100">
                            <i class="bx bx-like bx-md"></i>
                        </div>
                        <div class="flex-1">
                            <p class="mb-2 font-semibold text-gray-800">
                                {{ __('We are professionals') }}
                            </p>
                            <p class="text-gray-600">
                                {{ __('Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna') }}
                            </p>
                        </div>
                    </li>
                    <li class="flex space-x-4">
                        <div class="flex items-center justify-center w-20 h-20 text-green-700 bg-green-100">
                            <i class="bx bx-face bx-md"></i>
                        </div>
                        <div class="flex-1">
                            <p class="mb-2 font-semibold text-gray-800">
                                {{ __('We give results') }}
                            </p>
                            <p class="text-gray-600">
                                {{ __('Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna') }}
                            </p>
                        </div>
                    </li>
                    <li class="flex space-x-4">
                        <div class="flex items-center justify-center w-20 h-20 text-green-700 bg-green-100">
                            <i class="bx bx-shield bx-md"></i>
                        </div>
                        <div class="flex-1">
                            <p class="mb-2 font-semibold text-gray-800">
                                {{ __('We are trusted') }}
                            </p>
                            <p class="text-gray-600">
                                {{ __('Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna') }}
                            </p>
                        </div>
                    </li>
                </ul>
                {{-- our strong points end --}}
            </div>
        </div>
    </div>
@endsection
