@extends('layouts.main')
@section('title', 'Blog')

@section('body')
    {{-- <header class="mt-12 bg-red-900 shadow-md rounded-t-md">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-white">Postingan</h1>
        </div>
    </header> --}}
    <x-header>
        Blog
    </x-header>
    <section class="pt-24 pb-32 rounded-b-md">

        <div class="w-full px-4  grid  grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($posts as $post)
                <div class="shadow-lg hover:scale-105 bg-white  transition duration-300 rounded-md max-w-sm mx-auto">
                    <img src="/storage/{{ $post->image }}" role="presentation"
                        class="object-cover w-full rounded h-44 dark:bg-gray-500">
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

                <div class="w-full px-4">
                    <div class="flex justify-center items-center text-3xl font-bold py-20 text-gray-600 ">
                        Postingan Tidak Tersedia
                    </div>
                </div>
            @endforelse
        </div>

    </section>



    {{-- <section class="dark:bg-gray-100 dark:text-gray-800">
    <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
        <a rel="noopener noreferrer" href="/admin/post/{{ $post[0]->id }}"
            class="block shadow-lg max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-50">
            <img src="./storage/{{ $post[0]->image }}" alt=""
                class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
            <div class="p-6 space-y-2 lg:col-span-5">
                <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">
                    {{ $post[0]->title }}
                </h3>
                <span class="text-xs dark:text-gray-600">{{ $post[0]->created_at->format('j F Y') }}</span>
                <p>{{ $post[0]->content }}</p>

            </div>
        </a>

        <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($post->skip(1) as $posts)
                <a rel="noopener noreferrer" href="#"
                    class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-50">
                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                        src="./storage/{{ $posts->image }}">
                    <div class="p-6 space-y-2">
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">
                            {{ $posts->title }}</h3>
                        <span class="text-xs dark:text-gray-600">{{ $posts->created_at->format('j F Y') }}</span>
                        <p>{{ $posts->content }}</p>
                    </div>
                </a>
            @endforeach

        </div>

    </div>
</section> --}}
@endsection
