@extends('admin._layouts.main')
@section('title', 'Change Role')



@section('body')
    <div
        class="relative mt-0 md:mt-10 flex flex-col overflow-x-scroll w-full h-full text-slate-700 bg-white shadow-md rounded-xl bg-clip-border">
        <div class="relative mx-4 mt-4 overflow-hidden  text-slate-700 bg-white rounded-none bg-clip-border">
            <div class="flex items-center justify-between ">
                <div>
                    <h3 class="text-lg font-semibold text-slate-800">Admin List</h3>
                    <p class="text-slate-500">Review each person before edit</p>
                </div>
                <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
                    <button data-dialog-target="dialog"
                        class="flex select-none items-center gap-2 rounded bg-slate-800 py-2.5 px-4 text-xs font-semibold text-white shadow-md shadow-slate-900/10 transition-all hover:shadow-lg hover:shadow-slate-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                            stroke-width="2" class="w-4 h-4">
                            <path
                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                            </path>
                        </svg>
                        Add Admin
                    </button>
                </div>
            </div>

        </div>
        <div class="p-0 ">
            <table class="w-full mt-4 overflow-scroll text-left table-auto min-w-max">
                <thead>
                    <tr>
                        <th
                            class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                            <p
                                class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none text-slate-500">
                                Admin
                            </p>
                        </th>
                        <th
                            class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                            <p
                                class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none text-slate-500">
                                Email
                            </p>
                        </th>
                        <th
                            class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                            <p
                                class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none text-slate-500">
                                Role
                            </p>
                        </th>

                        <th
                            class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                            <p
                                class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                                Action
                            </p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td class=" p-4 border-b border-slate-200">
                                <p class="text-sm text-slate-500">
                                    {{ $item->name }}
                                </p>
                            </td>
                            <td class=" p-4 border-b border-slate-200">
                                <p class="text-sm text-slate-500">
                                    {{ $item->email }}
                                </p>
                            </td>
                            <td class=" p-4 border-b border-slate-200">
                                <p class="text-sm font-semibold text-slate-700">
                                    {{ $item->role }}
                                </p>
                            </td>
                            <td class="py-3  px-5 border-b border-blue-gray-50">
                                <div class="flex items-center">
                                    <button data-dialog-target="{{ $item->id }}"
                                        class="rounded-md  bg-slate-800 inline-flex items-center gap-x-2 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-blue-700 focus:shadow-none active:bg-blue-700 hover:bg-blue-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                                        type="button">
                                        Edit
                                    </button>
                                    <form id="confirm" action="/dashboard/changerole/{{ $item->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2"
                                            id="delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 " fill="red"
                                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0L284.2 0c12.1 0 23.2 6.8 28.6 17.7L320 32l96 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 96C14.3 96 0 81.7 0 64S14.3 32 32 32l96 0 7.2-14.3zM32 128l384 0 0 320c0 35.3-28.7 64-64 64L96 512c-35.3 0-64-28.7-64-64l0-320zm96 64c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16z" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>


                        <div data-dialog-backdrop="{{ $item->id }}"
                            class="fixed left-0 top-0 inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 backdrop-blur-sm transition-opacity duration-300">
                            <div data-dialog="{{ $item->id }}"
                                class="relative mx-auto flex w-full max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-slate-700 shadow-md">
                                <div class="flex flex-col p-6">
                                    <h4 class="text-2xl mb-1 font-semibold text-slate-700">
                                        Change Role
                                    </h4>
                                    <p class="mb-3 mt-1 text-slate-400">
                                        Add information here
                                    </p>

                                    <form action="/dashboard/changerole/{{ $item->id }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <div class="w-full max-w-sm min-w-[200px] mt-4">
                                            <label class="block mb-1 text-sm text-slate-700">
                                                Admin
                                            </label>
                                            <input type="text" name="name" disabled value="{{ $item->name }}"
                                                class="w-full h-10 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
                                                placeholder="{{ $item->name }}" />
                                            @error('name')
                                                <p class="text-red-500 text-xs mt-1">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="w-full max-w-sm mt-4 min-w-[200px]">
                                            <div class="relative">
                                                <select name="role"
                                                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded pl-3 pr-8 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer">
                                                    <option disabled selected value="{{ $item->role }}" selected>
                                                        {{ $item->role }}</option>
                                                    @if ($item->role != 'superAdmin')
                                                        <option value="superAdmin">superAdmin</option>
                                                    @endif
                                                    @if ($item->role != 'socialAdmin')
                                                        <option value="socialAdmin">socialAdmin</option>
                                                    @endif
                                                    @if ($item->role != 'postsAdmin')
                                                        <option value="postsAdmin">postsAdmin</option>
                                                    @endif
                                                </select>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.2" stroke="currentColor"
                                                    class="h-5 w-5 ml-1 absolute top-2.5 right-2.5 text-slate-700">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                </svg>
                                            </div>
                                        </div>

                                </div>
                                <div class="p-6 pt-0">
                                    <div class="flex space-x-2">
                                        <button
                                            class="w-full mx-auto select-none rounded border border-red-600 py-2 px-4 text-center text-sm font-semibold text-red-600 transition-all hover:bg-red-600 hover:text-white hover:shadow-md hover:shadow-red-600/20 active:bg-red-700 active:text-white active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                            type="button" data-dialog-close="true">
                                            Cancel
                                        </button>

                                        <button
                                            class="w-full mx-auto select-none rounded bg-slate-800 py-2 px-4 text-center text-sm font-semibold text-white shadow-md shadow-slate-900/10 transition-all hover:shadow-lg hover:shadow-slate-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                            type="submit">
                                            Save
                                        </button>
                                    </div>
                                </div>
                                </form>

                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div data-dialog-backdrop="dialog"
        class="absolute left-0 top-0 inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 backdrop-blur-sm transition-opacity duration-300">
        <div data-dialog="dialog"
            class="relative mx-auto flex w-full max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-slate-700 shadow-md">
            <div class="flex flex-col p-6">
                <h4 class="text-2xl mb-1 font-semibold text-slate-700">
                    Add Admin Information
                </h4>
                <p class="mb-3 mt-1 text-slate-400">
                    Add your information
                </p>
                <form action="/dashboard/changerole" method="POST">
                    @csrf
                    <div class="w-full max-w-sm min-w-[200px] mt-4">
                        <label class="block mb-1 text-sm text-slate-700">
                            Admin
                        </label>
                        <input type="text" name="name" required
                            class="w-full h-10 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
                            placeholder="Enter your text" />
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full max-w-sm min-w-[200px] mt-4">
                        <label class="block mb-1 text-sm text-slate-700">
                            Email
                        </label>
                        <input type="email" name="email" required
                            class="w-full h-10 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
                            placeholder="Enter your text" />
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full max-w-sm min-w-[200px] mt-4">
                        <label class="block mb-1 text-sm text-slate-700">
                            Password
                        </label>
                        <input type="password" name="password" required
                            class="w-full h-10 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
                            placeholder="Enter the password" />
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full max-w-sm mt-4 min-w-[200px]">
                        <label class="block mb-1 text-sm text-slate-700"></label>
                        Role
                        </label>
                        <div class="relative">
                            <select name="role"
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded pl-3 pr-8 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer">
                                <option value="socialAdmin">socialAdmin</option>
                                <option value="postsAdmin">postsAdmin</option>
                                <option value="superAdmin">superAdmin</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.2" stroke="currentColor"
                                class="h-5 w-5 ml-1 absolute top-2.5 right-2.5 text-slate-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </div>
                    </div>

                    <div class="p-6 pt-4">
                        <div class="flex space-x-2">
                            <button
                                class="w-full mx-auto select-none rounded border border-red-600 py-2 px-4 text-center text-sm font-semibold text-red-600 transition-all hover:bg-red-600 hover:text-white hover:shadow-md hover:shadow-red-600/20 active:bg-red-700 active:text-white active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button" data-dialog-close="true">
                                Cancel
                            </button>

                            <button type="submit"
                                class="w-full mx-auto select-none rounded bg-slate-800 py-2 px-4 text-center text-sm font-semibold text-white shadow-md shadow-slate-900/10 transition-all hover:shadow-lg hover:shadow-slate-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>






    @push('script')
        <script src="{{ asset('assets/js/modal.js') }}"></script>
    @endpush

    @push('custom_script')
        <script>
            function previewImage() {
                const image = document.querySelector(".image");
                const file = document.querySelector(".file");
                const imgPreview = document.querySelector("#img-preview");

                // Menampilkan preview hanya jika file telah dipilih
                if (image.files && image.files[0]) {
                    imgPreview.style.display = "block";
                    file.style.display = "none";

                    const oFReader = new FileReader();
                    oFReader.readAsDataURL(image.files[0]);

                    oFReader.onload = function(oFREvent) {
                        imgPreview.src = oFREvent.target.result;
                    };
                }
            }
        </script>
    @endpush

    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    <script>
        document.getElementById('delete').addEventListener('click', function(e) {
            e.preventDefault();

            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Apakah anda yakin ingin melakukan aksi ini?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, konfirmasi!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('confirm').submit();
                }
            });
        });
    </script>
@endsection
