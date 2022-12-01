@extends('layouts.app')

@section('content')
    <livewire:page-banner title="Expertly designed, with you in mind" subTitle=" It's not enough to look pretty, it should also feel good to use." />

    <section class="w-full px-8 pt-20 pb-16 bg-white xl:px-0">
      <div class="flex flex-col max-w-6xl mx-auto">
        <h3 class="text-4xl tracking-tight font-extrabold leading-none sm:text-5xl md:text-6xl lg:leading-7">Building Visual Experiences</h3>
        <div class="grid grid-cols-6 gap-5 mt-8 md:grid-cols-12 md:gap-10 lg:mt-12">
            <p class="col-span-6 text-base font-normal text-gray-700 lg:leading-8 xl:leading-8 md:text-xl">
              We are innovating and creating the next best interfaces for a beautiful user experience. Build your next interface with our intuitive drag'n drop builder. Take advantage of our tools and features to take your business to the next level!
            </p>

            <p class="col-span-6 text-base font-normal text-gray-700 lg:leading-8 xl:leading-9 md:text-xl">
              Craft an application that you are proud to call your own. Aesthetically pleasing interfaces are now easier than ever to create. Don't get left behind in this era of tools and features designed to help you on your journey.
            </p>
          </div>
      </div>
    </section>

    <section class="relative bg-white">
        <div class="max-w-2xl lg:max-w-7xl px-12 mx-auto">
            <div class="flex py-12 sm:py-12 xl:py-16 lg:flex-row flex-col justify-center items-center">
                <div class="w-full lg:w-1/2 lg:px-0 sm:px-7 lg:pl-0 xl:pl-10 mb-16 lg:mb-0">
                    <div class="relative">
                        <h2 class="mb-5 xl:mb-12 text-3xl leading-tight md:text-4xl md:leading-tight xl:text-5xl lg:leading-tight text-gray-800 font-bold">Expertly Crafted</h2>
                        <div class="flex mb-6 xl:pr-0 lg:pr-12">
                            <svg class="w-8 h-8 -mt-0.5 flex-shrink-0 mr-3 xl:mr-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <div class="max-w-md lg:max-w-sm">
                                <h3 class="mb-2 -mt-1 text-xl md:text-xl font-semibold text-gray-700">Latest version of TailwindCSS</h3>
                                <p class="text-gray-400 leading-loose">Our components are coded with the latest version of Tailwind, giving you the latest and greatest.</p>
                            </div>
                        </div>
                        <div class="flex mb-6 xl:pr-0 lg:pr-12">
                            <svg class="w-8 h-8 -mt-0.5 flex-shrink-0 mr-3 xl:mr-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <div class="max-w-md lg:max-w-sm">
                                <h3 class="mb-2 -mt-1 text-xl md:text-xl font-semibold text-gray-700">Formatted HTML Code</h3>
                                <p class="text-gray-400 leading-loose">Each of our templates have been formatted and structured with the best possible organization.</p>
                            </div>
                        </div>
                        <div class="flex xl:pr-0 lg:pr-12">
                            <svg class="w-8 h-8 -mt-0.5 flex-shrink-0 mr-3 xl:mr-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <div class="max-w-md lg:max-w-sm">
                                <h3 class="mb-2 -mt-1 text-xl md:text-xl font-semibold text-gray-700">Easy to Integrate in Your App</h3>
                                <p class="text-gray-400 leading-loose">You can easily integrate our components and themes into any of your applications or websites.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 h-full">
                    <div class="w-full h-full bg-gradient-to-br shadow-sm border-b-4 border-r-4 border-blue-200 from-blue-100 to-indigo-200 p-20 rounded-2xl">
                        <img src="https://cdn.devdojo.com/images/february2022/computers-3d.png" class="">
                    </div>
                </div>
            </div>
            <div class="flex justify-center lg:flex-row pb-12 xl:pb-16 flex-col-reverse items-center">
                <div class="w-full lg:w-1/2 lg:px-0 mb-16 lg:mb-0">
                    <div class="w-full h-full bg-gradient-to-br shadow-sm border-b-4 border-r-4 border-pink-200 from-red-100 to-pink-200 p-20 pb-0 rounded-2xl">
                        <img src="https://cdn.devdojo.com/images/february2022/phone-3d.png" class="">
                    </div>
                </div>
                <div class="w-full lg:w-1/2 mb-16 ml-0 sm:px-5 sm:pl-8 xl:pl-20 lg:mb-0">
                    <div class="relative">
                        <h2 class="mb-5 xl:mb-12 text-3xl leading-tight md:text-4xl md:leading-tight xl:text-5xl lg:leading-tight font-bold">Clean Designs</h2>
                        <div class="flex mb-6">
                            <svg class="w-8 h-8 -mt-0.5 flex-shrink-0 mr-3 xl:mr-5 text-pink-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <div class="max-w-md lg:max-w-sm">
                                <h3 class="mb-2 -mt-1 text-xl md:text-xl font-semibold text-gray-700">Mobile Optimized Templates</h3>
                                <p class="text-gray-400 leading-loose">All templates will look good on any device. Every break point has been designed to look nice.</p>
                            </div>
                        </div>
                        <div class="flex mb-6">
                            <svg class="w-8 h-8 -mt-0.5 flex-shrink-0 mr-3 xl:mr-5 text-pink-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <div class="max-w-md lg:max-w-sm">
                                <h3 class="mb-2 -mt-1 text-xl md:text-xl font-semibold text-gray-700">Easily Configurable and Editable</h3>
                                <p class="text-gray-400 leading-loose">You can configure any section of the template to make it fit the needs of your application.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <svg class="w-8 h-8 -mt-0.5 flex-shrink-0 mr-3 xl:mr-5 text-pink-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <div class="max-w-md lg:max-w-sm">
                                <h3 class="mb-2 -mt-1 text-xl md:text-xl font-semibold text-gray-700">Fast and SEO Friendly</h3>
                                <p class="text-gray-400 leading-loose">All the images and formats have been optimized efficiently, making it fast and SEO friendly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
