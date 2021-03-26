@extends('layouts.landing')

@section('content')


    <div class="container px-8 mx-auto mt-8 lg:px-36 lg:my-16">

			<form action="{{ route('login') }}" method="POST" class="flex flex-col space-y-4 justify-start md:w-3/6 lg:w-2/6 bg-white rounded shadow-lg px-4 md:px-8 md:py-8 py-6">
				{{-- csrf token --}}

				@csrf

				<h3 class="text-2xl font-semibold text-blue-800 mb-2">{{__('Login')}}</h3>

				<div class="form-group">
					<label for="email" class="block mb-2">
						{{__('Email address')}}
					</label>
					@error('email')
						<div class="bg-red-100 text-sm text-red-700 px-3 py-2 rounded mb-2">{{ $message }}</div>
					@enderror
					<input type="text" id="email" name="email" class="w-full text-gray-500 py-2 bg-gray-100 border-0 px-3 rounded focus:ring-blue-400" value="{{ old('email') ?? '' }}" />
				</div>


				<div class="form-group">
					<label for="password" class="block mb-2">
						{{__('Password')}}
					</label>
					@error('password')
						<div class="bg-red-100 text-sm text-red-700 px-3 py-2 rounded mb-2">{{ $message }}</div>
					@enderror
					<input type="password" id="password" name="password" class="w-full text-gray-500 py-2 bg-gray-100 border-0 px-3 rounded focus:ring-blue-400" value="{{ old('password') ?? '' }}" />
				</div>

				<button class="bg-blue-500 focus:bg-opacity-75 active:bg-blue-600 text-blue-100 rounded text-center inline-block py-3 px-4">{{__('Submit')}}</button>

			</form>


		</div>
	</div>

@endsection
