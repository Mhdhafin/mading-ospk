@extends('admin._layouts.main')
@section('title', 'FAQ')

@section('body')
    <div
        class="relative mt-0 md:mt-10 flex flex-col w-full h-full text-slate-700 bg-white shadow-md rounded-xl bg-clip-border">
        <div class="relative mx-4 mt-4 overflow-hidden text-slate-700 bg-white rounded-none bg-clip-border">
            <div class="flex items-center justify-between ">
                <div>
                    <h3 class="text-lg font-semibold text-slate-800">Employees List</h3>
                    <p class="text-slate-500">Review each person before edit</p>
                </div>
                <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
                    <button
                        class="rounded border border-slate-300 py-2.5 px-3 text-center text-xs font-semibold text-slate-600 transition-all hover:opacity-75 focus:ring focus:ring-slate-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        View All
                    </button>
                    <button data-dialog-target="dialog"
                        class="flex select-none items-center gap-2 rounded bg-slate-800 py-2.5 px-4 text-xs font-semibold text-white shadow-md shadow-slate-900/10 transition-all hover:shadow-lg hover:shadow-slate-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                            stroke-width="2" class="w-4 h-4">
                            <path
                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                            </path>
                        </svg>
                        Add FAQ
                    </button>
                </div>
            </div>

        </div>
        <div class="p-0 overflow-scroll">
            <table class="w-full mt-4 text-left table-auto min-w-max">
                <thead>
                    <tr>
                        <th
                            class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                            <p
                                class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none text-slate-500">
                                Question
                            </p>
                        </th>
                        <th
                            class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                            <p
                                class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none text-slate-500">
                                Answer
                            </p>
                        </th>

                        <th
                            class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                            <p
                                class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                            </p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faqs as $item)
                        <tr>
                            <td class=" p-4 border-b  border-slate-200">
                                <p class="text-sm text-slate-500">
                                    {{ Str::limit($item->question, 50) }}
                                </p>
                            </td>
                            <td class=" p-4 border-b border-slate-200">
                                <p class="text-sm font-semibold text-slate-700">
                                    {{ Str::limit($item->answer, 50) }}
                                </p>
                            </td>
                            <td class=" p-4 flex items-center gap-4 border-b border-slate-200">
                                <button
                                    class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                    type="button" data-dialog-target="{{ $item->id }}">
                                    <span
                                        class="absolute
                                transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="w-4 h-4">
                                            <path
                                                d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>

                                <form id="confirm" action="/dashboard/faq/{{ $item->id }}" method="post">
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
                            </td>

                        </tr>

                        <div data-dialog-backdrop="{{ $item->id }}"
                            class="fixed left-0 top-0 inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 backdrop-blur-sm transition-opacity duration-300">
                            <div data-dialog="{{ $item->id }}"
                                class="relative mx-auto flex w-full max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-slate-700 shadow-md">
                                <div class="flex flex-col p-6">
                                    <h4 class="text-2xl mb-1 font-semibold text-slate-700">
                                        Edit FAQ Information
                                    </h4>
                                    <p class="mb-3 mt-1 text-slate-400">
                                        Edit your information
                                    </p>

                                    <form action="/dashboard/faq/{{ $item->id }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="w-full max-w-sm min-w-[200px] mt-4">
                                            <label class="block mb-1 text-sm text-slate-700">
                                                Question
                                            </label>
                                            <input type="text" name="question" required value=""
                                                class="w-full h-10 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
                                                placeholder="Enter your text" />
                                            @error('question')
                                                <p class="text-red-500 text-xs mt-1">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="w-full max-w-sm min-w-[200px] mt-4">
                                            <label class="block mb-1 text-sm text-slate-700">
                                                Answer
                                            </label>
                                            <input type="text" name="answer" required value=""
                                                class="w-full h-10 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
                                                placeholder="Enter the email" />
                                            @error('answer')
                                                <p class="text-red-500 text-xs mt-1">
                                                    {{ $message }}
                                                </p>
                                            @enderror
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
                                    <p class="flex justify-center mt-4 font-sans text-sm text-slate-500">
                                        Looking for more details? Contact
                                        <a href="#admin" class="ml-1 text-sm font-bold leading-normal text-slate-500">
                                            Admin.
                                        </a>
                                    </p>
                                </div>
                                </form>

                            </div>
                        </div>
                    @endforeach


                </tbody>
            </table>
        </div>
        <div class="flex items-center justify-between p-3">
            <p class="block text-sm text-slate-500">
                Page 1 of 10
            </p>
            <div class="flex gap-1">
                <button
                    class="rounded border border-slate-300 py-2.5 px-3 text-center text-xs font-semibold text-slate-600 transition-all hover:opacity-75 focus:ring focus:ring-slate-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    Previous
                </button>
                <button
                    class="rounded border border-slate-300 py-2.5 px-3 text-center text-xs font-semibold text-slate-600 transition-all hover:opacity-75 focus:ring focus:ring-slate-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    Next
                </button>
            </div>
        </div>
    </div>




    {{-- TAMBAH DATA --}}
    <div data-dialog-backdrop="dialog"
        class="absolute left-0 top-0 inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 backdrop-blur-sm transition-opacity duration-300">
        <div data-dialog="dialog"
            class="relative mx-auto flex w-full max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-slate-700 shadow-md">
            <div class="flex flex-col p-6">
                <h4 class="text-2xl mb-1 font-semibold text-slate-700">
                    Add FAQ Information
                </h4>
                <p class="mb-3 mt-1 text-slate-400">
                    Add your information
                </p>

                <form action="/dashboard/faq" method="POST">
                    @csrf
                    <div class="w-full max-w-sm min-w-[200px] mt-4">
                        <label class="block mb-1 text-sm text-slate-700">
                            Question
                        </label>
                        <input type="text" name="question" required
                            class="w-full h-10 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
                            placeholder="Question.." />
                        @error('question')
                            <p class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full max-w-sm min-w-[200px] mt-4">
                        <label class="block mb-1 text-sm text-slate-700">
                            Answer
                        </label>
                        <input type="text" name="answer" required
                            class="w-full h-10 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
                            placeholder="Answer.." />
                        @error('answer')
                            <p class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </p>
                        @enderror
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
                <p class="flex justify-center mt-4 font-sans text-sm text-slate-500">
                    Looking for more details? Contact
                    <a href="#admin" class="ml-1 text-sm font-bold leading-normal text-slate-500">
                        Admin.
                    </a>
                </p>
            </div>
            </form>

        </div>
    </div>

    @push('script')
        <script src={{ asset('assets/js/modal.js') }}></script>
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
    </script>
@endsection
