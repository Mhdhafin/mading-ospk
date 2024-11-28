@extends('layouts.main')
@section('title', 'About')

@section('body')

    <x-header>
        About
    </x-header>

    <section class="pt-24 pb-8">
        <div class="w-full  px-4">
            <div class="flex flex-wrap">
                <div class="md:w-1/3 self-center w-full">
                    <div class="">
                        <img src="/storage/{{ $profile->image }}" class="w-80 mx-auto" alt="">
                    </div>
                </div>
                <div class="lg:w-4/6 self-end mt-12 w-full">
                    <h2 class="text-2xl font-bold mb-2">{{ $profile->heading }}</h2>
                    <p class="text-base lg:text-base mb-32 w-full max-w-3xl">
                        {{ $profile->description }}
                    </p>

                </div>
            </div>

        </div>


    </section>
    <section class="pt-16 pb-12">
        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="text-center mx-auto">
            <h2 class="text-2xl font-bold text-red-500 mb-2 ">SUSUNAN PENGURUS OSIS SMKN 65 <span class="block"> MASA BAKTI
                    2024-2025</span></h2>
            {{-- <p class="text-sm md:w-1/2 text-slate-500 w-full mx-auto">
                Explore our services and see how we can help you achieve your goals. Feel free to browse through, and
                don't hesitate to reach out for any questions or personalized solutions tailored to your needs!
            </p> --}}
        </div>
        <div class="w-full mt-8 px-4">
            <div class="max-w-2xl mx-auto py-5 px-6">
                <!-- Accordion Item 1 -->
                @foreach ($structure as $data)
                    <div class="border-b border-slate-200">
                        <button onclick="toggleAccordion({{ $data->id }})"
                            class="w-full flex justify-between items-center py-5 text-slate-800">
                            <span>{{ $data->title }}</span>
                            <span id="icon-{{ $data->id }}" class="text-slate-800 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                    class="w-4 h-4">
                                    <path
                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                </svg>
                            </span>
                        </button>

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

            </div>
        </div>

    </section>


    {{-- Testimonal --}}
    <div class="min-w-screen min-h-screen flex items-center justify-center py-5">
        <div class="w-full bg-white  px-5 py-16 md:py-24 text-gray-800">
            <div class="w-full max-w-6xl mx-auto">
                <div class="text-center max-w-xl mx-auto">
                    <h1 class="text-6xl md:text-7xl font-bold mb-5 text-red-600">Apa kata alumni!</h1>
                    <h3 class="text-xl mb-5 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                    <div class="text-center mb-10">
                        <span class="inline-block w-1 h-1 rounded-full bg-red-500 ml-1"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-red-500 ml-1"></span>
                        <span class="inline-block w-40 h-1 rounded-full bg-red-500"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-red-500 ml-1"></span>
                        <span class="inline-block w-1 h-1 rounded-full bg-red-500 ml-1"></span>
                    </div>
                </div>
                <div class="grid grid-cols-1  lg:grid-cols-3 gap-8 lg:mx-12">
                    @foreach ($testimonal as $data)
                        <div
                            class="relative mx-auto mt-8 rounded-lg shadow max-w-sm p-10 bg-gray-100 text-gray-700 leading-snug flex flex-col justify-between">
                            <div class="-ml-4">
                                <svg class="w-8 opacity-25 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                    shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                    image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                                    viewBox="0 0
                                                                                                             640 640"
                                    fill=currentColor>
                                    <path
                                        d="M557.133 561.704H442.128c-44.256 0-80.458-36.19-80.458-80.446 0-165.58-42.32-347.485 160.656-399.418 91.95-23.516 115.915 77.753 18.119 84.745-59.647 4.276-71.293 42.804-73.147 101.068h92.269c44.256 0 80.458 36.201 80.458 80.458v130.702c0 45.591-37.3 82.89-82.891 82.89zm-358.032 0H84.096c-44.256 0-80.446-36.19-80.446-80.446 0-165.58-42.331-347.485 160.644-399.418 91.95-23.516 115.915 77.753 18.118 84.745-59.646 4.276-71.292 42.804-73.146 101.068h92.269c44.256 0 80.457 36.201 80.457 80.458v130.702c0 45.591-37.3 82.89-82.89 82.89z" />
                                </svg>
                            </div>
                            <div class="mt-2">
                                {{ $data->message }}
                            </div>
                            <div>
                                <div class="mx-auto w-full border border-gray-300 my-8"></div>
                                <div class="flex items-center">
                                    <div>
                                        <img class="w-12 h-12 rounded-full border-2 border-indigo-400"
                                            src="/storage/{{ $data->image }}">
                                    </div>
                                    <div class="ml-4">
                                        <div class="font-bold">{{ $data->name }}</div>
                                        <div class="text-sm text-gray-600 mt-1">{{ $data->position }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div
                        class="mx-auto mt-8 rounded-lg shadow max-w-sm p-10 bg-gray-100 text-gray-700 leading-snug flex flex-col justify-between">
                        <div class="-ml-4">
                            <svg class="w-8 opacity-25 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                                viewBox="0 0
                                                                                                                 640 640"
                                fill=currentColor>
                                <path
                                    d="M557.133 561.704H442.128c-44.256 0-80.458-36.19-80.458-80.446 0-165.58-42.32-347.485 160.656-399.418 91.95-23.516 115.915 77.753 18.119 84.745-59.647 4.276-71.293 42.804-73.147 101.068h92.269c44.256 0 80.458 36.201 80.458 80.458v130.702c0 45.591-37.3 82.89-82.891 82.89zm-358.032 0H84.096c-44.256 0-80.446-36.19-80.446-80.446 0-165.58-42.331-347.485 160.644-399.418 91.95-23.516 115.915 77.753 18.118 84.745-59.646 4.276-71.292 42.804-73.146 101.068h92.269c44.256 0 80.457 36.201 80.457 80.458v130.702c0 45.591-37.3 82.89-82.89 82.89z" />
                            </svg>
                        </div>
                        <div class="mt-2">
                            I felt disorganized. Pieces of paper everywhere. I was constantly making new lists,
                            losing old ones,
                            crossing off items and adding new ones. I was forever worried things were slipping and
                            not getting done. My
                            brain was tired
                        </div>
                        <div>
                            <div class="mx-auto w-full border border-gray-300 my-8"></div>
                            <div class="flex items-center">
                                <div>
                                    <img class="w-12 h-12 rounded-full border-2 border-indigo-400"
                                        src="https://avatars0.githubusercontent.com/u/810438?s=100">
                                </div>
                                <div class="ml-4">
                                    <div class="font-bold">Dan Abramov</div>
                                    <div class="text-sm text-gray-600 mt-1">Creator, <a href="https://swift.org/">Java</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>






@endsection
