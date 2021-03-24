<header x-data="{open: true}" x-show="open"
    class="container fixed inset-0 z-50 flex flex-col items-center justify-center h-screen px-8 py-4 mx-auto bg-white bg-wave-white lg:static md:h-auto md:bg-transparent lg:flex-row md:justify-start lg:px-36"
    id="navbar">
    {{-- navbar --}}
    <nav
        class="flex-col flex-grow hidden my-8 space-y-8 font-semibold text-center md:flex lg:items-center lg:flex-row lg:space-y-0 lg:space-x-8 lg:my-0">
        <p id="logo" class="font-bold text-center text-gray-800 uppercase lg:text-left">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('assets/logo.png') }}" alt="reanalytics logo" class="h-8 lg:h-12 fluid">
            </a>
        </p>
        <a href="{{ route('welcome') }}"
            class="text-gray-900 border-b-4 border-red-500 hover:text-blue-700">{{ __('home') }}</a>
        <a href="{{ route('our-services') }}"
            class="border-b-4 border-transparent text-gray hover:text-blue-700">{{ __('services') }}</a>
        <a href="#" class="border-b-4 border-transparent text-gray hover:text-blue-700">{{ __('pricing') }}</a>
        <a href="{{ route('blog') }}"
            class="border-b-4 border-transparent text-gray hover:text-blue-700">{{ __('blog') }}</a>
        <a href="{{ route('about-us') }}"
            class="border-b-4 border-transparent text-gray hover:text-blue-700">{{ __('about us') }}</a>
        <a href="{{ route('contact-us') }}"
            class="border-b-4 border-transparent text-gray hover:text-blue-700">{{ __('contact') }}</a>
    </nav>

    <a href="{{ route('login') }}"
        class="hidden px-8 py-3 text-center text-white transition-all bg-blue-600 rounded-lg md:inline-block hover:bg-blue-800 justify-self-end">
        {{ __('login') }}
    </a>

    {{-- close buttons --}}
    <span @click="open = false"
        class="fixed flex items-center justify-center w-8 h-8 text-blue-100 bg-blue-500 rounded-full shadow-md cursor-pointer lg:hidden top-5 right-3 hover:bg-blue-600 hover:text-white hover:shadow-lg active:shadow-sm active:bg-blue-700">
        <i class="bx bx-x"></i>
    </span>
</header>

{{-- logo and menu on small screen --}}
<div class="flex items-center justify-between md:hidden">
    <p id="logo" class="font-bold text-center text-gray-800 uppercase lg:text-left">
        <a href="{{ route('welcome') }}">
            <img src="{{ asset('assets/logo.png') }}" alt="reanalytics logo" class="h-8 lg:h-12 fluid">
        </a>
    </p>

    <button @click="open = true" class="px-3 py-2 text-blue-100 bg-blue-500 rounded-lg hover:bg-blue-600">
        {{ __('menu') }}
    </button>
</div>
{{-- logo and menu on small screen end --}}
