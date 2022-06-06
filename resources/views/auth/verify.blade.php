@extends('layouts.app')

@section('content')
<div class="font-pt-serif h-screen bg-yellow-200 flex justify-center items-center">
    <div class="mx-auto p-4 bg-yellow-200 flex flex-col items-center justify-center text-gray-700 w-full">
        <div class="w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12 mb-4">
            <h1 class="text-4xl font-semibold ">Welcome...</h1>
        </div>
        <div class="w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12 mb-6">
            <form method="POST" action="{{ route('verification.resend') }}">
                @csrf

                <p class="text-xl font-thin text-gray-500
                cursor-pointer my-2">Verify Your Email Address
                </p>
                <p class="text-sm font-thin text-gray-500 hover:underline
                cursor-pointer my-2">Please go to your inbox and verify your email address
                </p>
                <p class="text-sm font-thin text-gray-500 hover:underline
                cursor-pointer my-2">Upon verification of email you have agreed to recieve phone call from system
                    manager
                </p>
                @if (session('resent'))
                <p class="text-lg font-thin text-gray-500 hover:underline
                cursor-pointer my-2">A fresh verification link has been sent to your email address.
                </p>
                @endif


                <div class="flex items-center justify-around">
                    <button class="py-2 px-4 text-white bg-black rounded-3xl" type="submit">
                        Click here to request another
                    </button>
                </div>
        </div>

        </form>
    </div>



</div>
@endsection
