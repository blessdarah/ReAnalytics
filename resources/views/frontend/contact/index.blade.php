@extends('layouts.app')

@section('content')
<livewire:page-banner title="Contact" subTitle="We are happy to always hear from you" pageName="Contact" />

<!-- contact area start -->
<div class="px-4 lg:px-0 max-w-4xl mx-auto my-8 lg:my-16">
  <div class="grid md:grid-cols-4 gap-8 mb-4 md:mb-16">
    <div data-aos="slide-left" data-aos-duration="700" class="border border-gray-50 bg-white px-3 py-4 rounded">
      <i class="bx bx-phone"></i>
      <p class="text-gray-600">6738 xxx - xxx - xxx</p>
    </div>
    <div  data-aos="slide-left" data-aos-duration="900" class="border border-gray-50 bg-white px-3 py-4 rounded">
      <i class="bx bx-map"></i>
      <p class="text-gray-600">Mobile Nkwen, Bamenda</p>
    </div>
    <div data-aos="slide-left" data-aos-duration="1300" class="border border-gray-50 bg-white lg:col-span-2 px-3 py-4 rounded hover:shadow-none">
      <i class="bx bx-envelope"></i>
      <p class="text-gray-600">info@reanalytics.com</p>
    </div>
  </div>
  <form data-aos="fade-up" data-aos-duration="1800"  class="mt-8 lg:mt-16" action="{{route('app.contact-us.send')}}" method="POST">
      @csrf
      <div class="flex gap-4 item-center">
        <div class="mb-4 flex-1">
              <label for="name">Full name</label>
              <input id="name" name="name" type="text" value="{{old('name') ?? ''}}" class="rounded color-gray-700 py-1 px-2 h-12 border border-gray-700 bg-white block w-full">
              @error('name')
                  <p class="font-small text-red-400 my-1">{{$message}}</p>
              @enderror
          </div>
          <div class="mb-4 flex-1">
              <label for="subject">Subject</label>
              <input id="subject" name="subject" type="text" value="{{old('subject') ?? ''}}" class="rounded color-gray-700 py-1 px-2 h-12 border border-gray-700 bg-white block w-full">
              @error('subject')
                  <p class="font-small text-red-400 my-1">{{$message}}</p>
              @enderror
          </div>
        </div>

      <div class="mb-4">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" value="{{old('email') ?? ''}}" class="rounded color-gray-700 py-1 px-2 h-12 border border-gray-700 bg-white block w-full">
          @error('email')
              <p class="font-small text-red-400 my-1">{{$message}}</p>
          @enderror
      </div>

      <div class="mb-4">
          <label for="message">Message</label>
          @error('message')
              <p class="font-small text-red-400 my-1">{{$message}}</p>
          @enderror
          <textarea id="message" rows="6" name="message" type="message" class="rounded color-gray-700 py-1 px-2 border border-gray-700 bg-white block w-full"></textarea>
      </div>

      <button class="rounded w-full bg-blue-700 text-white py-3 hover:bg-blue-900 transition duration-300 ease-in-out">Submit</button>
  </form>
</div>
<!-- contact area end -->

@endsection
