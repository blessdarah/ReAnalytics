<div class="grid-cols-7 gap-8 mt-10 md:mt-16 lg:mt-24 lg:grid hero lg:pl-20">
    {{-- left side --}}
    <div class="flex flex-col justify-center px-4 text-center lg:text-left lg:col-span-3 left lg:ml-24 md:px-0">
        <h1 class="my-4 text-3xl font-bold leading-relaxed text-indigo-900 uppercase lg:text-5xl">
            {{ __('Data analysis') }}<br class="hidden lg:block xl:hidden">
            {{ __('and project management') }}
        </h1>
        <p class="block mb-4 text-gray-600 lg:text-lg lg:my-8 lg:w-4/5">
            {{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla dolorum, incidunt cumque at aliquam voluptatum aut suscipit ut quos unde?') }}
        </p>

        <div class="mb-16 text-center md:mt-4 lg:text-left md:mb-0 ">
            <a href="#" class="px-8 py-4 mr-4 text-center text-white transition-all bg-blue-600 rounded-lg hover:bg-blue-800">
                <i class="bx bx-book-open"></i>
                {{ __('get quote') }}
            </a>
            <a href="#" class="px-8 py-4 mr-4 text-center text-white transition-all bg-red-600 rounded-lg hover:bg-red-800">
                <i class="bx bx-phone"></i>
                {{ __('contact us') }}
            </a>
        </div>
    </div>
    {{-- right section --}}
    <div class="lg:col-span-4 right">
        <img src="{{ asset('assets/Data-analysis-process.svg') }}" alt="data analysis illutration" class="responsive">
    </div>
</div>
