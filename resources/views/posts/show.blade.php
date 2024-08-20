<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>

<div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
    <a rel="noopener noreferrer" href="#"
        class="block shadow-lg max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-50">
        <img src="./storage/{{ $post->image }}" alt=""
            class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
        <div class="p-6 space-y-2 lg:col-span-5">
            <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">
                {{ $post->title }}
            </h3>
            <span class="text-xs dark:text-gray-600">{{ $post->created_at->format('j F Y') }}</span>
            <p>{{ $post->content }}</p>
        </div>
    </a>

</x-layout>
