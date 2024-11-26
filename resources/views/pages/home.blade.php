@extends('layouts.main')

@section('title', 'Home Page')


@section('body')


    <section class="custom-bg -z-50 absolute inset-0">
    </section>
    {{-- <section class="pt-36 pb-32">
        <div class="w-full px-4 py-6 sm:px-6 lg:px-8">

            <img src="./assets/img/ospk_logo.png" class="mx-auto w-80 h-80" alt="">
            <h2 class="text-4xl mb-12 font-serif font-bold text-center text-yellow-6    00">OSIS SMKN 65 JAKARTA</h2>


        </div>
    </section> --}}



    <section class="hero bg-center bg-no-repeat bg-gray-700 bg-blend-multiply">
        <div class="hero-bg"></div>
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-serif font-bold leading-none text-yellow-400 md:text-5xl lg:text-7xl">
                {{ $hero->title }}</h1>
            <p class="mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 lg:px-48">{{ $hero->subtitle }}</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-yellow-400 rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>
            </div>
        </div>
    </section>


    <section class="bg-slate-200 pt-24 pb-8">
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
                        {{ Str::limit($profile->description, 200) }}
                    </p>

                </div>
            </div>

        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="-mb-12" viewBox="0 0 1440 320">
            <path fill="#ffffff " fill-opacity="1"
                d="M0,96L48,112C96,128,192,160,288,192C384,224,480,256,576,224C672,192,768,96,864,64C960,32,1056,64,1152,96C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="-mb-12" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,192L48,170.7C96,149,192,107,288,117.3C384,128,480,192,576,181.3C672,171,768,85,864,80C960,75,1056,149,1152,165.3C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg> --}}

    </section>



    <section class="pt-12 pb-16">
        <div class="w-full px-4">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="text-center mx-auto">
                <h2 class="text-2xl font-bold text-red-500 mb-2">Visi & Misi</h2>
                {{-- <p class="text-sm md:w-1/2 text-slate-500 w-full mx-auto">
                    Explore our services and see how we can help you achieve your goals. Feel free to browse through, and
                    don't hesitate to reach out for any questions or personalized solutions tailored to your needs!
                </p> --}}
            </div>
        </div>
        <div class="block md:flex gap-8 px-24 lg:flex mt-8  py-6 justify-center  items-center">


            @foreach ($visimisi as $data)
                <a href="#"
                    class="block bg-red-600 lg:mb-0 mb-8 max-w-sm p-6 border border-gray-200 rounded-lg shadow hover:scale-105 transition
                duration-300 ">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->title }}
                    </h5>
                    <p class="font-normal text-yellow-400 ">{{ $data->subtitle }}</p>
                </a>
            @endforeach
            {{-- <a href="#"
                class="block bg-red-600 max-w-sm p-6 border border-gray-200 rounded-lg shadow hover:scale-105 transition
                duration-300 ">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Misi</h5>
                <p class="font-normal text-yellow-400 ">Here are the biggest enterprise technology
                    acquisitions
                    of 2021 so far, in reverse chronological order.</p>
            </a> --}}
        </div>
    </section>


    <section class="bg-slate-200 pt-20 pb-16 p-5 bg-light-blue">
        <div class="flex justify-center items-start my-2">
            <div class="w-full sm:w-10/12 md:w-1/2 my-1">
                <h2 class="text-xl font-semibold text-vnet-blue mb-2">FAQ - Tanya-tanya seputar sekolah YUK!</h2>
                <!-- Accordion Item 1 -->
                @foreach ($faq as $data)
                    <div class="border-b border-slate-200">
                        <button onclick="toggleAccordion({{ $data->id }})"
                            class="w-full flex justify-between items-center py-5 text-slate-800">
                            <span>{{ $data->question }}</span>
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
                            <div class="pb-5 text-sm text-slate-500">
                                {{ $data->answer }}
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <!-- Accordion Item 2 -->
                <div class="border-b border-slate-200">
                    <button onclick="toggleAccordion(2)"
                        class="w-full flex justify-between items-center py-5 text-slate-800">
                        <span>How to use Material Tailwind?</span>
                        <span id="icon-2" class="text-slate-800 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                <path
                                    d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                            </svg>
                        </span>
                    </button>
                    <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            You can use Material Tailwind by importing its components into your Tailwind CSS project.
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="border-b border-slate-200">
                    <button onclick="toggleAccordion(3)"
                        class="w-full flex justify-between items-center py-5 text-slate-800">
                        <span>What can I do with Material Tailwind?</span>
                        <span id="icon-3" class="text-slate-800 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                <path
                                    d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                            </svg>
                        </span>
                    </button>
                    <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            Material Tailwind allows you to quickly build modern, responsive websites with a focus on
                            design.
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    <section class="pt-16 pb-12">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn
                asymmetrical gentrify.</p>
        </div>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
                <div class="p-2 w-1/2">
                    <div class="relative">
                        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class="p-2 w-1/2">
                    <div class="relative">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="message"
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <button
                        class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">Button</button>
                </div>

            </div>
        </div>
    </section>
    {{-- <script src="{{ asset('assets/js/custom.js') }}"></script> --}}


@endsection
