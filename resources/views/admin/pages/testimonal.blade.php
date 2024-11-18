@extends('admin._layouts.main')
@section('title', 'Testimonal')

@section('body')
    <div data-dialog-backdrop="sign-in-modal" data-dialog-backdrop-close="true"
        data-popover-transition="transition-all duration-300"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div data-dialog="sign-in-modal" data-dialog-mount="opacity-100 translate-y-0 scale-100"
            data-dialog-unmount="opacity-0 -translate-y-28 scale-90 pointer-events-none"
            data-dialog-transition="transition-all duration-300"
            class="relative mx-auto  w-2/5 rounded-lg overflow-hidden shadow-sm">
            <div class="relative flex flex-col bg-white">
                <div class="relative m-2.5 items-center flex justify-center text-white h-24 rounded-md bg-slate-800">
                    <h3 class="text-2xl">
                        Testimonal
                    </h3>
                </div>
                <form class="w-full" action="/dashboard/profile" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex w-full flex-col gap-4 p-4">
                        <div class="flex w-full flex-col  gap-4 ">
                            <div class="w-full ">
                                <label class="block mb-2 text-sm text-slate-600">
                                    Heading
                                </label>
                                <input type="text" name="heading"
                                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                    placeholder="Heading" />
                            </div>
                            <div class="w-full ">
                                <div class="relative w-full min-w-[200px]">
                                    <textarea name="description"
                                        class="peer h-full min-h-[100px] w-full resize-none rounded-md border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50"
                                        placeholder=" "></textarea>
                                    <label
                                        class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                        Description
                                    </label>
                                </div>
                            </div>

                            <label class="block mt-4 text-sm">
                                <span class="text-slate-600 ">Image</span>
                                <div class="flex items-center justify-center w-full">
                                    <label for="dropzone-file"
                                        class="flex flex-col relative py-4 items-center justify-center w-full rounded-lg  border-2 border-gray-300 border-dashed cursor-pointer bg-gray-50  dark:bg-gray-200 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <img id="img-preview" class="w-full rounded-lg object-cover hidden">
                                        <div class="flex flex-col file items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                    class="font-semibold">Click
                                                    to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                                                (MAX.
                                                800x400px)
                                            </p>
                                        </div>
                                        <input id="dropzone-file" name="icon" onchange="previewImage()" id="image imgInp"
                                            value="{{ old('icon') }}" type="file" class="hidden image " />
                                        @error('icon')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $massage }}
                                            </p>
                                        @enderror
                                    </label>
                                </div>
                            </label>

                        </div>


                    </div>
                    <div class="p-6 pt-0">
                        <button
                            class="w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="submit">
                            Add Data
                        </button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="mt-12 mb-8 flex flex-col gap-12">
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
            <div
                class="relative flex justify-between items-center bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 shadow-lg -mt-6 mb-8 p-6">
                <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-white">
                    Project Table</h6>
                <button data-dialog-target="sign-in-modal"
                    class="rounded-md bg-blue-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-blue-700 focus:shadow-none active:bg-blue-700 hover:bg-blue-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                    type="button">
                    Open Modal Form
                </button>
            </div>
            <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
                <table class="w-full min-w-[640px] table-auto">
                    <thead>
                        <tr>
                            <th class="border-b border-blue-gray-50 py-3 px-5 text-left">
                                <p class="block antialiased font-sans text-[11px] font-bold uppercase text-blue-gray-400">
                                    Image
                                </p>
                            </th>
                            <th class="border-b border-blue-gray-50 py-3 px-5 text-left">
                                <p class="block antialiased font-sans text-[11px] font-bold uppercase text-blue-gray-400">
                                    Name
                                </p>
                            </th>
                            <th class="border-b border-blue-gray-50 py-3 px-5 text-left">
                                <p class="block antialiased font-sans text-[11px] font-bold uppercase text-blue-gray-400">
                                    Client Name
                                </p>
                            </th>
                            <th class="border-b border-blue-gray-50 py-3 px-5 text-left">
                                <p class="block antialiased font-sans text-[11px] font-bold uppercase text-blue-gray-400">
                                    Description
                                </p>
                            </th>
                            <th class="border-b border-blue-gray-50 py-3 px-5 text-left">
                                <p class="block antialiased font-sans text-[11px] font-bold uppercase text-blue-gray-400">
                                    Service
                                </p>
                            </th>
                            <th class="border-b border-blue-gray-50 py-3 px-5 text-left">
                                <p
                                    class="antialiased font-sans text-[11px] font-bold uppercase text-blue-gray-400 whitespace-nowrap">
                                    {{-- <p class="antialiased font-sans text-[11px] font-bold uppercase text-blue-gray-400"> --}}
                                    Start Date
                                </p>

                            <th class="border-b border-blue-gray-50 py-3 px-5 text-left">
                                <p
                                    class="antialiased font-sans text-[11px] font-bold uppercase text-blue-gray-400 whitespace-nowrap">
                                    End Date
                                </p>
                            </th>
                            <th class="border-b border-blue-gray-50 py-3 px-5 text-left">
                                <p class="block antialiased font-sans text-[11px] font-bold uppercase text-blue-gray-400">
                                    Action
                                </p>
                            </th>
                            <th class="border-b border-blue-gray-50 py-3 px-5 text-left">
                                <p class="block antialiased font-sans text-[11px] font-bold uppercase text-blue-gray-400">
                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="py-3  px-5 border-b border-blue-gray-50">
                                <div class="flex items-center gap-4">
                                    <img src="" alt="" class="w-full relative rounded-md" />
                                </div>
                            </td>
                            <td class="py-3  px-5 border-b border-blue-gray-50">
                                <p class="block antialiased font-sans text-xs font-semibold text-blue-gray-600">

                                </p>
                            </td>
                            <td class="py-3  px-5 border-b border-blue-gray-50">
                                <p class="block antialiased font-sans text-xs font-semibold text-blue-gray-600">

                                </p>
                            </td>
                            <td class="py-3  px-5 border-b border-blue-gray-50">
                                <p class="block antialiased font-sans text-xs font-semibold text-blue-gray-600">

                                </p>
                            </td>
                            <td class="py-3  px-5 border-b border-blue-gray-50">
                                <p class="block antialiased font-sans text-xs font-semibold text-blue-gray-600">

                                </p>
                            </td>
                            <td class="py-3  px-5 border-b border-blue-gray-50">
                                <p class="block antialiased font-sans text-xs font-semibold text-blue-gray-600">

                                </p>
                            </td>
                            <td class="py-3  px-5 border-b border-blue-gray-50">
                                <p class="block antialiased font-sans text-xs font-semibold text-blue-gray-600">

                                </p>
                            </td>

                            <td class="py-3  px-5 border-b border-blue-gray-50">
                                <form id="confirm" action=" " method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" id="delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 " fill="red"
                                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0L284.2 0c12.1 0 23.2 6.8 28.6 17.7L320 32l96 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 96C14.3 96 0 81.7 0 64S14.3 32 32 32l96 0 7.2-14.3zM32 128l384 0 0 320c0 35.3-28.7 64-64 64L96 512c-35.3 0-64-28.7-64-64l0-320zm96 64c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    </script> --}}
@endsection
