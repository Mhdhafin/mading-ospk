@extends('layouts.main')
@section('title', 'Posts Details')

{{-- @push('style')
@endpush --}}

@section('body')
    <x-header>
        Detail Posts
    </x-header>
    <section class="pt-16 pb-12">
        <div class="container p-6">
            {{-- <div class="flex flex-wrap">
                <div class="md:w-2/3  w-full self-center shadow-lg">
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

                <div class="md:w-1/3 w-full self-end ">
                    <div class="ml-12 mt-24>
                        <div class="w-full max-w-sm min-w-[200px]">
                        <div class="relative flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="absolute w-5 h-5 top-2.5 left-2.5 text-slate-600">
                                <path fill-rule="evenodd"
                                    d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <input
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-10 pr-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="UI Kits, Dashboards..." />

                            <button
                                class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                                type="button">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="flex flex-wrap">
                <!-- Bagian Kiri: Post -->
                <div class="md:w-2/3 w-full self-center shadow-lg">
                    <img src="/storage/{{ $post->image }}"
                        class="object-cover w-full h-72 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500" alt="">

                    <div class="p-6 bg-white space-y-2 lg:col-span-5">
                        <span
                            class="bg-yellow-300 p-2 rounded-full text-xs text-gray-600">{{ $post->created_at->format('j F Y') }}</span>
                        <h2 class="text-2xl font-semibold">{{ $post->title }}</h2>
                        <p class="pb-5 text-base">{{ $post->content }}</p>
                        <a href="/blog" class="flex items-center text-blue-600 font-medium underline">
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

                <!-- Bagian Kanan: Search, Recent Posts, Recent Comments -->
                <div class="mt-12 md:mt-0 md:w-1/3 w-full self-start p-4">
                    <!-- Search -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold mb-4">Search</h3>

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="absolute w-5 h-5 top-2.5 left-2.5 text-slate-600">
                            <path fill-rule="evenodd"
                                d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <form action="{{ route('search.result') }}" method="GET">
                            <div class="relative flex items-center">
                                <input name="query"
                                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-10 pr-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                    placeholder="Search posts..." />
                                <button
                                    class="ml-2 rounded-md bg-red-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-red-700 hover:bg-red-700 active:bg-red-700 disabled:pointer-events-none disabled:opacity-50">
                                    Search
                                </button>
                            </div>
                        </form>

                    </div>

                    <!-- Recent Posts -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold mb-4">Recent Posts</h3>
                        <ul class="space-y-2">
                            @foreach ($recentPosts as $recentPost)
                                <li>
                                    <a href="/posts/{{ $recentPost->slug }}" class="text-blue-600 hover:underline">
                                        {{ $recentPost->title }}
                                    </a>
                                    <span
                                        class="text-xs text-gray-500 block">{{ $recentPost->created_at->format('j F Y') }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Recent Comments -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Recent Comments</h3>
                        <ul class="space-y-2">
                            {{-- @foreach ($recentComments as $comment)
                                <li class="border-b pb-2">
                                    <span class="block text-gray-700">{{ $comment->content }}</span>
                                    <span class="text-xs text-gray-500">By {{ $comment->author }} on
                                        {{ $comment->post->title }}</span>
                                </li>
                            @endforeach --}}
                        </ul>
                    </div>
                </div>
            </div>



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
