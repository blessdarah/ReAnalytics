 <header
     class="fixed inset-0 flex flex-col items-center justify-center h-screen px-4 py-4 bg-white lg:static md:h-auto md:bg-transparent lg:flex-row md:justify-start lg:px-20" id="navbar">
         {{-- navbar --}}
     <nav class="flex flex-col flex-grow my-8 space-y-8 text-center lg:flex-row lg:space-y-0 lg:space-x-8 lg:my-0 lg:ml-16">
         <p id="logo" class="font-bold text-center text-gray-800 uppercase lg:text-left">ReAnalytics</p>
         <a href="#" class="text-gray-600 hover:text-blue-700">{{ __('home') }}</a>
         <a href="#" class="text-gray-600 hover:text-blue-700">{{ __('about') }}</a>
         <a href="#" class="text-gray-600 hover:text-blue-700">{{ __('services') }}</a>
         <a href="#" class="text-gray-600 hover:text-blue-700">{{ __('blog') }}</a>
         <a href="#" class="text-gray-600 hover:text-blue-700">{{ __('reviews') }}</a>
         <a href="#" class="text-gray-600 hover:text-blue-700">{{ __('contact') }}</a>
        </nav>
        <a href="{{ route('login') }}" class="transition-all button button-blue justify-self-end hover:bg-blue-800">
            {{ __('login') }}
        </a>

 </header>
