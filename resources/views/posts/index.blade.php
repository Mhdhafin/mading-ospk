<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="bg-red-900 flex justify-between items-center mx-auto p-8">
        <h2 class="text-2xl font-semibold text-white">Postingan</h2>

    </div>



    <section class="dark:bg-gray-100 dark:text-gray-800">
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
    </section>

</x-layout>
