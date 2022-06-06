@extends('staff.app')

@section('content')
<div class="mx-auto flex flex-col items-center  justify-center text-gray-700 w-full py-12">
    <div class="w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12 mb-4">
        <h1 class="text-4xl font-semibold ">Welcome back.... {{ Auth::user()->name }}</h1>

    </div>
</div>

@endsection