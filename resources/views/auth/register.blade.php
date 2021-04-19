@extends('layouts.landing')

@section('content')


    <div class="container px-8 mx-auto mt-8 lg:px-36 lg:my-16">

        <form action="{{ route('register') }}" method="POST"
            class="flex flex-col justify-start px-4 py-6 space-y-4 bg-white rounded shadow-lg md:w-3/6 lg:w-2/6 md:px-8 md:py-8">
            <h3 class="mb-2 text-2xl font-semibold text-blue-800">{{ __('Sign Up') }}</h3>
            {{-- csrf token --}}

            @csrf

            @forelse ($errors->all() as $error)
                <p>{{ $error }}</p>
            @empty
                <p>{{ __('No errors found') }}</p>
            @endforelse

            <div class="form-group">
                <label for="username" class="block mb-2">
                    {{ __('Username') }}
                </label>
                @error('name')
                    <div class="px-3 py-2 mb-2 text-sm text-red-700 bg-red-100 rounded">{{ $message }}</div>
                @enderror
                <input type="text" id="username" name="name"
                    class="w-full px-3 py-2 text-gray-500 bg-gray-100 border-0 rounded focus:ring-blue-400"
                    value="{{ old('username') ?? '' }}" />
            </div>

            <div class="form-group">
                <label for="email" class="block mb-2">
                    {{ __('Email address') }}
                </label>
                @error('email')
                    <div class="px-3 py-2 mb-2 text-sm text-red-700 bg-red-100 rounded">{{ $message }}</div>
                @enderror
                <input type="text" id="email" name="email"
                    class="w-full px-3 py-2 text-gray-500 bg-gray-100 border-0 rounded focus:ring-blue-400"
                    value="{{ old('email') ?? '' }}" />
            </div>


            <div class="form-group">
                <label for="password" class="block mb-2">
                    {{ __('Password') }}
                </label>
                @error('password')
                    <div class="px-3 py-2 mb-2 text-sm text-red-700 bg-red-100 rounded">{{ $message }}</div>
                @enderror
                <input type="password" id="password" name="password"
                    class="w-full px-3 py-2 text-gray-500 bg-gray-100 border-0 rounded focus:ring-blue-400" />
            </div>

            <button
                class="inline-block px-4 py-3 text-center text-blue-100 bg-blue-500 rounded focus:bg-opacity-75 active:bg-blue-600">{{ __('Sign up') }}</button>

        </form>
    </div>
    </div>

@endsection
