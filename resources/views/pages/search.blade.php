@extends('layouts.main')
@section('title', 'Posts Search')

{{-- @push('style')
@endpush --}}

@section('body')
    {{-- @dd($post) --}}
    <x-header>
        Posts Search
    </x-header>
    {{-- <section class="pt-16 pb-12">
        <div class="container p-6">

            <div class="flex flex-wrap">
                @forelse ($post as $post)
                    <!-- Bagian Kiri: Post -->
                    <div class="md:w-3/4 px-8 w-full mb-5 self-center shadow-lg">
                        <img src="/storage/{{ $post->image }}"
                            class="object-cover w-full h-72 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500" alt="">

                        <div class="p-6 space-y-2 lg:col-span-5">
                            <span
                                class="bg-yellow-300 p-2 rounded-full text-xs text-gray-600">{{ $post->created_at->format('j F Y') }}</span>

                            <h2 class="text-2xl  font-semibold ">{{ $post->title }}</h2>

                            <p class="pb-5 text-base">{{ Str::limit($post->content, 40, '...') }}</p>



                            <a class="group relative inline-flex items-center overflow-hidden rounded bg-red-600 px-8 py-3 text-white focus:outline-none focus:ring active:bg-red-500"
                                href="/posts/{{ $post->slug }}">
                                <span class="absolute -end-full transition-all group-hover:end-4">
                                    <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </span>

                                <span class="text-sm font-medium transition-all group-hover:me-4"> Selengkapnya </span>
                            </a>




                        </div>
                    </div>
                @empty
                    <div class="md:w-3/4 flex justify-center items-center w-full">
                        <p class="text-slate-400 text-4xl text-center font-semibold">Posts tidak ditemukan!</p>
                    </div>
                @endforelse

                <!-- Bagian Kanan: Search, Recent Posts, Recent Comments -->
                <div class="mt-12 h-screen top-0 md:mt-0 md:w-1/4 w-full self-start p-4 sticky">
                    <!-- Search -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold mb-4">Search</h3>

                        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute w-5 h-5 top-2.5 left-2.5 text-slate-600">
                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                          </svg> --}}
    {{-- <form action="{{ route('search.result') }}" method="GET">
                            <div class="relative flex items-center">
                                <input name="cari"
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


                </div>

            </div>
        </div>
    </section> --}}

    <section class="pt-16 pb-12">
        <div class="container p-6">

            <div class="flex flex-wrap md:flex-nowrap">

                <!-- Bagian Kiri: Post -->
                <div class="md:w-3/4 w-full px-8">
                    @forelse ($post as $post)
                        <div class="mb-5 self-center shadow-lg">
                            <img src="/storage/{{ $post->image }}"
                                class="object-cover w-full h-72 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500"
                                alt="">

                            <div class="p-6 space-y-2 lg:col-span-5">
                                <span
                                    class="bg-yellow-300 p-2 rounded-full text-xs text-gray-600">{{ $post->created_at->format('j F Y') }}</span>

                                <h2 class="text-2xl font-semibold">{{ $post->title }}</h2>

                                <p class="pb-5 text-base">{{ Str::limit($post->content, 200, '...') }}</p>

                                <a class="group relative inline-flex items-center overflow-hidden rounded bg-red-600 px-8 py-3 text-white focus:outline-none focus:ring active:bg-red-500"
                                    href="/posts/{{ $post->slug }}">
                                    <span class="absolute -end-full transition-all group-hover:end-4">
                                        <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </span>
                                    <span class="text-sm font-medium transition-all group-hover:me-4"> Selengkapnya </span>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="flex justify-center items-center w-full">
                            <p class="text-slate-400 text-4xl text-center font-semibold">Posts tidak ditemukan!</p>
                        </div>
                    @endforelse
                </div>

                <!-- Bagian Kanan: Search, Recent Posts, Recent Comments -->
                <div class="md:w-1/4  h-screen top-0 w-full p-4">
                    <!-- Search -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold mb-4">Search</h3>
                        <form action="{{ route('search.result') }}" method="GET">
                            <div class="relative flex items-center">
                                <input name="cari"
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


                </div>

            </div>
        </div>
    </section>


    {{-- {{ $post->links() }} --}}

@endsection
