<div class="container relative px-8 mx-auto mt-8 overflow-hidden lg:px-36 lg:my-36">
    <div class="grid-cols-12 gap-8 mt-10 md:mt-16 lg:mt-24 lg:grid">
        {{-- left side --}}
        <div
            class="flex flex-col justify-center col-span-12 px-4 text-center lg:text-left lg:ml-auto md:px-0 md:col-span-6">
            <h1 class="my-4 text-3xl font-bold leading-relaxed text-indigo-900 uppercase lg:text-4xl">
                {{ __('Data analysis') }}<br class="hidden lg:block xl:hidden">
                {{ __('and project management') }}
            </h1>
            <p class="block mb-4 text-gray-600 lg:text-lg lg:my-8 lg:w-4/5">
                {{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla dolorum, incidunt cumque at aliquam voluptatum aut suscipit ut quos unde?') }}
            </p>

            <div class="mb-16 text-center md:mt-4 lg:text-left md:mb-0 ">
                <a href="#"
                    class="px-8 py-4 mr-4 text-center text-white transition-all bg-blue-600 rounded-lg hover:bg-blue-800">
                    <i class="bx bx-book-open"></i>
                    {{ __('get quote') }}
                </a>
                <a href="#"
                    class="px-8 py-4 mr-4 text-center text-white transition-all bg-red-600 rounded-lg hover:bg-red-800">
                    <i class="bx bx-phone"></i>
                    {{ __('contact us') }}
                </a>
            </div>
        </div>

        {{-- right section --}}
        <div class="col-span-12 md:col-span-6">
            <img src="{{ asset('assets/Data-analysis-process.svg') }}" alt="data analysis illutration" class="relative transform scale-125 xl:scale-150 max-h-80 -z-10 xl:-right-16">
        </div>
    </div>
</div>
