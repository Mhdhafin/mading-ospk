<header id="navbar" class="z-10 bg-transparent top-0 left-0 w-full ">
    <nav class=" bg-red-900" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-20 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" @click="isOpen = !isOpen"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-red-400 hover:bg-red-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
              Icon when menu is closed.

              Menu open: "hidden", Menu closed: "block"
            -->
                        <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
              Icon when menu is open.

              Menu open: "block", Menu closed: "hidden"
            -->
                        <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">

                    <div class="flex flex-shrink-0 items-center">
                        <h2 class="text-lg sm:left-0 font-semibold text-white ml-2">E-mading <span
                                class="text-yellow-400 font-bold">
                                Ospk</span></h2>
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                            <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
                        </div>
                    </div>
                </div>
                <div
                    class="absolute lg:inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    {{-- @guest
                        <div class="opacity-0 lg:opacity-100 text-white flex justify-between items-center px-4">
                            <a href="/login" class="text-base mr-2 hover:scale-105 transition duration-300">Login</a>
                            <span class="cursor-pointer">|</span>
                            <a href="/register" class="text-base ml-2 hover:scale-105 transition duration-300">Register</a>
                        </div>
                    @else
                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            <div class="flex items-center">
                                <button type="button" @click="isOpen = !isOpen"
                                    class="relative flex rounded-full bg-red-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 ml-5 focus:ring-offset-gray-800"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="./assets/img/profile.jpg" alt="">
                                </button>
                            </div>

                            <!-- Dropdown menu, show/hide based on menu state. -->
                            <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75 transform"
                                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1">
                                <a href="/profile" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                    tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                            </div>
                        @endguest
                    </div> --}}
                    <div class="px-2">
                        <img src="{{ asset('assets/img/logo-osis.png') }}" class=" w-12 rounded-full" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="isOpen" class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <x-nav-link2 href="/" :activ="request()->is('/')">Home</x-nav-link2>
                <x-nav-link2 href="/about" :activ="request()->is('about')">About</x-nav-link2>
                <x-nav-link2 href="/blog" :activ="request()->is('blog')">Blog</x-nav-link2>

                <div class="z-10 text-white block px-4">
                    <a href="/login" class="text-base mr-2 hover:scale-105 transition duration-300">Login</a>
                    <span class="cursor-pointer">|</span>
                    <a href="/register" class="text-base ml-2 hover:scale-105 transition duration-300">Register</a>
                </div>
            </div>
        </div>
    </nav>
</header>



<script>
    window.onscroll = function() {
        const navbar = document.getElementById("navbar");
        const fixedNav = navbar.offsetTop

        if (window.pageYOffset > fixedNav) {
            navbar.classList.add("navbar-fixed");
            navbar.classList.remove("absolute")
        } else {
            navbar.classList.remove("navbar-fixed");
            navbar.classList.add("absolute")
        }
    };
</script>
