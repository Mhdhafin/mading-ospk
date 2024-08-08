@extends('_layouts.main')

@section('body')
    <div class="w-full">
        @if (Session::has('status'))
                    <div class="mt-2 mb-3 bg-red-100 border border-red-200 text-sm text-red-800 rounded-lg p-4 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500"
                        role="alert" tabindex="-1" aria-labelledby="hs-soft-color-success-label">
                        <span id="hs-soft-color-success-label" class="font-bold">{{ Session::get('status') }}</span>
                    </div>
                @endif
        @if (Session::has('success'))
        <div class="mt-2 mb-3 transition duration-300  bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500"
            role="alert" tabindex="-1" aria-labelledby="hs-soft-color-success-label">
            <span id="hs-soft-color-success-label" class="font-bold">{{ Session::get('success') }}</span>
        </div>
    @endif
    </div>
    <div class="flex py-4 justify-between mx-auto bg-slate-200 items-center">

        <div class="mb-2">
            <a href="{{ url("/admin/post/create") }}" class="rounded-md text-white bg-blue-500 py-2 px-6"><span
                    class="text-xl font-bold">+
                </span>Postingan</a>
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md ">
        <table class="w-full text-sm text-left rtl:text-right text-black ">
            <thead class="text-xs text-gray-700 uppercase bg-slate-200  ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Gambar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Judul
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Content
                    </th>
                    <th scope="col" class="px-6 py-3">
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $posts)


                <tr class="bg-white border-b ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="./storage/image-posts/{{ $posts->image }}" class="h-14 w-14" alt="">
                    </th>
                    <td class="px-6 py-4">
                        {{ $posts->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $posts->author }}
                    </td>
                    <td class="px-6 text-sm py-4">
                        {{ $posts->content }}
                    </td>
                    <td class="px-6 py-4 flex ">
                        <a href="#" class="font-medium py-2 px-4 bg-blue-500 text-white  hover:underline">Edit</a>
                        <form action="/admin/post/{{ $posts->id }}" method="POST"
                        >
                        @method('delete')
                        @csrf
                        <button type="submit" onclick="return confirm('Delete Product?')" class="ml-3 flex items-center bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                            Delete
                          </button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
