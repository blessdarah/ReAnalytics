@extends('layouts.base')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="px-4 md:px-0 md:w-2/5 lg:w-3/12">
            <h1 class="mb-4 text-2xl font-bold text-center text-gray-700 uppercase">{{ __('Register') }}</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                {{-- name --}}
                @error('name')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="name" type="text" class="input-field focus:ring-blue-400 @error('name') ring-red-400 @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                {{-- email address --}}
                @error('email')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="email" type="email"
                    class="input-field focus:ring-blue-400 @error('email') ring-red-400 @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" placeholder="Email address">

                {{-- password --}}
                @error('password')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="password" type="password"
                    class="input-field focus:ring-blue-400 @error('password') ring-red-400 @enderror" name="password"
                    value="{{ old('password') }}" required autocomplete="new-password" placeholder="Password">

                {{-- submit button --}}
                <button type="submit"
                    class="w-full h-16 py-2 text-center text-white bg-blue-700 rounded shadow ring-2 hover:ring-blue-700 active:bg-blue-600">{{ __('Register') }}</button>

            </form>
        </div>
    </div>


@endsection
