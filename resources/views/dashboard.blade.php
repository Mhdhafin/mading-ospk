@extends('_layouts.main')

@section('body')
    <div class="flex py-4 justify-between mx-auto bg-slate-200 items-center">
        @if (session()->has('success'))
            <div style="bottom: 10px; right: 20px;"
                class="Toast alert alert-success fixed right-0 max-w-xs bg-teal-500 border border-gray-200 rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700"
                role="alert">
                <div class="flex p-4">
                    <div class="flex-shrink-0">
                        <svg class="flex-shrink-0 size-4 text-white dark:text-blue-500 mt-0.5"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </div>
                    <div class="ms-3">
                        <p class="text-sm text-white">
                            {{ session('success') }}
                        </p>
                    </div>
                </div>
            </div>
        @endif
        <div class="mb-2">
            <a href="/dashboard/post/create" class="rounded-md text-white bg-blue-500 py-2 px-6"><span
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
                        text
                    </th>
                    <th scope="col" class="px-6 py-3">
                        action
                    </th>
                </tr>
            </thead>
            <tbody>

                <tr class="bg-white border-b ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="./assets/img/profile.jpg" class="h-14 w-14" alt="">
                    </th>
                    <td class="px-6 py-4">
                        Prestasi peserta lomba
                    </td>
                    <td class="px-6 py-4">
                        14 Juni 2029
                    </td>
                    <td class="px-6 text-sm py-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsa et voluptatum sint. Explicabo ad
                        similique autem quam. Consectetur minima quibusdam assumenda nisi,
                    </td>
                    <td class="px-6 py-4 flex ">
                        <a href="#" class="font-medium py-2 px-4 bg-blue-500 text-white  hover:underline">Edit</a>
                        <a href="#"
                            class="font-medium py-2 px-4 bg-red-500 text-white  hover:underline ml-3">Delete</a>
                    </td>
                </tr>
                <tr class="bg-white border-b ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="./assets/img/profile.jpg" class="h-14 w-14" alt="">
                    </th>
                    <td class="px-6 py-4">
                        Prestasi peserta lomba
                    </td>
                    <td class="px-6 py-4">
                        14 Juni 2029
                    </td>
                    <td class="px-6 text-sm py-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsa et voluptatum sint. Explicabo ad
                        similique autem quam. Consectetur minima quibusdam assumenda nisi,
                    </td>
                    <td class="px-6 py-4 flex ">
                        <a href="#" class="font-medium py-2 px-4 bg-blue-500 text-white  hover:underline">Edit</a>
                        <a href="#"
                            class="font-medium py-2 px-4 bg-red-500 text-white  hover:underline ml-3">Delete</a>
                    </td>
                </tr>
                <tr class="bg-white border-b ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="./assets/img/profile.jpg" class="h-14 w-14" alt="">
                    </th>
                    <td class="px-6 py-4">
                        Prestasi peserta lomba
                    </td>
                    <td class="px-6 py-4">
                        14 Juni 2029
                    </td>
                    <td class="px-6 text-sm py-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsa et voluptatum sint. Explicabo ad
                        similique autem quam. Consectetur minima quibusdam assumenda nisi,
                    </td>
                    <td class="px-6 py-4 flex ">
                        <a href="#" class="font-medium py-2 px-4 bg-blue-500 text-white  hover:underline">Edit</a>
                        <a href="#"
                            class="font-medium py-2 px-4 bg-red-500 text-white  hover:underline ml-3">Delete</a>
                    </td>
                </tr>



            </tbody>
        </table>
    </div>
@endsection
