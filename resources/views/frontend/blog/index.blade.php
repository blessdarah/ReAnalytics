@extends('layouts.app')


@section('content')

<livewire:page-banner title="Blog" subTitle="View all the blog content in our site" pageName="blog" />

<!-- blog area start -->
    <div class="grid gap-x-8 gap-y-12 grid-cols-1 md:grid-cols-6 bg-white px-8 py-6 md:px-36 md:py-12">
        <section class="md:col-span-5">
            <div class="">
                <div class="grid gap-x-8 gap-y-12 sm:gap-y-16 md:grid-cols-2 lg:grid-cols-3">
                    <div class="relative">
                        <a href="#_" class="block overflow-hidden group rounded-xl">
                            <img src="https://images.unsplash.com/photo-1465310477141-6fb93167a273?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;h=1700&amp;q=80" class="object-cover w-full h-56 transition-all duration-300 ease-out sm:h-64 group-hover:scale-110" alt="">
                        </a>
                        <div class="relative mt-5">
                            <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">July 20th 2021</p>
                              <a href="#" class="block mb-3 hover:underline">
                                <h2 class="text-2xl font-bold leading-5 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">Seeking Adventure</h2>
                              </a>
                            <p class="mb-4 text-gray-700">Seek out adventure and live a life that others envy. You only get one chance to reach for the sky. Explore, discover, and seek out adventure.</p>
                            <a href="#_" class="font-medium underline">Read More</a>
                        </div>
                    </div>
                    <div class="relative">
                        <a href="#_" class="block overflow-hidden group rounded-xl">
                            <img src="https://images.unsplash.com/photo-1577095972574-2fbdcf60c8ef?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;h=1700&amp;q=80" class="object-cover w-full h-56 transition-all duration-300 ease-out sm:h-64 group-hover:scale-110" alt="">
                        </a>
                        <div class="relative mt-5">
                            <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">July 20th 2021</p>
                              <a href="#" class="block mb-3 hover:underline">
                                <h2 class="text-2xl font-bold leading-5 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">Explore the deep</h2>
                              </a>
                            <p class="mb-4 text-gray-700">The massive deep blue is worth exploring at least one time in your life. It is full of excitement and mystery. Go out and explore the deep.</p>
                            <a href="#_" class="font-medium underline">Read More</a>
                        </div>
                    </div>
                    <div class="relative">
                        <a href="#_" class="block overflow-hidden group rounded-xl">
                            <img src="https://images.unsplash.com/photo-1462651567147-aa679fd1cfaf?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;h=1700&amp;q=80" class="object-cover w-full h-64 transition-all duration-300 ease-out group-hover:scale-110" alt="">
                        </a>
                        <div class="relative mt-5">
                            <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">July 20th 2021</p>
                              <a href="#" class="block mb-3 hover:underline">
                                <h2 class="text-2xl font-bold leading-5 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">Find Your Roots</h2>
                              </a>
                            <p class="mb-4 text-gray-700">Make sure to stay-grounded to your roots, but it's also important to understand that you are worth the success you have achieved.</p>
                            <a href="#_" class="font-medium underline">Read More</a>
                        </div>
                    </div>
                    <div class="relative">
                        <a href="#_" class="block overflow-hidden group rounded-xl">
                            <img src="https://images.unsplash.com/photo-1470104240373-bc1812eddc9f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;q=80" class="object-cover w-full h-64 transition-all duration-300 ease-out group-hover:scale-110" alt="">
                        </a>
                        <div class="relative mt-5">
                            <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">July 20th 2021</p>
                              <a href="#" class="block mb-3 hover:underline">
                                <h2 class="text-2xl font-bold leading-5 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">Inspire Greatness</h2>
                              </a>
                            <p class="mb-4 text-gray-700">Find others who seek out greatness and surround yourself with positive and successful people. This is key to inspiring greatness for others.</p>
                            <a href="#_" class="font-medium underline">Read More</a>
                        </div>
                    </div>
                    <div class="relative">
                        <a href="#_" class="block overflow-hidden group rounded-xl">
                            <img src="https://images.unsplash.com/photo-1530262929451-caf6b99b5136?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;q=80" class="object-cover w-full h-64 transition-all duration-300 ease-out group-hover:scale-110" alt="">
                        </a>
                        <div class="relative mt-5">
                            <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">July 20th 2021</p>
                              <a href="#" class="block mb-3 hover:underline">
                                <h2 class="text-2xl font-bold leading-5 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">Royalty in the Sky</h2>
                              </a>
                            <p class="mb-4 text-gray-700">Reach for the stars and find greatness in yourself. Royalty is not in the eyes of others, rather it is in the eye of the be-holder.</p>
                            <a href="#_" class="font-medium underline">Read More</a>
                        </div>
                    </div>
                    <div class="relative">
                        <a href="#_" class="block overflow-hidden group rounded-xl">
                            <img src="https://images.unsplash.com/photo-1559080463-5c7eb3a52de1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;q=80" class="object-cover w-full h-56 transition-all duration-300 ease-out sm:h-64 group-hover:scale-110" alt="">
                        </a>
                        <div class="relative mt-5">
                            <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">July 20th 2021</p>
                              <a href="#" class="block mb-3 hover:underline">
                                <h2 class="text-2xl font-bold leading-5 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">Enjoy Your Life</h2>
                              </a>
                            <p class="mb-4 text-gray-700">Be sure to enjoy the life that you have worked so hard to create. There's no point in reaching greatness if you do not celebrate.</p>
                            <a href="#_" class="font-medium underline">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section id="search">
        <form action="#" class="mb-8">
            <label for="searchInput">Search blog</label>
            <input type="search" id="searchInput" name="search" value="{{old('search') ?? ''}}" placeholder="search blog" class="w-full px-2 h-12 rounded border border-gray-500 focus:border-gray-800 text-gray-500 rounded mb-4">
        </form>
    

        <div>
            <h3 class="font-extrabold text-xl">Most read posts</h3>
        </div>
    </section>
   </div>
<!-- container end -->
<!-- blog area end -->


@endsection
