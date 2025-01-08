@extends('layouts.main')

@section('title', 'Home Page')


@section('body')

    <section style="background-image: url('./storage/{{ $hero->hero_image }}');"
        class=" bg-center bg-cover md:mt-2 mt-12 relative min-h-screen bg-fixed bg-no-repeat bg-gray-700 bg-blend-multiply">
        <div class="hero-bg"></div>

        <div class="px-4 mx-auto max-w-screen-xl text-center py-32 lg:py-56">
            <h1 class="judul mb-4 text-4xl font-serif font-bold leading-none text-yellow-400 md:text-5xl lg:text-7xl">
                {{ $hero->title }}</h1>
            <p class="mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 lg:px-48">{{ $hero->subtitle }}</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="/blog"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-yellow-400 rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                    Dokumentation
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="/about"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Selengkapnya
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

            </div>
        </div>
        <div
            class="block md:flex gap-8 px-24 lg:flex mt-8  py-6 justify-center  items-center md:justify-center md:items-center">

            @foreach ($visimisi as $data)
                <div
                    class="block bg-red-600 md:flex-shrink-0 md:w-1/3 w-full my-6  shadow-sm border border-slate-200 rounded-lg">
                    <div class="p-4">
                        <h5 class="mb-2 text-white text-xl font-semibold">
                            {{ $data->title }}
                        </h5>
                        <p class="text-yellow-400 leading-normal font-medium">
                            {{ $data->subtitle }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>

        {{-- @foreach ($visimisi as $data)
            <a href="#"
                class="block bg-red-600 lg:mb-0 mb-8 max-w-sm p-6 border border-gray-200 rounded-lg shadow hover:scale-105 transition
        duration-300 ">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->title }}
                </h5>
                <p class="font-normal text-yellow-400 ">{{ $data->subtitle }}</p>
            </a>
        @endforeach --}}
    </section>


    <section class="bg-slate-200 pt-20 pb-16 p-5 bg-light-blue">
        <div class="flex justify-center items-start my-2">
            <div class="w-full sm:w-10/12 md:w-1/2 my-1">
                <h2 class="text-xl font-semibold text-vnet-blue mb-2">FAQ - Tanya-tanya seputar sekolah YUK!</h2>

                @foreach ($faq as $index => $data)
                    <div class="border-b border-slate-200">
                        <button onclick="toggleAccordion({{ $index + 1 }})"
                            class="w-full flex justify-between items-center py-5 text-slate-800">
                            <span>{{ $data->question }}</span>
                            <span id="icon-{{ $index + 1 }}" class="text-slate-800 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                    class="w-4 h-4">
                                    <path
                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                </svg>
                            </span>
                        </button>

                        <div id="content-{{ $index + 1 }}"
                            class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">




                            <div class="pb-5 text-sm text-slate-500">
                                <div class="flex items-center">
                                    {{ $data->answer }}
                                </div>
                            </div>




                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>


    <section class="pt-16 pb-12">
        {{-- <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">C</h1>

        </div> --}}

        <div class="w-full px-4  grid  grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($post as $data)
                <div class="shadow-lg hover:scale-105 bg-white  transition duration-300 rounded-md max-w-sm mx-auto">
                    <img src="/storage/{{ $data->image }}" role="presentation"
                        class="object-cover w-full rounded h-44 dark:bg-gray-500">
                    <div class="p-6 space-y-2 lg:col-span-5">
                        <span
                            class="bg-yellow-300 p-2 rounded-full text-xs text-gray-600">{{ $data->created_at->format('j F Y') }}</span>

                        <h2 class="text-2xl  font-semibold ">{{ $data->title }}</h2>

                        <p class="pb-5 text-base">{{ Str::limit($data->content, 40, '...') }}</p>



                        <a class="group relative inline-flex items-center overflow-hidden rounded bg-red-600 px-8 py-3 text-white focus:outline-none focus:ring active:bg-red-500"
                            href="/posts/{{ $data->slug }}">
                            <span class="absolute -end-full transition-all group-hover:end-4">
                                <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>

                            <span class="text-sm font-medium transition-all group-hover:me-4"> Selengkapnya </span>
                        </a>




                    </div>

                </div>

            @empty

                <div class="w-full px-4">
                    <div class="flex justify-center items-center text-3xl font-bold py-20 text-gray-600 ">
                        Postingan Tidak Tersedia
                    </div>
                </div>
            @endforelse
        </div>


    </section>

    @push('accordion')
        <script>
            function toggleAccordion(index) {
                const content = document.getElementById(`content-${index}`);
                const icon = document.getElementById(`icon-${index}`);

                // SVG for Down icon
                const downSVG = `
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
              <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
          `;

                // SVG for Up icon
                const upSVG = `
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
              <path fill-rule="evenodd" d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
            </svg>
          `;

                // Toggle the content's max-height for smooth opening and closing
                if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                    content.style.maxHeight = '0';
                    icon.innerHTML = upSVG;
                } else {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    icon.innerHTML = downSVG;
                }
            }
        </script>
    @endpush


@endsection
