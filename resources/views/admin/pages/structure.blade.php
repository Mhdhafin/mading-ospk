@extends('admin._layouts.main')
@section('title', 'Structure')

@section('body')
    <div class="-p-4">
        <div data-dialog-backdrop="sign-in-modal" data-dialog-backdrop-close="true"
            data-popover-transition="transition-all duration-300"
            class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
            <div data-dialog="sign-in-modal" data-dialog-mount="opacity-100 translate-y-0 scale-100"
                data-dialog-unmount="opacity-0 -translate-y-28 scale-90 pointer-events-none"
                data-dialog-transition="transition-all duration-300"
                class="relative mx-auto md:w-2/5 w-4/5 rounded-lg overflow-hidden shadow-sm">
                <div class="relative flex flex-col max-h-screen bg-white">
                    <div class="relative m-2.5 items-center flex justify-center text-white h-24 rounded-md bg-slate-800">
                        <h3 class="text-2xl">
                            Structure
                        </h3>
                    </div>
                    <form class="w-full" action="/dashboard/structure" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="flex w-full flex-col gap-4 p-4">
                            <div class="flex w-full flex-col gap-4 ">
                                <div class="w-full ">
                                    <label class="block mb-2 text-sm text-slate-600">
                                        Title
                                    </label>
                                    <input type="text" name="title"
                                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                        placeholder="Title.." />
                                </div>


                                <div id="dynamic-fields">
                                    <div class="field">
                                        <div class="grid grid-cols-2 gap-4">
                                            <div class="w-full ">
                                                <label class="block mb-2 text-sm text-slate-600">
                                                    Name
                                                </label>
                                                <input type="text" name="employees[0][name]"
                                                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                                    placeholder="Name.." />
                                            </div>
                                            <div class="w-full ">
                                                <label class="block mb-2 text-sm text-slate-600">
                                                    Position
                                                </label>
                                                <input type="text" name="employees[0][position]"
                                                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                                    placeholder="Position.." />
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>
                        <div class="p-6 pt-0 flex items-center gap-4">
                            <button type="button" id="add-field"
                                class="w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">Add
                                Field</button>
                            <button
                                class="w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="submit">
                                Add Data
                            </button>
                        </div>
                    </form>
                    {{-- <form action="/dashboard/structure" method="POST">
                        @csrf
                        <div>
                            <label for="title">Heading:</label>
                            <input type="text" name="title" id="title" required>
                        </div>
                        <div id="dynamic-fields">
                            <div class="field">
                                <label>Nama:</label>
                                <input type="text" name="employees[0][name]" required>
                                <label>Position:</label>
                                <input type="text" name="employees[0][position]" required>
                            </div>
                        </div>

                        <button type="submit">Save</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="mt-12 mb-8 flex flex-col gap-12">
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
            <div
                class="relative flex justify-between items-center bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 shadow-lg -mt-6 mb-8 p-6">
                <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-white">
                    Structure Table</h6>
                <button data-dialog-target="sign-in-modal"
                    class="rounded-md bg-blue-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-blue-700 focus:shadow-none active:bg-blue-700 hover:bg-blue-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                    type="button">
                    Open Modal Form
                </button>
            </div>
            <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
                {{-- <table class="w-full min-w-[640px] table-auto">
                    <thead>
                        <tr>
                            <th class="border-b border-blue-gray-50 py-3 px-5 text-left">
                                <p class="block antialiased font-sans text-[11px] font-bold uppercase text-blue-gray-400">
                                    Heading
                                </p>
                            </th>

                            <th class="border-b border-blue-gray-50 py-3 px-5 text-left">
                                <p class="block antialiased font-sans text-[11px] font-bold uppercase text-blue-gray-400">
                                    Position
                                </p>
                            </th>
                            <th class="border-b border-blue-gray-50 py-3 px-5 text-left">
                                <p class="block antialiased font-sans text-[11px] font-bold uppercase text-blue-gray-400">
                                    Position
                                </p>
                            </th>


                            <th class="border-b border-blue-gray-50 py-3 px-5 text-left">
                                <p class="block antialiased font-sans text-[11px] font-bold uppercase text-blue-gray-400">
                                    Action
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
                </table> --}}
                <div class="p6 w-1/2 mx-auto">
                    <!-- Accordion Item 1 -->
                    @foreach ($structure as $data)
                        <div class="border-b border-slate-200">
                            <div class="flex items-center gap-4">
                                <button onclick="toggleAccordion({{ $data->id }})"
                                    class="w-full flex justify-between items-center py-5 text-slate-800">
                                    <span>{{ $data->title }}</span>
                                    <span id="icon-{{ $data->id }}"
                                        class="text-slate-800 transition-transform duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                            class="w-4 h-4">
                                            <path
                                                d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                        </svg>
                                    </span>
                                </button>
                                <form id="confirm" action="/dashboard/structure/{{ $data->id }}" method="post">
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
                            </div>

                            <div id="content-{{ $data->id }}"
                                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">



                                @foreach ($data->employees as $employee)
                                    <div class="pb-5 text-sm text-slate-500">
                                        <div class="flex items-center">
                                            <h4 class="mr-2">{{ $employee->position }}</h4>

                                            <span>{{ $employee->name }} </span>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                    @endforeach

                    {{-- <!-- Accordion Item 2 -->
                    <div class="border-b border-slate-200">
                        <button onclick="toggleAccordion(2)"
                            class="w-full flex justify-between items-center py-5 text-slate-800">
                            <span>How to use Material Tailwind?</span>
                            <span id="icon-2" class="text-slate-800 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                    class="w-4 h-4">
                                    <path
                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                </svg>
                            </span>
                        </button>
                        <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">

                            <div class="pb-5 text-sm text-slate-500">
                                <div class="flex items-center">
                                    <h4 class="mr-2">Position: </h4>

                                    <span>Muhammad Dhafin </span>
                                </div>
                            </div>
                            <div class="pb-5 text-sm text-slate-500">
                                <div class="flex items-center">
                                    <h4 class="mr-2">Position: </h4>

                                    <span>Muhammad Dhafin </span>
                                </div>
                            </div>
                            <div class="pb-5 text-sm text-slate-500">
                                <div class="flex items-center">
                                    <h4 class="mr-2">Position: </h4>

                                    <span>Muhammad Dhafin </span>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="border-b border-slate-200">
                        <button onclick="toggleAccordion(3)"
                            class="w-full flex justify-between items-center py-5 text-slate-800">
                            <span>What can I do with Material Tailwind?</span>
                            <span id="icon-3" class="text-slate-800 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                    class="w-4 h-4">
                                    <path
                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                </svg>
                            </span>
                        </button>
                        <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="pb-5 text-sm text-slate-500">
                                <div class="flex items-center">
                                    <h4 class="mr-2">Position: </h4>

                                    <span>Muhammad Dhafin </span>
                                </div>
                            </div>
                            <div class="pb-5 text-sm text-slate-500">
                                <div class="flex items-center">
                                    <h4 class="mr-2">Position: </h4>

                                    <span>Muhammad Dhafin </span>
                                </div>
                            </div>
                            <div class="pb-5 text-sm text-slate-500">
                                <div class="flex items-center">
                                    <h4 class="mr-2">Position: </h4>

                                    <span>Muhammad Dhafin </span>
                                </div>
                            </div>


                        </div>
                    </div> --}}
                </div>
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


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

        //         function toggleAccordion(index) {
        //             const content = document.getElementById(`content-${index}`);
        //             const icon = document.getElementById(`icon-${index}`);

        //             // SVG for Minus icon
        //             const minusSVG = `
    //     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
    //       <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
    //     </svg>
    //   `;

        //             // SVG for Plus icon
        //             const plusSVG = `
    //     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
    //       <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
    //     </svg>
    //   `;

        //             // Toggle the content's max-height for smooth opening and closing
        //             if (content.style.maxHeight && content.style.maxHeight !== "0px") {
        //                 content.style.maxHeight = "0";
        //                 icon.innerHTML = plusSVG;
        //             } else {
        //                 content.style.maxHeight = content.scrollHeight + "px";
        //                 icon.innerHTML = minusSVG;
        //             }
        //         }
    </script>
@endsection
