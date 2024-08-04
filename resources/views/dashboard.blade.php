@extends('_layouts.main')

@section('body')
<div class="flex py-4 justify-between mx-auto bg-slate-200 items-center">
    <div class="px-4">
        <a href="/posts/create" class="rounded-md text-white bg-blue-500 py-2 px-6" ><span class="text-xl font-bold">+</span>Postingan</a>
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsa et voluptatum sint. Explicabo ad similique autem quam. Consectetur minima quibusdam assumenda nisi,
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium py-2 px-4 bg-blue-500 text-white  hover:underline">Edit</a>
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsa et voluptatum sint. Explicabo ad similique autem quam. Consectetur minima quibusdam assumenda nisi,
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium py-2 px-4 bg-blue-500 text-white  hover:underline">Edit</a>
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsa et voluptatum sint. Explicabo ad similique autem quam. Consectetur minima quibusdam assumenda nisi,
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium py-2 px-4 bg-blue-500 text-white  hover:underline">Edit</a>
                </td>
            </tr>



        </tbody>
    </table>
</div>
@endsection
