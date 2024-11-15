@extends('layouts.main')
@section('title', 'About')

@section('body')

    <x-header>
        About
    </x-header>


    <section class="pt-20 pb-12">

        <div class="container">
            <div class="flex flex-wrap ">
                <div class="w-full self-center px-4 sm:w-1/2">
                    <img src="{{ asset('assets/img/ospk_logo.PNG') }}" class=" w-80 mx-auto" alt="">
                </div>
                <div class="w-full py-6 self-end px-4 sm:w-1/2">
                    <h2 class="text-2xl font-bold ">Tentang Kami</h2>
                    <p class="text-lg  sm:mt-5 sm:max-w-sm lg:max-w-xl">Di SMKN 65 Jakarta, OSIS dan MPK adalah dua
                        organisasi penting yang memfasilitasi pengembangan keterampilan kepemimpinan dan organisasi
                        siswa. </p>
                    <br>

                    <p>OSIS bertugas merancang dan melaksanakan berbagai kegiatan sekolah, seperti acara seni,
                        olahraga, dan peringatan hari besar, guna meningkatkan kreativitas dan kebersamaan siswa.
                    </p>
                    <br>
                    <p>
                        MPK berfungsi sebagai pengawas dan penyeimbang OSIS, memberikan saran serta evaluasi agar setiap
                        program berjalan sesuai dengan visi sekolah.
                        <br>
                        Melalui kolaborasi antara OSIS dan MPK, siswa dapat mengasah kemampuan berpikir kritis,
                        komunikasi, dan kerja sama, yang bermanfaat untuk masa depan mereka.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-16 pb-12">
        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="text-center mx-auto">
            <h2 class="text-2xl font-bold text-red-500 mb-2 ">SUSUNAN PENGURUS OSIS SMA MASA BAKTI 2024-2025</h2>
            <p class="text-sm md:w-1/2 text-slate-500 w-full mx-auto">
                Explore our services and see how we can help you achieve your goals. Feel free to browse through, and
                don't hesitate to reach out for any questions or personalized solutions tailored to your needs!
            </p>
        </div>
        <div class="w-full mt-8 px-4">
            <div class="max-w-2xl mx-auto py-5 px-6">
                <!-- Accordion Item 1 -->
                <div class="border-b border-slate-200">
                    <button onclick="toggleAccordion(1)"
                        class="w-full flex justify-between items-center py-5 text-slate-800">
                        <span>What is Material Tailwind?</span>
                        <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                <path
                                    d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                            </svg>
                        </span>
                    </button>
                    <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            Material Tailwind is a framework that enhances Tailwind CSS with additional styles and
                            components.
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
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
                </div>
            </div>
        </div>

    </section>


    {{-- Testimonal --}}
    <div class="min-w-screen min-h-screen bg-gray-50 flex items-center justify-center py-5">
        <div class="w-full bg-white border-t border-b border-gray-200 px-5 py-16 md:py-24 text-gray-800">
            <div class="w-full max-w-6xl mx-auto">
                <div class="text-center max-w-xl mx-auto">
                    <h1 class="text-6xl md:text-7xl font-bold mb-5 text-gray-600">What people <br>are saying.</h1>
                    <h3 class="text-xl mb-5 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                    <div class="text-center mb-10">
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    </div>
                </div>
                <div class="-mx-3 md:flex items-start">
                    <div class="px-3 md:w-1/3">
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=1" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Kenzie Edgar.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span
                                        class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Quos sunt ratione dolor
                                    exercitationem minima quas itaque saepe quasi architecto vel! Accusantium, vero sint
                                    recusandae cum tempora nemo commodi soluta deleniti.<span
                                        class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=2" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Stevie Tifft.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span
                                        class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem
                                    ipsum, dolor sit amet, consectetur adipisicing elit. Dolore quod necessitatibus, labore
                                    sapiente, est, dignissimos ullam error ipsam sint quam tempora vel.<span
                                        class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 md:w-1/3">
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=3" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Tommie Ewart.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span
                                        class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Vitae, obcaecati ullam excepturi
                                    dicta error deleniti sequi.<span
                                        class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=4" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Charlie Howse.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span
                                        class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Architecto inventore voluptatum
                                    nostrum atque, corrupti, vitae esse id accusamus dignissimos neque reprehenderit natus,
                                    hic sequi itaque dicta nisi voluptatem! Culpa, iusto.<span
                                        class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 md:w-1/3">
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=5" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Nevada Herbertson.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span
                                        class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Nobis, voluptatem porro obcaecati
                                    dicta, quibusdam sunt ipsum, laboriosam nostrum facere exercitationem pariatur deserunt
                                    tempora molestiae assumenda nesciunt alias eius? Illo, autem!<span
                                        class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=6" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Kris Stanton.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span
                                        class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Voluptatem iusto, explicabo,
                                    cupiditate quas totam!<span
                                        class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleAccordion(index) {
            const content = document.getElementById(`content-${index}`);
            const icon = document.getElementById(`icon-${index}`);

            // SVG for Minus icon
            const minusSVG = `
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
              <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
            </svg>
          `;

            // SVG for Plus icon
            const plusSVG = `
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
              <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
            </svg>
          `;

            // Toggle the content's max-height for smooth opening and closing
            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0';
                icon.innerHTML = plusSVG;
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.innerHTML = minusSVG;
            }
        }
    </script>
@endsection
