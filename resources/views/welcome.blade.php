@extends('layouts.app')

@section('content')
    {{-- Header --}}
    <section class="w-full relative px-10 bg-white pb-48 tails-selected-element">
        <div class="right-0 h-auto w-1/2 top-1/2 transform -translate-y-1/2 absolute opacity-20">
            <div class="absolute inset-0 bg-gradient-to-b from-white via-transparent to-white"></div>
            <img src="https://cdn.devdojo.com/assets/patterns/pattern-01.svg">
        </div>
        <div class="left-0 h-auto w-1/2 top-1/2 -translate-y-1/2 transform rotate-180 absolute opacity-20">
            <div class="absolute inset-0 bg-gradient-to-b from-white via-transparent to-white"></div>
            <img src="https://cdn.devdojo.com/assets/patterns/pattern-01.svg">
        </div>

        <!-- Header Nav -->
        @include('includes.navbar')

        <div class="w-full relative h-auto pt-20 lg:pt-32">
            <div class="max-w-7xl relative mx-auto sm:px-4 xl:px-0 flex items-center lg:flex-row flex-col h-full">
                <div
                        class="w-full relative lg:w-1/2 flex-shrink-0 h-full flex flex-col xl:pr-0 lg:pr-5 lg:items-start sm:items-center justify-center space-y-10">
                    <h1 data-aos="zoom-in" data-aos-duration="400" class="font-extrabold text-4xl sm:text-5xl xl:text-6xl sm:text-center lg:text-left relative tracking-tight">
                        Express data analytics for your business<br></h1>

                    <div class="flex max-w-sm items-center lg:max-w-lg">
                        <div class="flex flex-shrink-0">
                            <img data-aos="slide-left" data-aos-duration="400" src="https://cdn.devdojo.com/tails/avatars/010.jpg"
                                                                               class="rounded-full w-12 h-12 border-2 border-white">
                            <img data-aos="slide-left" data-aos-duration="600" src="https://cdn.devdojo.com/tails/avatars/017.jpg"
                                                                               class="rounded-full -ml-5 w-12 h-12 border-2 border-white">
                            <img data-aos="slide-left" data-aos-duration="800" src="https://cdn.devdojo.com/tails/avatars/041.jpg"
                                                                               class="rounded-full -ml-5 w-12 h-12 border-2 border-white">
                        </div>
                        <p data-aos="slide-left" data-aos-duration="400" class="pl-3 lg:text-base text-xs">Join <span class="font-bold">23,000</span> other developers
                        as we build the next greatest <span class="font-bold">SAAS tools</span> together!</p>
                    </div>

                    <div
                            class="w-full flex sm:flex-row flex-col sm:justify-center lg:justify-start font-medium sm:space-x-5 space-y-4 sm:space-y-0">
                        <a href="#_" data-aos="fade-up" data-aos-duration="500"
                                                        class="px-7 py-4 bg-gray-900 text-white border-2 border-gray-900 hover:bg-white hover:text-gray-900 transition-all ease-out duration-150 rounded-xl flex items-center justify-center text-lg">Contact us</a>
                        <a href="#_" data-aos="fade-up" data-aos-duration="800"
                                                        class="px-7 flex items-center py-4 bg-gray-100 border-2 border-gray-100 hover:border-gray-900 justify-center hover:bg-white transition-all ease-out duration-150 text-gray-900 rounded-xl text-lg">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                                          xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                      clip-rule="evenodd" class=""></path>
                            </svg>
                            <span class="">Learn More</span>
                        </a>
                    </div>
                </div>

                <div class="lg:w-1/2 flex-shrink-0 h-full lg:pt-0 pt-24">
                    <div data-aos="zoom-in" data-aos-duration="1000" class="relative h-full w-full pl-12 lg:pr-0 pr-10">
                        <div
                                class="h-auto transform xl:translate-x-8 translate-y-2 w-32 sm:w-56 xl:w-64 absolute border border-gray-100 left-0 bottom-0 z-10 rounded-lg shadow-2xl overflow-hidden p-2 bg-white">
                            <img src="https://cdn.devdojo.com/images/january2022/chart-1.png" class="tails-relative">
                        </div>
                        <div
                                class="h-auto transform translate-x-5 lg:translate-x-6 -translate-y-5 xl:-translate-y-8 w-32 sm:w-56 xl:w-64 absolute border border-gray-100 right-0 z-10 top-0 rounded-xl shadow-2xl overflow-hidden p-2 bg-white">
                            <img src="https://cdn.devdojo.com/images/january2022/chart-2.png" class="">
                        </div>
                        <div class="relative flex items-center justify-center p-3">
                            <div class="absolute inset-0 opacity-30 rounded-2xl blur-xl"
                                 style="background-image:linear-gradient(90deg, rgb(68, 255, 154) -0.55%, rgb(68, 176, 255) 22.86%, rgb(139, 68, 255) 48.36%, rgb(255, 102, 68) 73.33%, rgb(235, 255, 112) 99.34%); -webkit-filter: blur(40px);filter: blur(40px);"></div>
                            <div
                                    class="bg-gray-100 transform rounded-xl p-2 shadow-2xl border border-gray-100 overflow-hidden h-auto w-full flex flex-col">

                                <img src="https://cdn.devdojo.com/images/january2022/admin-bg.png"
                                     class="h-auto opacity-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--Header end--}}

    <!-- Features -->
    <section class="pt-12 pb-8 leading-7 text-gray-900 bg-white border-b border-solid md:pt-24 md:pb-12 box-border border-slate-100">
        <div class="relative px-12 mx-auto w-full max-w-7xl text-gray-900 box-border">
            <div  class="flex flex-wrap -mx-5 mt-0 box-border">
                <!-- Feature 1 -->
                <div data-aos="slide-up" data-aos-duration="800" class="relative flex-none px-5 mt-0 w-full max-w-full md:w-1/3 md:flex-none box-border">
                    <div class="mb-3">
                        <img class="w-16 h-16 -ml-1" src="https://cdn.devdojo.com/images/march2022/code.png">
                    </div>
                    <h3 class="mt-0 mb-2 text-xl tracking-normal box-border"> Developer Friendly </h3>
                    <p class="mt-0 mb-8 md:mb-0 box-border text-slate-400"> Tails has been built with developers in mind. Each template and design are built to be configurable and customizable for any project </p>
                </div>
                <!-- Feature 2 -->
                <div data-aos="slide-up" data-aos-duration="1000" class="relative flex-none px-5 mt-0 w-full max-w-full md:w-1/3 md:flex-none box-border">
                    <div class="mb-3">
                        <img class="w-16 h-16 -ml-1" src="https://cdn.devdojo.com/images/march2022/brush.png">
                    </div>
                    <h3 class="mt-0 mb-2 text-xl tracking-normal box-border"> Easily Customizable </h3>
                    <p class="mt-0 mb-8 md:mb-0 box-border text-gray-400"> You can change any aspect of these templates including colors, fonts, and more. You can make it fit perfectly into any website or application. </p>
                </div>
                <!-- Feature 3 -->
                <div data-aos="slide-up" data-aos-duration="1200" class="relative flex-none px-5 mt-0 w-full max-w-full md:w-1/3 md:flex-none box-border">
                    <div class="mb-3">
                        <img class="w-16 h-16 -ml-1" src="https://cdn.devdojo.com/images/march2022/cloud.png">
                    </div>
                    <h3 class="mt-0 mb-2 text-xl font-normal tracking-normal box-border"> Publish Pages </h3>
                    <p class="my-0 box-border text-slate-400"> You can easily publish any pages and projects to a custom subdomain, or you can link up your domain after setting up the correct DNS. </p>
                </div>
            </div>
        </div>

        <!-- Partners -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-10  items-center justify-between mx-auto px-12 border-t border-gray-200 pt-10 mt-24 lg:justify-between max-w-7xl">
            <div class="box-border inline-flex items-center py-0 my-2 justify-center sm:justify-start text-gray-800">
                <svg class="w-auto h-7 flex-shrink-0 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2500 676"><defs></defs><path fill-rule="nonzero" d="M343.757 632.09c-37.607 6.604-75.876 8.584-115.464 13.857L107.546 292.295v368.83C69.94 665.083 35.63 670.361 0 675.64V0h100.293l137.236 383.352V0h106.228v632.09zm207.84-384.663c40.91 0 103.591-1.98 141.198-1.98v105.566c-46.848 0-101.608 0-141.198 1.98V510.03c62.024-3.957 124.045-9.24 186.723-11.22v101.604L446.025 623.51V0H738.32v105.569H551.597v141.858zm579.306-141.856h-109.526v485.616c-35.63 0-71.26 0-105.564 1.315v-486.93H806.287V0h324.621l-.005 105.571zm171.548 134.6h144.5v105.566h-144.5V585.25h-103.596V0h294.941v105.569h-191.345V240.17zm362.893 252.703c60.044 1.315 120.742 5.942 179.468 9.235v104.25c-94.35-5.942-188.704-11.872-285.034-13.857V0h105.566v492.874zm268.54 120.744c33.65 1.983 69.28 3.963 103.59 7.915V0h-103.59v613.618zM2500 0l-133.943 321.326L2500 675.64c-39.592-5.279-79.18-12.537-118.77-19.136l-75.874-195.298-77.19 179.468c-38.276-6.604-75.224-8.584-113.486-13.862l135.918-309.449L2127.871 0h113.482l69.28 177.488L2384.532 0H2500z"></path></svg>
            </div>
            <div class="box-border inline-block px-5 py-0 my-2 flex justify-center lg:justify-start text-gray-800">
                <svg class="w-auto h-6 flex-shrink-0 text-gray-400 fill-current" viewBox="0 0 2500 494" xmlns="http://www.w3.org/2000/svg"><path d="M1262.684 438.349c0 8.684 0 10.658 5.855 15.987l32.797 32.368v1.382H1155.92v-62.172c-14.638 40.974-53.349 68.073-96.428 67.5-74.756 0-129.02-59.21-129.02-168.157 0-102.04 58.553-170.132 140.731-170.132 36.428-2.316 70.329 18.901 84.52 52.895V70.855a17.066 17.066 0 00-6.638-16.579l-31.23-30.394V22.5l144.828-17.171v433.02zm-106.763-19.737V213.94a54.224 54.224 0 00-43.335-20.527c-35.33 0-69.487 32.369-69.487 128.487 0 90 29.473 121.777 66.17 121.777a58.382 58.382 0 0046.645-25.066h.007zm203.19 69.474V211.77a18.671 18.671 0 00-5.854-16.58l-32.211-33.552v-1.381h145.421V440.52c0 8.684 0 10.658 5.855 15.987l32.014 30.394v1.382l-145.224-.197zm-5.269-428.882c0-32.697 26.217-59.204 58.553-59.204 32.335 0 58.559 26.513 58.559 59.21 0 32.698-26.217 59.211-58.553 59.211-32.335 0-58.559-26.513-58.559-59.21v-.007zm504.954 378.553c0 8.684 0 11.25 5.855 16.579l32.796 32.368v1.382H1751.25V417.23c-13.316 44.803-53.875 75.658-100.132 76.184-64.802 0-99.546-47.763-99.546-138.157 0-43.619 0-91.382 1.362-145.066a16.875 16.875 0 00-5.855-15.987l-32.204-32.566v-1.381h144.243v180.197c0 59.21 8.593 98.684 45.283 98.684a58.487 58.487 0 0047.237-29.802V211.967a18.671 18.671 0 00-5.855-16.579l-32.401-33.75v-1.381h145.414v277.5zm495.007 50.329c0-10.658 1.954-146.448 1.954-177.632 0-59.21-9.178-100.066-50.362-100.066a65.204 65.204 0 00-51.724 28.421 243.53 243.53 0 015.855 56.25c0 41.053-1.368 93.355-1.954 145.658a16.875 16.875 0 005.856 15.987l32.796 30.395v1.381H2149.44c0-9.868 1.947-146.447 1.947-177.631 0-60.198-9.17-100.066-49.77-100.066a58.46 58.46 0 00-48.407 29.21V441.31c0 8.684 0 10.658 5.855 15.987l32.013 30.395v1.381h-145.224V212.757a18.671 18.671 0 00-5.855-16.58l-32.21-34.539v-1.381h145.42v70.263c13.487-46.382 56.448-77.553 104.23-75.592 48.409 0 81.198 27.236 95.06 78.947 15.395-47.69 59.697-79.69 109.303-78.947 64.802 0 101.5 48.355 101.5 139.736 0 43.619-1.362 93.356-1.948 145.658a15.868 15.868 0 006.632 15.987L2500 486.704v1.382h-146.197zm-1826.79-43.027l43.138 41.645v1.382H351.342v-1.382l43.921-41.645a16.875 16.875 0 005.855-15.987v-266.25c0-11.25 0-26.447 1.948-39.473L255.5 493.42h-1.75l-152.836-340.46c-3.322-8.487-4.296-9.08-6.447-14.803v223.224a78.322 78.322 0 007.23 43.618l61.48 81.71v1.382H0v-1.381l61.487-81.908a78.526 78.526 0 007.217-43.421v-246.71a48.132 48.132 0 00-10.145-33.75l-43.526-57.04V22.5h156.151l130.777 288.355L417.125 22.5h152.829v1.382l-42.94 48.355a17.066 17.066 0 00-6.639 16.579v340.263a15.868 15.868 0 006.645 15.987l-.007-.007zm171.184-133.42v1.38c0 84.474 43.139 118.422 93.691 118.422 42.21 1.454 81.283-22.48 99.546-60.987h1.369c-17.566 83.487-68.71 122.96-145.224 122.96-82.566 0-160.447-50.328-160.447-166.973 0-122.566 78.079-171.513 164.348-171.513 69.494 0 143.467 33.158 143.467 139.736v16.974h-196.75zm0-16.975h96.23v-17.17c0-86.843-17.763-109.935-44.506-109.935-32.401 0-52.112 34.54-52.112 127.105h.388z" fill-rule="nonzero"></path></svg>
            </div>
            <div class="box-border inline-block px-5 py-0 my-2 flex justify-center sm:justify-end lg:justify-start text-gray-800">
                <svg class="w-auto h-7 flex-shrink-0 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2500 611"><defs></defs><path fill-rule="nonzero" d="M763.838 245.713c28.613 0 51.807-23.203 51.807-51.821 0-28.623-23.194-51.822-51.807-51.822-28.613 0-51.807 23.199-51.807 51.822 0 28.618 23.194 51.82 51.807 51.82zm1709.766 177.056c-7.881-5.542-13.965-6.46-19.014 4.301-87.012 188.457-233.643 94.414-219.077 102.69 32.524-14.877 118.066-83.48 105.136-178.207-7.851-57.89-57.539-83.57-110.278-74.375-92.06 16.05-125.928 115.346-108.686 203.257 3.017 15.097 8.408 27.548 13.794 39.746-104.034 84.6-145.347-75.733-150.035-94.893-.185-1.025 80.327-68.135 102.72-228.052C2111.636 29.634 2058.17-.884 2003.496.068c-101.172 1.763-128.51 213.145-91.782 389.317-3.076.8-17.393 8.73-40.396 9.619-16.552-52.085-87.28-97.74-105.79-80.147-46.329 44.01 11.235 130.05 51.738 136.797-24.331 149.859-176.495 112.744-148.17-75.005 49.551-92.016 87.237-228.837 80.513-311.435-2.382-29.243-24.004-68.423-72.9-66.48-94.048 3.721-104.272 215.162-93.247 365.23-.547-3.696-5.781 18.232-44.321 29.136-9.117-50.601-90.591-101.392-109.77-76.973-35.904 45.703 26.317 127.192 55.79 132.876-24.33 149.853-176.49 112.74-148.164-75.01 49.55-92.012 87.232-228.833 80.508-311.43-2.383-29.249-24-68.428-72.9-66.49-94.048 3.726-104.273 215.166-93.248 365.235-.551-3.755-5.908 18.896-46.02 29.619-1.343-65.65-83.115-95.752-102.759-74.805-35.01 37.339 8.018 113.95 47.822 132.88-24.33 149.854-176.489 112.74-148.164-75.009 49.551-92.012 87.237-228.833 80.508-311.43-2.378-29.249-23.999-68.428-72.9-66.49C915.8 3.8 908.232 225.87 919.258 375.933c-30.977 132.72-134.859 298.462-121.362-33.555 1.333-23.291 2.788-32.134-8.824-40.855-8.7-6.777-28.486-3.515-39.301-3.247-13.145.528-16.44 8.218-19.346 19.844-6.768 30.02-7.984 59.121-8.95 98.828-.635 18.574-2.124 27.241-9.278 52.569-7.143 25.322-47.9 71.606-70.215 63.867-30.957-10.645-20.8-98.037-15-158.081 4.834-47.451-10.644-68.76-50.302-76.51-23.218-4.838-37.325-4.096-61.504-11.718-22.866-7.207-28.037-50.459-76.807-36.045-26.675 7.89-9.526 64.41-15.937 106.3-31.519 206.059-97.1 211.718-127.525 111.62C431.934 133.35 334.546 1.045 277.54 1.045c-59.375 0-127.246 40.898-98.506 302.578-13.974-4.077-18.271-6.274-33.57-6.274C58.946 297.349 0 367.29 0 453.569c0 86.28 58.95 156.226 145.469 156.226 51.074 0 86.933-23.228 114.092-59.16 17.72 25.376 39.296 59.55 78.754 58.012 117.613-4.58 151.817-245.835 155.855-259.292 12.573 1.939 24.468 5.606 36.079 7.544 19.346 2.906 20.752 10.562 20.313 30.02-5.127 164.082 25.15 221.533 93.833 221.533 38.266 0 72.373-37.598 95.869-64.482 17.548 36.22 45.512 63.374 83.027 64.477 90.903 2.261 125.708-142.627 122.534-123.56-2.49 14.962 29.492 122.745 123.076 123.135 115.923.489 137.471-126.992 140.04-148.344.322-4.248.463-3.809 0 0l-.088 1.294c36.801-6.846 55.79-26.577 55.79-26.577s29.551 175.61 139.014 173.632c113.672-2.06 135.108-117.295 137.92-139.765.371-5.332.591-4.707 0 0l-.044.659c43.716-15.903 55.215-31.865 55.215-31.865s23.486 172.119 139.014 173.623c102.949 1.347 141.103-104.077 141.328-148.203 17.363.185 49.482-10.303 48.73-10.899 0 0 37.71 150.488 143.018 158.218 49.443 3.628 86.533-27.822 107.676-42.168 49.687 40.24 215.141 91.636 319.614-85.488 14.746-25.42-16.958-55.45-22.524-59.37zM141.294 551.367c-50.479 0-82.847-46.675-82.847-97.002 0-50.322 29.712-96.997 80.19-96.997 22.716 0 35.352 2.5 53.043 17.886 3.208 12.642 12.3 41.802 16.723 55.044 5.928 17.72 12.979 32.803 20.088 49.219-10.156 42.104-43.452 71.85-87.197 71.85zm123.008-174.634c-2.1-3.344-1.66-1.289-4.009-4.448-9.253-25.17-27.085-81.352-29.15-145.166-2.334-72.187 9.697-156.802 45.166-156.802 24.033 0 49.575 171.485-12.012 306.416h.005zm710.747-75.214c-5.694-42.837-5.991-233.804 39.853-228.545 25.313 10.254-16.05 190.454-39.853 228.545zm334.76 0c-5.693-42.837-5.99-233.804 39.854-228.545 25.313 10.254-16.05 190.454-39.853 228.545zm332.105 2.66c-5.698-42.841-5.991-233.808 39.849-228.55 25.312 10.255-16.05 190.46-39.849 228.55zm366.64-242.382c41.915-4.346 40.186 178.691-43.945 294.248-10.85-41.768-27.485-279.907 43.946-294.253v.005zm176.173 393.857c-13.462-68.003 21.323-112.666 57.182-117.563 12.534-2.002 30.698 6.118 34.321 21.299 5.957 28.608-.864 71.045-81.123 124.887.118.46-7.378-13.476-10.376-28.623h-.004z"></path></svg>
            </div>
            <div class="box-border inline-block lg:px-5 py-0 my-2 flex justify-center sm:justify-start text-gray-800">
                <svg class="w-auto text-gray-400 flex-shrink-0 fill-current h-10" viewBox="0 0 2499 1037" xmlns="http://www.w3.org/2000/svg"><path d="M261.062 466.768c-53.833-19.912-83.335-35.399-83.335-59.735 0-20.652 16.963-32.45 47.201-32.45 55.31 0 112.09 21.388 151.178 40.559l22.124-136.427c-30.973-14.752-94.397-39.088-182.151-39.088-61.947 0-113.573 16.223-150.443 46.46-38.352 31.71-58.263 77.434-58.263 132.744 0 100.293 61.211 143.07 160.769 179.203 64.159 22.86 85.547 39.088 85.547 64.16 0 24.336-20.652 38.346-58.263 38.346-46.46 0-123.153-22.86-173.302-52.356L0 786.087c42.771 24.337 122.417 49.409 205.017 49.409 65.63 0 120.204-15.487 157.08-44.984 41.293-32.45 62.682-80.381 62.682-142.328 0-102.511-62.683-145.282-163.717-181.416zm523.877-80.387l22.124-135.692H690.265V85.966l-157.035 25.84-22.677 138.883-55.232 8.96-20.675 126.732h75.68v266.227c0 69.32 17.7 117.257 53.833 146.754 30.238 24.336 73.745 36.134 134.956 36.134 47.196 0 75.957-8.109 95.868-13.275V678.416c-11.062 2.953-36.133 8.114-53.097 8.114-36.134 0-51.62-18.435-51.62-60.47V386.38h94.673zm350.752-143.618c-51.62 0-92.92 27.102-109.142 75.775l-11.062-67.849H855.459v573.745h182.887V452.017c22.865-28.026 55.31-38.159 99.558-38.159 9.59 0 19.911 0 32.45 2.213V247.188c-12.539-2.948-23.6-4.425-34.663-4.425zm171.095-48.86c53.098 0 95.869-43.507 95.869-96.604 0-53.839-42.771-96.61-95.869-96.61-53.838 0-96.609 42.771-96.609 96.61 0 53.097 42.771 96.604 96.61 96.604zm-92.184 56.786h183.628v573.745h-183.628V250.689zm703.999 51.62c-32.45-42.035-77.434-62.682-134.956-62.682-53.097 0-99.558 22.124-143.07 68.584l-9.585-57.522h-160.769v786.134l182.893-30.232V822.22c28.02 8.85 56.78 13.275 82.594 13.275 45.725 0 112.096-11.798 163.717-67.843 49.408-53.839 74.485-137.168 74.485-247.052 0-97.345-18.44-171.09-55.31-218.291zm-151.92 353.983c-14.75 28.025-37.61 42.777-64.159 42.777-18.435 0-34.662-3.69-49.408-11.062V415.142c30.973-32.445 58.993-36.134 69.32-36.134 46.46 0 69.32 50.15 69.32 148.23 0 56.045-8.11 99.557-25.073 129.054zm731.566-123.894c0-91.443-19.912-163.717-59-214.602-39.822-51.62-99.557-78.169-175.514-78.169-155.608 0-252.212 115.044-252.212 299.408 0 103.247 25.808 180.68 76.692 230.089 45.725 44.248 111.361 66.372 196.168 66.372 78.169 0 150.442-18.435 196.167-48.673l-19.912-125.365c-44.989 24.336-97.345 37.61-156.344 37.61-35.398 0-59.734-7.378-77.434-22.864-19.175-16.223-30.237-42.771-33.921-80.382h303.097c.736-8.85 2.213-50.15 2.213-63.424zm-306.787-48.672c5.16-81.859 27.284-120.205 69.32-120.205 41.3 0 62.688 39.087 65.636 120.205H2191.46z" fill-rule="nonzero"></path></svg>
            </div>
            <div class="box-border inline-block px-5 py-0 my-2 flex justify-center lg:justify-start text-gray-800">
                <svg class="w-auto h-6 text-gray-400 flex-shrink-0 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2500 563"><defs></defs><path fill-rule="evenodd" d="M2035.464 169.177c9.556 16.487 12.683 35.246 13.715 56.334l1.357 28.108v196.55l1.386 28.138c2.772 45.952 36.661 79.93 82.967 82.82l27.99 1.386V253.62l1.387-28.108c1.15-20.853 4.247-39.965 13.95-56.57 20.125-34.664 57.205-55.968 97.287-55.895 40.082.073 77.084 21.512 97.081 56.249 9.557 16.487 12.536 35.6 13.686 56.216l1.386 28.02v196.638l1.386 28.138c2.89 46.188 36.514 80.166 82.968 82.82l27.99 1.386V225.511C2500 101.421 2399.431.813 2275.342.764a224.157 224.157 0 00-168.56 76.125A224.452 224.452 0 001938.221.735c-46.66 0-89.959 14.157-125.824 38.608C1790.513 14.92 1741.553.735 1713.445.735v561.778l28.108-1.386c47.014-3.097 80.991-36.16 82.82-82.82l1.504-28.138V253.62l1.386-28.108c1.18-21.206 4.13-39.847 13.715-56.452a112.55 112.55 0 0197.243-55.98c40.102.008 77.16 21.387 97.243 56.098zm-1923.12 391.98l28.108 1.356H561.78l-1.386-28.02c-3.805-46.187-36.514-79.929-82.85-82.937l-28.108-1.387H196.668l337.003-337.12-1.386-27.99c-2.183-46.66-36.279-80.372-82.85-82.938L421.327.853 0 .735l1.386 28.108c3.687 45.745 36.868 80.195 82.82 82.85l28.138 1.386h252.767L28.108 450.199l1.386 28.108c2.773 46.306 36.19 79.841 82.85 82.82v.03zM1603.165 82.965a280.875 280.875 0 010 397.26c-109.75 109.66-287.597 109.66-397.348 0-109.689-109.69-109.689-287.57 0-397.26A280.728 280.728 0 011404.314.705a280.934 280.934 0 01198.851 82.29v-.03zm-79.487 79.546c65.79 65.84 65.79 172.534 0 238.373-65.84 65.79-172.534 65.79-238.373 0-65.79-65.84-65.79-172.533 0-238.373 65.84-65.79 172.534-65.79 238.373 0zM814.781.705a280.727 280.727 0 01198.497 82.29c109.72 109.66 109.72 287.57 0 397.23-109.75 109.66-287.597 109.66-397.348 0-109.689-109.69-109.689-287.57 0-397.26A280.727 280.727 0 01814.427.705h.354zm119.01 161.747c65.81 65.843 65.81 172.56 0 238.403-65.84 65.79-172.534 65.79-238.373 0-65.79-65.84-65.79-172.534 0-238.373 65.84-65.79 172.534-65.79 238.373 0v-.03z"></path></svg>
            </div>
            <div class="box-border inline-block px-5 py-0 my-2 flex justify-center sm:justify-end lg:justify-start text-gray-800">
                <svg class="w-auto text-gray-400 flex-shrink-0 fill-current h-9" viewBox="0 0 2428 1004" xmlns="http://www.w3.org/2000/svg"><path d="M1221.47 109.639a73.59 73.59 0 0144.76 17.898c17.016 16.108 21.477 42.969 13.423 64.46-31.31 64.446-105.768 107.493-156.649 121.734-30.44 7.16-68.921 7.16-96.676-3.58-13.437 8.054-24.773 34.085-41.18 23.268-23.747-18.547-3.19-47.573-16.9-68.17-2.827-4.24-9.947-4.551-13.527-11.49-18.806-41.18 4.475-80.568 30.427-111.89 43.268-48.274 167.401-102.06 236.323-32.23zm-144.12 32.217c-24.175 4.474-51.476 14.993-66.236 32.23-14.773 17.223-24.163 34.02-15.214 51.917 31.335-23.267 46.549-55.497 81.464-75.185-.013-3.593 5.356-6.278-.013-8.962zm145.923 8.962c-61.775-5.383-108.323 41.179-152.187 85.924-2.685 7.16-18.793 15.214-6.264 23.268 59.09 5.37 115.483-11.62 158.451-51.023 12.542-11.634 21.465-26.847 15.227-42.969-2.685-6.251-9.001-12.516-15.227-15.2zm535.276 266.749c28.65 69.829 52.812 179.916 0 247.06-14.32 16.11-39.377 30.96-55.485 18.794-59.09-47.43-84.135-115.47-120.84-176.35-5.369-2.685-5.369 4.488-8.054 7.172-13.423 61.762 11.634 142.33-30.427 190.656-16.108 2.685-31.179-5.603-36.704-21.478-20.596-63.552.869-129.801 6.238-193.353 12.542-32.23 17.912-69.816 45.667-93.992 44.759 17.898 66.236 68.04 92.176 104.744 18.82 27.742 34.02 59.077 55.498 84.135 18.793-8.055 9.545-32.62 8.962-47.444-7.186-58.182-23.294-111.89-38.52-167.388-.87-14.318-8.924-38.494 6.264-47.443 40.336 17.911 57.313 59.972 75.225 94.887zm-270.33-21.491c0 13.437-10.738 30.22-19.713 32.23-85.925 13.424-181.707 5.37-262.262 32.217-2.685 9.844 8.95 11.634 15.214 14.318 68.908 10.74 141.435 13.424 208.58 30.44 35.498 9.014 48.35 51.036 51.035 85.938 1.648 27.522-8.936 60.867-35.81 79.673-66.223 42.074-167.374 40.271-234.531 1.803-25.668-14.396-50.129-37.586-51.918-66.237.155-22.748 9.857-40.66 25.965-49.233 64.46-25.965 144.12-11.62 199.63 21.478 3.554 17.911-15.822 16.939-25.096 23.28-61.775 35.81-108.31-40.257-165.598-12.54-8.054 5.369-13.877 20.349-4.474 25.07 70.71 31.335 149.49 8.949 219.305-10.74 8.055-2.684 17.912-10.738 18.794-18.792-2.685-28.65-34.902-34.902-55.498-42.956-60.867-15.214-127.999-15.214-193.353-21.478-12.529-2.685-28.495-11.414-32.217-21.478-7.16-21.478-7.16-51.023 8.949-68.921 83.24-73.41 209.449-67.132 315.075-47.444 7.172 2.633 15.226 5.318 17.924 13.372zm-391.167 34.02c8.054 85.924 12.528 165.61 10.739 256.01-1.79 11.62-15.214 14.318-24.163 18.793-14.319 2.685-32.827-.363-38.494-8.054-20.583-33.138-13.424-77.87-15.214-118.155 2.685-63.539 1.79-132.473 19.701-191.563 3.424-8.586 13.424-16.109 21.478-10.752 21.478 10.752 25.058 32.243 25.953 53.72zm994.521-12.53c4.306 7.238 8.807 18.418 0 23.269-40.284 17.898-94.874 9.844-141.435 15.213-12.529 10.74-22.386 28.637-17.924 44.759 4.5 2.685 8.508 6.77 13.45 6.251 28.624 1.803 71.605-13.423 90.425 13.424 4.59 7.99-.623 37.82-13.424 38.494-34.928 4.5-92.358-4.384-109.232 4.5-21.477 14.32-19.7 42.062-27.755 64.46 15.227 9.844 31.167-.233 49.22-2.697 33.151-5.37 69.856-15.214 102.954-8.055 6.265 11.634 15.227 24.176 8.95 38.495-56.432 44.758-129.218 90.632-206.764 58.182-29.105-13.047-42.074-57.287-32.217-94.86 6.251-26.861 33.993-52.814 17.003-81.464-2.685-12.542 4.488-23.268 15.227-25.952 29.532 0 23.254-36.705 38.48-53.721-17.003-18.793-59.958-17.898-55.484-55.498 20.596-10.739 45.667-7.159 68.909-10.739 52.812-10.752 111.89-17.016 165.636-10.752 10.7 2.153 25.032 23.268 33.981 36.692zM813.286 213.476c82.605 67.52 189.774 182.614 176.35 315.087-16.121 104.744-127.117 183.51-221.109 208.58-91.307 26.847-205.882 24.163-298.992 2.685-6.264 17.016-12.528 37.586-32.216 44.758-12.53 4.475-28.65 1.79-38.495-6.264-27.742-25.966-5.37-76.094-45.653-92.19-78.779-33.124-163.821-98.479-204.092-179.034-5.37-16.108.894-32.217 10.739-44.746 61.774-49.233 139.645-68.92 217.528-84.147 4.475 1.79 2.685-4.475 6.265-6.265 4.474-53.708 6.264-108.323 23.268-156.662 3.878-6.783 13.423-8.949 19.7-4.474 49.234 37.586 25.953 108.323 47.444 159.333 93.992 4.475 187.984 8.95 262.275 61.775 25.07 20.583 31.179 59.895 23.267 82.358-7.898 22.425-34.006 38.495-58.182 40.259-16.121 0-46.548 1.569-44.759-10.726 1.79-12.309 54.759-32.45 38.495-49.247-23.385-24.136-140.385-38.494-212.9-47.443-8.948-1.79-17.158.895-17.158 10.739-1.79 68.026-7.16 143.212 4.474 208.58.895 4.487 6.265 9.857 10.752 10.726 127.999 20.596 263.17 8.949 363.426-64.447 46.549-37.573 61.775-90.425 53.708-148.595-40.284-162.018-209.462-259.602-348.212-322.26-135.158-59.077-284.66-89.517-444.89-81.45-25.51 1.868-65.937 10.675-66.236 19.702-.298 9.026 45.797 6.186 40.271 23.267-5.512 17.068-52.359 6.94-66.236 2.685-13.878-4.254-12.529-24.176-8.95-36.704C38.084 7.593 135.513 2.599 179.519.433c243.469-6.277 478.91 86.444 633.768 213.042zM374.662 453.376c-61.775.895-127.117 7.16-184.404 28.638-11.634 4.474-25.966 17.003-17.017 32.23 23.268 31.321 56.548 57.04 87.728 75.185 31.179 18.119 72.514 41.18 110.113 46.562 8.95-58.196 8.95-115.483 8.054-175.455-3.592-1.79-.013-5.37-4.474-7.16zm1850.266-81.463c-2.684 77.87-75.211 126.222-75.211 204.092 2.684 2.685 4.5 6.265 8.054 4.501 58.208-63.565 115.483-153.977 200.525-180.824 22.412-1.79 42.658 17.677 51.036 32.23 29.546 59.077 22.412 142.33-18.78 196.037-42.502 52.722-116.39 105.626-200.5 96.664-34.901 85.938-59.116 176.35-72.54 270.342-7.159 18.793-24.149 1.79-34.888-1.79-72.5-57.287-12.97-208.943-8.054-228.294 4.915-19.299 24.318-64.823 38.507-102.94-34.02-60.855-12.542-134.277 15.2-190.67 21.479-37.599 51.05-75.198 85.951-103.835 4.436.013 8.016.908 10.7 4.487zm144.146 96.677c-10.739-1.79-15.226 12.542-24.162 15.226-41.166 46.549-82.358 93.097-102.954 148.595 27.768 3.58 51.023-14.319 75.211-24.163 41.166-25.965 67.132-68.908 64.447-118.154-1.803-8.08-8.962-14.345-12.542-21.504z" fill-rule="nonzero"></path></svg>
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section class="pt-20 pb-32 bg-white">
        <div class="px-20 mx-auto max-w-7xl">
            <h2 data-aos="slide-right" data-aos-duration="800" class="mb-1 text-3xl font-extrabold leading-tight text-gray-900">What we offer</h2>
            <p data-aos="slide-right" class="mb-16 text-lg text-gray-500">Here is our list of our powerful and award-winning features.</p>
            <div data-aos-delay="1000" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-16 lg:gap-x-24 gap-y-20">
                <div data-aos="slide-up" data-aos-duration="1000" class="">
                    <div class="flex items-center justify-center w-12 h-12 mb-4 text-red-600 bg-red-100 rounded-full"
                         data-primary="red-600" data-rounded="rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                                               xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                                 d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900 lg:text-lg">Processing</h3>
                    <p class="text-sm text-gray-500 lg:text-base">Faster processing to help you build your applications
                    quicker and with more efficiency.</p></div>
                <div data-aos="slide-up" data-aos-duration="1000" data-aos-delay="500" class="">
                    <div
                            class="flex items-center justify-center w-12 h-12 mb-4 text-green-600 bg-green-100 rounded-full"
                            data-primary="green-600" data-rounded="rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                                               xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                                 d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                                 d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900 lg:text-lg">Configuration</h3>
                    <p class="text-sm text-gray-500 lg:text-base">Faster processing to help you build your applications
                    quicker and with more efficiency.</p></div>

                <div data-aos="slide-up" data-aos-duration="1000" data-aos-delay="700" class="">
                    <div class="flex items-center justify-center w-12 h-12 mb-4 text-blue-600 bg-blue-100 rounded-full"
                         data-primary="blue-600" data-rounded="rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                                               xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                                 d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900 lg:text-lg">Bundling</h3>
                    <p class="text-sm text-gray-500 lg:text-base">Bundling functionality to help you build your
                    application with ease and sustainability.</p></div>
                <div data-aos="slide-up" data-aos-duration="1000" data-aos-delay="900" >
                    <div 
                                                                  class="flex items-center justify-center w-12 h-12 mb-4 text-purple-600 bg-purple-100 rounded-full"
                                                                  data-primary="purple-600" data-rounded="rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                                               xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                                 d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900 lg:text-lg">Database</h3>
                    <p class="text-sm text-gray-500 lg:text-base">Take advantage of unlimited storage and data retrieval
                    from our global CDN data centers.</p>
                </div>
                <div data-aos="slide-up" data-aos-duration="1000" data-aos-delay="1100" class="">
                    <div
                            class="flex items-center justify-center w-12 h-12 mb-4 text-indigo-600 bg-indigo-100 rounded-full"
                            data-primary="indigo-600" data-rounded="rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                                               xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                                 d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900 lg:text-lg">Integrations</h3>
                    <p class="text-sm text-gray-500 lg:text-base">Simple and configuration intregrations with your
                    favorite applications and services.</p></div>
                <div data-aos="slide-up" data-aos-duration="1000" data-aos-delay="1300" class="">
                    <div class="flex items-center justify-center w-12 h-12 mb-4 text-pink-600 bg-pink-100 rounded-full"
                         data-primary="pink-600" data-rounded="rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                                               xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                                 d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900 lg:text-lg">Speed</h3>
                    <p class="text-sm text-gray-500 lg:text-base">Our tools and services have been crafted for maximum
                    speed and efficiency.</p></div>
            </div>
        </div>
    </section>
    {{-- End features --}}



    {{-- testimonials --}}
    <section class="w-full bg-gray-50 sm:py-16 py-12 md:py-20 relative tails-selected-element">
        <div class="max-w-7xl mx-auto px-10">
            <div class="flex flex-col mb-7 sm:mb-20 items-start md:items-center justify-center">
                <p class="sm:tracking-widest sm:text-base text-sm uppercase font-medium text-gray-500">What people are saying about us</p>
                <h2 class="text-gray-900 mt-2 text-2xl sm:text-4xl tracking-tight font-bold sm:font-extrabold md:text-5xl">Don't just take our word for it.</h2>
                <div class="mt-1 md:mt-4 items-center flex text-blue-600">
                    <svg class="w-8 h-8 sm:block hidden mr-1.5 mt-0.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    <p class="text-xl md:text-4xl tracking-tight sm:font-bold sm:text-3xl">view our hundreds of testimonials</p>
                </div>
            </div>
            <div class="grid grid-cols-4 sm:grid-cols-8 lg:grid-cols-12 gap-6 w-full">
                <div class="col-span-4 space-y-6">
                    <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative">
                        <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
                            <img src="https://cdn.devdojo.com/images/january2022/01-john-robertson.jpeg" class="rounded-full mr-3 w-12 h-12">
                            <div class="relative">
                                <p class="font-semibold text-gray-600 leading-none my-1">John Robertson</p>
                                <p class="font-medium text-gray-400 text-sm">Director of Sales at Workflow</p>
                            </div>
                        </div>
                        <blockquote class="text-gray-400 z-10 leading-7 relative pb-3">"Using this service was the best decision I've ever made. We have been able to 10x our output with minimal effort. Love these guys!"</blockquote>
                        <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-gray-200" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path></svg>
                    </div>
                    <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative">
                        <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
                            <img src="https://cdn.devdojo.com/images/january2022/02-mike-samson.jpeg" class="rounded-full mr-3 w-12 h-12">
                            <div class="relative">
                                <p class="font-semibold text-gray-600 leading-none my-1">Mike Samson</p>
                                <p class="font-medium text-gray-400 text-sm">CEO at Blocknet</p>
                            </div>
                        </div>
                        <blockquote class="text-gray-400 z-10 leading-7 relative pb-3">"I can't express how many times this product has saved my ass on a day-to-day basis!<br><br>Thanks for the awesome product guys. Keep up the great work."</blockquote>
                        <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-gray-200" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path></svg>
                    </div>
                    <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative">
                        <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
                            <img src="https://cdn.devdojo.com/images/january2022/03-jack-bennington.jpeg" class="rounded-full mr-3 w-12 h-12">
                            <div class="relative">
                                <p class="font-semibold text-gray-600 leading-none my-1">Jack Bennington</p>
                                <p class="font-medium text-sm text-gray-400">CTO at TNT Solutions</p>
                            </div>
                        </div>
                        <blockquote class="text-gray-400 z-10 leading-7 relative pb-3">"Simply Amazing!<br><br>These are the best guys in this field. It's a no-brainer to use them over the competition."</blockquote>
                        <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-gray-200" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path></svg>
                    </div>
                </div>

                <div class="col-span-4 sm:block hidden space-y-5">
                    <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative">
                        <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
                            <img src="https://cdn.devdojo.com/images/january2022/04-steve-mitchell.jpeg" class="rounded-full mr-3 w-12 h-12">
                            <div class="relative">
                                <p class="font-semibold text-gray-600 leading-none my-1">Steve Mitchell</p>
                                <p class="font-medium text-sm text-gray-400">CEO and Partner at Rakstation</p>
                            </div>
                        </div>
                        <blockquote class="text-gray-400 z-10 leading-7 relative pb-3">"Finding the perfect solution for our use-case was easier than ever after we utilized these tools and services. <br><br>The developer API was a delight to work with and the team is always willing to help out. I can't recommend these guys enough!"</blockquote>
                        <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-gray-200" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" class=""></path></svg>
                    </div>
                    <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative">
                        <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
                            <img src="https://cdn.devdojo.com/images/january2022/05-ron-garrison.jpeg" class="rounded-full mr-3 w-12 h-12">
                            <div class="relative">
                                <p class="font-semibold text-gray-600 leading-none my-1">Ron Garrison</p>
                                <p class="font-medium text-sm text-gray-400">Lead Developer at Devworks</p>
                            </div>
                        </div>
                        <blockquote class="text-gray-400 z-10 leading-7 relative pb-3">"We had been looking for a good solution to maintain our infastructure, after integration these solutions into our platform we have saved hundreds of hours."</blockquote>
                        <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-gray-200" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path></svg>
                    </div>
                    <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative">
                        <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
                            <img src="https://cdn.devdojo.com/images/january2022/06-charlie-madocks.jpeg" class="rounded-full mr-3 w-12 h-12">
                            <div class="relative">
                                <p class="font-semibold text-gray-600 leading-none my-1">Charlie Madocks</p>
                                <p class="font-medium text-sm text-gray-400">Director of Marketing at Goji</p>
                            </div>
                        </div>
                        <blockquote class="text-gray-400 z-10 leading-7 relative pb-3">"This team is at the edge of innovation. We are so proud to be one of their longest customers.<br><br>You guys are the best!"</blockquote>
                        <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-gray-200" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path></svg>
                    </div>
                </div>

                <div class="col-span-4 lg:block hidden space-y-5">
                    <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative">
                        <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
                            <img src="https://cdn.devdojo.com/images/january2022/07-nick-thompson.jpeg" class="rounded-full mr-3 w-12 h-12">
                            <div class="relative">
                                <p class="font-semibold text-gray-600 leading-none my-1">Nick Thompson</p>
                                <p class="font-medium text-sm text-gray-400">CTO at Craftyworks</p>
                            </div>
                        </div>
                        <blockquote class="text-gray-400 z-10 leading-7 relative pb-3">"Amazing team and amazing service.<br><br>If you want the best possible chance of succeeding in your business you'll utilize this service and thrive with them!"</blockquote>
                        <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-gray-200" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" class=""></path></svg>
                    </div>
                    <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative">
                        <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
                            <img src="https://cdn.devdojo.com/images/january2022/08-jake-walters.jpeg" class="rounded-full mr-3 w-12 h-12">
                            <div class="relative">
                                <p class="font-semibold text-gray-600 leading-none my-1">Jake Walters</p>
                                <p class="font-medium text-sm text-gray-400">CFO at Edgeworks</p>
                            </div>
                        </div>
                        <blockquote class="text-gray-400 z-10 leading-7 relative pb-3">"We couldn't be happier with how easy it was to integrate their service with our application.<br><br>We are now having the best year in sales and customer satisfaction."</blockquote>
                        <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-gray-200" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path></svg>
                    </div>
                    <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative">
                        <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
                            <img src="https://cdn.devdojo.com/images/january2022/09-sam-robinson.jpeg" class="rounded-full mr-3 w-12 h-12">
                            <div class="relative">
                                <p class="font-semibold text-gray-600 leading-none my-1">Sam Robinson</p>
                                <p class="font-medium text-sm text-gray-400">Lead Developer at Socnet</p>
                            </div>
                        </div>
                        <blockquote class="text-gray-400 z-10 leading-7 relative pb-3">"I didn't realize it was this easy to get organized and integrated with their service!"</blockquote>
                        <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-gray-200" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path></svg>
                    </div>
                </div>

            </div>
        </div>
        <div class="bg-gradient-to-t from-gray-50 h-96 w-full bottom-0 left-0 absolute z-20 flex items-end justify-center">
            <a href="#_" class="mb-12 font-medium text-gray-400 hover:text-gray-500 rounded-lg text-sm flex items-center justify-center">
                <svg class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                <span>View All Testimonials</span>
            </a>
        </div>
    </section>
    {{-- end testimonials --}}

@endsection
