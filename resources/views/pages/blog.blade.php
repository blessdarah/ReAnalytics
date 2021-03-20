@extends('layouts.landing')

@section('hero')
    {{-- title --}}
    <div class="mt-8 text-center lg:my-16 xl:my-28">
        <span class="inline-block w-8 h-1 mx-auto bg-red-600"></span>
        <h3 class="relative mb-3 text-2xl font-semibold text-center text-indigo-900 ">
            {{ __('Our blog') }}
        </h3>
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
    <div class="container px-8 mx-auto mt-8 lg:px-36 lg:my-16">
        <ul class="flex flex-col justify-center w-5/6 mx-auto space-y-20">
            @for ($i = 0; $i < 6; $i++)
                {{-- article --}}
            <li>
                <article class="flex flex-col justify-center space-x-8 lg:flex-row">
                    <img src="https://picsum.photos/350" alt="blog cover" class="responsive">

                    {{-- article body --}}
                    <div class="flex flex-col justify-evenly">
                        {{-- article header --}}
                        <div class="-mt-3">
                            <span class="inline-block w-8 h-1 bg-red-600 "></span>
                            <h3 class="relative mb-3 text-2xl font-semibold text-indigo-900 ">
                                {{ __('How to effectively analyze your project data') }}
                            </h3>
                            <p class="text-sm font-semibold text-gray-400">Feb, 2 2021</p>
                        </div>

                        {{-- tags --}}
                        <ul class="flex items-center my-4 space-x-2">
                            <li>
                                <a href="#"
                                    class="px-6 py-2 text-sm text-blue-400 bg-blue-200 bg-opacity-50 text-opacity-95 hover:bg-blue-400 hover:text-blue-100">
                                    <i class="bx bx-purchase-tag"></i>
                                    {{ __('data analysis') }}
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-6 py-2 text-sm text-blue-400 bg-blue-200 bg-opacity-50 text-opacity-95 hover:bg-blue-400 hover:text-blue-100">
                                    <i class="bx bx-purchase-tag"></i>
                                    {{ __('ms excel') }}
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-6 py-2 text-sm text-blue-400 bg-blue-200 bg-opacity-50 text-opacity-95 hover:bg-blue-400 hover:text-blue-100">
                                    <i class="bx bx-purchase-tag"></i>
                                    {{ __('project') }}
                                </a>
                            </li>
                        </ul>
                        {{-- tags end --}}

                        <p class="mt-4 mb-8 text-gray-600">
                            {{ __('One advanced diverted domestic sex repeated bringing you old. Possible
                            procured her trifling laughter thoughts property she met way. Companions shy
                            had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself
                            dearest an windows by. Wooded ladies she basket season age her uneasy saw') }}
                        </p>

                        <a href="{{ route('blog.show', Str::slug('Post title')) }}" class="inline-block px-8 py-3 text-center text-white transition-all bg-blue-600 w-max hover:bg-blue-800 justify-self-end">
                            <i class="bx bx-book-reader"></i>
                            {{ __('read this post') }}
                        </a>
                    </div>
                </article>
            </li>
            @endfor
        </ul>

        {{-- pagination --}}
        <ul class="flex items-center justify-center my-16 space-x-4">
            <li>
                <a href="#" class="flex items-center justify-center w-8 h-8 text-blue-500 bg-white border border-blue-500 hover:bg-blue-500 hover:text-blue-200">1</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center w-8 h-8 text-blue-200 bg-blue-500 border border-blue-500">2</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center w-8 h-8 text-blue-500 bg-white border border-blue-500 hover:bg-blue-500 hover:text-blue-200">3</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center w-8 h-8 text-blue-500 bg-white border border-blue-500 hover:bg-blue-500 hover:text-blue-200">4</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center w-8 h-8 text-blue-500 bg-white border border-blue-500 hover:bg-blue-500 hover:text-blue-200">5</a>
            </li>
        </ul>
        {{-- pagination end --}}
    </div>
@endsection

