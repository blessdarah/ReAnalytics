<footer class="relative py-8">
    <img src="{{ asset('assets/footer-bg.jpg') }}" alt="footer background" class="absolute inset-0 responsive -z-10">

    {{-- footer content --}}
    <div class="container grid grid-cols-12 mx-auto my-8 mt-8 text-blue-100 lg:px-16 lg:mt-36">
        <div class="col-span-12 lg:col-span-5">
            <p class="mb-3 text-xl text-white uppercase font-seimibold">{{ __('About us') }}</p>
            <p class="mb-3 lg:w-4/5 lg:mb-10">
                {{ __('Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et
                dolore magna') }}
            </p>

            {{-- social icons --}}
            <ul class="inline-flex space-x-4">
                <li>
                    <a href="#"
                        class="flex items-center justify-center w-10 h-10 text-blue-900 transition-all bg-white rounded-full">
                        <i class="bx bxl-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center w-10 h-10 text-blue-500 transition-all bg-white rounded-full">
                        <i class="bx bxl-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center w-10 h-10 text-pink-500 transition-all bg-white rounded-full">
                        <i class="bx bxl-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center w-10 h-10 text-red-500 transition-all bg-white rounded-full">
                        <i class="bx bxl-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center w-10 h-10 text-indigo-600 transition-all bg-white rounded-full">
                        <i class="bx bx-phone"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-span-12 lg:col-span-2">
            <ul class="inline-flex flex-col space-y-4 text-blue-200">
                <li>
                    <a href="#" class="uppercase hover:underline">{{ __('Faqs') }}</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">{{ __('Our team') }}</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">{{ __('Our mission') }}</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">{{ __('Our vision') }}</a>
                </li>
            </ul>
        </div>

        <div class="col-span-12 lg:col-span-2">
            <ul class="inline-flex flex-col space-y-4 text-blue-200">
                <li>
                    <a href="#" class="hover:underline">{{ __('Services') }}</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">{{ __('Blog') }}</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">{{ __('Events and news') }}</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">{{ __('Reviews') }}</a>
                </li>
            </ul>
        </div>

        <div class="col-span-12 lg:col-span-3">
            <a href="#"
                class="px-8 py-4 text-center text-white transition-all bg-green-500 rounded-lg hover:bg-green-600">
                <i class="bx bx-phone"></i>
                {{ __('Contact us') }}
            </a>
        </div>
    </div>

    {{-- scrol to top button --}}
    <a href="#navbar" class="absolute flex items-center justify-center w-8 h-8 text-center text-blue-500 bg-white rounded-full right-48 -top-4">
        <i class='bx bx-up-arrow-alt' ></i>
    </a>
</footer>
