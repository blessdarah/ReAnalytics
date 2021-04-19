@extends('layouts.landing')


@section('content')
    <div class="container px-8 mx-auto mt-8 lg:px-36 lg:mt-16">
        <div class="grid grid-cols-2 gap-8">
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

        </div>
    </div>
@endsection
