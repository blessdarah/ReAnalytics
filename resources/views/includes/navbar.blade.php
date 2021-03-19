 <header
     class="fixed inset-0 flex flex-col items-center justify-center h-screen px-4 py-4 bg-white lg:static md:h-auto md:bg-transparent lg:flex-row md:justify-start lg:w-9/12 lg:mx-auto" id="navbar">
         {{-- navbar --}}
     <nav class="flex flex-col flex-grow my-8 space-y-8 font-semibold text-center lg:items-center lg:flex-row lg:space-y-0 lg:space-x-8 lg:my-0 lg:ml-16">
         <p id="logo" class="font-bold text-center text-gray-800 uppercase lg:text-left">
             <a href="{{ route('welcome') }}">
                <img src="{{ asset('assets/logo.png') }}" alt="reanalytics logo" class="h-8 lg:h-12 fluid">
            </a>
         </p>
         <a href="#" class="text-gray-900 border-b-4 border-red-500 hover:text-blue-700">{{ __('home') }}</a>
         <a href="#" class="border-b-4 border-transparent text-gray hover:text-blue-700">{{ __('about') }}</a>
         <a href="#" class="border-b-4 border-transparent text-gray hover:text-blue-700">{{ __('services') }}</a>
         <a href="#" class="border-b-4 border-transparent text-gray hover:text-blue-700">{{ __('blog') }}</a>
         <a href="#" class="border-b-4 border-transparent text-gray hover:text-blue-700">{{ __('reviews') }}</a>
         <a href="#" class="border-b-4 border-transparent text-gray hover:text-blue-700">{{ __('contact') }}</a>
        </nav>

        <a href="{{ route('login') }}" class="px-8 py-3 text-center text-white transition-all bg-blue-600 rounded-lg hover:bg-blue-800 justify-self-end">
            {{ __('login') }}
        </a>

 </header>
