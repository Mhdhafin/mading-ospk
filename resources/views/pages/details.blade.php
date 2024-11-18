@extends('layouts.main')

@section('body')
    <section class="pt-16 pb-12">
        <div class="w-full px-4 shadow-lg">
            <img src="/storage/{{ $post->image }}"
                class="object-cover w-full h-72 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500" alt="">

            <div class="p-6 bg-white space-y-2 lg:col-span-5">
                <span
                    class="bg-yellow-300 p-2 rounded-full text-xs text-gray-600">{{ $post->created_at->format('j F Y') }}</span>

                <h2 class="text-2xl  font-semibold ">{{ $post->title }}</h2>

                <p class="pb-5 text-base">{{ $post->content }}</p>

                <a href="/blog" class=" flex items-center text-blue-600 font-medium underline">
                    <span>Back to posts</span>
                    <span class="mt-1 ml-3">
                        <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                </a>
            </div>

        </div>
    </section>

    {{-- <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
        <a rel="noopener noreferrer" href="#"
            class="block shadow-lg max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-50">
            <img src="/storage/{{ $post->image }}" alt=""
                class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
            <div class="p-6 space-y-2 lg:col-span-5">
                <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">
                    {{ $post->title }}
                </h3>
                <span class="text-xs dark:text-gray-600">{{ $post->created_at->format('j F Y') }}</span>
                <p>{{ $post->content }}</p>
            </div>
        </a> --}}
@endsection
