@extends('layouts.landing')


@section('content')

    <div class="container px-8 mx-auto mt-8 lg:px-36 lg:my-16">

		<div class="grid grid-cols-2 gap-8">


			<ul class="flex flex-col space-y-6">

				<li class="flex space-x-4">
					<div class="flex items-center justify-center w-20 h-20 text-green-700 bg-green-100">
						<i class="bx bx-like bx-md"></i>
						</div>
						<div class="flex-1">
						<p class="mb-2 font-semibold text-gray-800">
							{{ __('Where to find us') }}
						</p>
						<p class="text-gray-600">
							{{ __('Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
								sed diam nonumy eirmod tempor invidunt ut labore et
									dolore magna') }}
						</p>
					</div>
				</li>

				<li class="flex space-x-4">
					<div class="flex items-center justify-center w-20 h-20 text-green-700 bg-green-100">
						<i class="bx bx-face bx-md"></i>
					</div>
					<div class="flex-1">
						<p class="mb-2 font-semibold text-gray-800">
							{{ __('Contact info') }}
						</p>
						<p class="text-gray-600">
							{{ __('Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
							sed diam nonumy eirmod tempor invidunt ut labore et
							dolore magna') }}
						</p>
					</div>
				</li>

			</ul>

			<form action="#" class="flex flex-col space-y-4 justify-start">
				<h3 class="text-2xl font-semibold text-blue-800 mb-2">{{__('Reach out to us')}}</h3>
				<div class="form-group">
					<label for="name" class="block mb-2">
						{{__('Your name')}}
					</label>
					<input type="text" name="name" placeholder="Enter your name" class="w-full text-gray-500 py-2 px-3 rounded focus:ring-blue-400">
				</div>

				<div class="form-group">
					<label for="email" class="block mb-2">
						{{__('Your email address')}}
					</label>
					<input type="text" name="email" placeholder="Enter your email" class="w-full text-gray-500 py-2 px-3 rounded focus:ring-blue-400">
				</div>

				<div class="form-group">
					<label for="message" class="block mb-2">
						{{__('Your message')}}
					</label>
					<textarea name="message" placeholder="Enter message" class="w-full text-gray-500 py-2 px-3 rounded focus:ring-blue-400"></textarea>
				</div>

				<button class="bg-blue-500 focus:bg-opacity-75 active:bg-blue-600 text-blue-100 rounded-lg text-center inline-block py-4 px-8">{{__('Submit')}}</button>

			</form>


		</div>
	</div>
@endsection
