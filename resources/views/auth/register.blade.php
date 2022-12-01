@extends('layouts.app')

@section('content')
    <div class="mx-auto lg:w-2/6">
        <div class="rounded-lg p-4 my-4 lg:my-8 lg:rounded-xl">
            <div class="text-center mb-8">
                <h2 class="font-bold h2">Register</h2>
                <p class="text-gray-500">Create new admin account</p>
            </div>
            <!-- input fields -->
            <form action="{{route('register')}}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="username">Username</label>
                    @error('username')
                        <p class="font-small text-red-400 my-1">{{$message}}</p>
                    @enderror
                    <input id="username" name="name" type="text" value="{{old('username') ?? ''}}" class="rounded color-gray-700 py-1 px-2 h-12 border border-gray-700 bg-white block w-full">
                </div>

                <div class="mb-4">
                    <label for="email">Email</label>
                    @error('email')
                        <p class="font-small text-red-400 my-1">{{$message}}</p>
                    @enderror
                    <input id="email" name="email" type="email" value="{{old('email') ?? ''}}" class="rounded color-gray-700 py-1 px-2 h-12 border border-gray-700 bg-white block w-full">
                </div>

                <div class="mb-4">
                    <label for="password">Password</label>
                    @error('password')
                        <p class="font-small text-red-400 my-1">{{$message}}</p>
                    @enderror
                    <input id="password" name="password" type="password" class="rounded color-gray-700 py-1 px-2 h-12 border border-gray-700 bg-white block w-full">
                </div>

                <button class="rounded w-full bg-blue-700 text-white py-3 hover:bg-blue-900 transition duration-300 ease-in-out">Register</button>
                <a href="{{route('login')}}" class="block text-blue-500 mt-4 text-center underline hover:text-blue-600 transition duration-300 ease-in-out">Sign In</a>
            </form>
        </div>
    </div>

@endsection
