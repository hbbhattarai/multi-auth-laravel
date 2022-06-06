@extends('layouts.app')

@section('content')

<div class="font-pt-serif h-screen bg-yellow-200 flex justify-center items-center">
    <div class="mx-auto p-4 bg-yellow-200 flex flex-col items-center justify-center text-gray-700 w-full">
        <div class="w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12 mb-4">
            <h1 class="text-4xl font-semibold ">Welcome back.</h1>
            <div class="flex justify-center">
                <img src='img/underline1.svg' alt="" />
            </div>
        </div>
        <div class="w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12 mb-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input
                    class="mb-4 p-2 appearance-none block w-full bg-gray-200 placeholder-gray-900 rounded border focus:border-teal-500"
                    type="email" name="email" placeholder="Email" />
                @error('email')
                <span class="text-red-100 font-thin" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input
                    class="mb-4 p-2 appearance-none block w-full bg-gray-200 placeholder-gray-900 rounded border focus:border-teal-500"
                    type="password" name="password" placeholder="Password" />
                @error('password')
                <span class="text-red-100 font-thin" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="flex items-center justify-around">
                    <div class="w-1/2 flex items-center">
                        <input id="remember-me" type="checkbox" class="mt-1 mr-2" />
                        <label for="remember-me">Remember me!</label>
                    </div>
                    <button class="py-2 px-4 text-white bg-black rounded-3xl" type="submit">
                        Log In
                    </button>
                </div>
        </div>
        <div class="text-right w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12 mb-6">
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-sm font-thin text-gray-500 hover:underline
                cursor-pointer">Forgot your password?
            </a>
            @endif
        </div>
        </form>
    </div>



</div>

@endsection