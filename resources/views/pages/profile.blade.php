@extends('layouts.main')
@section('title', 'Profile')

@section('body')
    <div
        class="container mx-auto lg:w-1/2 xl:w-2/7 sm:w-full md:w-2/3    bg-white  shadow-lg    transform   duration-200 easy-in-out">
        <div class="h-32 overflow-hidden">
            <img class="w-full"
                src="https://images.unsplash.com/photo-1605379399642-870262d3d051?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80"
                alt="" />
        </div>

        <div class="flex justify-center px-5  -mt-12">
            <img class="h-40 w-40 bg-white p-2 rounded-full   "
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80"
                alt="" />

        </div>
        <div class=" ">
            <div class="text-center px-14">
                <h2 class="text-gray-800 text-3xl font-bold">{{ auth()->user()->name }}</h2>
                <a class="text-gray-400 mt-2 hover:text-blue-500" href="https://www.instagram.com/immohitdhiman/"
                    target="BLANK()">{{ auth()->user()->username }}</a>
                <p class="mt-2 text-gray-500 text-sm">{{ auth()->user()->email }}</p>
            </div>
            <hr class="mt-6" />

        </div>
    </div>
@endsection
