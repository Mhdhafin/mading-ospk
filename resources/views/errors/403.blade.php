<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error Page | OSPK SMKN 65 JAKARTA</title>

    <link rel="stylesheet" href="{{ asset('build/assets/build.css') }}">
</head>

<body>


    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" :class="{ 'dark': isDark }">
        <!-- Loading screen -->
        <div x-ref="loading"
            class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-black bg-opacity-90">
            Loading.....
        </div>
        <main aria-labelledby="pageTitle"
            class="flex items-center justify-center h-screen bg-gray-100 dark:bg-dark dark:text-light">
            <div class="p-4 space-y-4">
                <div class="flex flex-col items-start space-y-3 sm:flex-row sm:space-y-0 sm:items-center sm:space-x-3">
                    <p class="font-semibold text-red-500 text-9xl dark:text-red-600">404</p>
                    <div class="space-y-2">
                        <h1 id="pageTitle" class="flex items-center space-x-2">
                            <svg aria-hidden="true" class="w-6 h-6 text-red-500 dark:text-red-600"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <span class="text-xl font-medium text-gray-600 sm:text-2xl dark:text-light">
                                Oops! Page not found.
                            </span>
                        </h1>
                        <p class="text-base font-normal text-gray-600 dark:text-gray-300">
                            The page you ara looking for was not found.
                        </p>
                        <p class="text-base font-normal text-gray-600 dark:text-gray-300">
                            You may return to
                            <a href="https://kamona-wd.github.io/kwd-dashboard/"
                                class="text-blue-600 hover:underline dark:text-blue-500">home page</a> or try
                            using the search form.
                        </p>
                    </div>
                </div>

                <form action="#" method="POST">
                    <div class="flex items-center justify-center">
                        <input type="text" name="search" placeholder="What are you looking for?"
                            class="w-full px-4 py-2 rounded-l-md focus:outline-none focus:ring focus:ring-blue-400 dark:bg-darker dark:focus:ring-blue-800" />
                        <button
                            class="p-2 text-white rounded-r-md bg-blue-600 dark:bg-blue-700 hover:bg-blue-700 dark:hover:bg-blue-800 focus:outline-none focus:ring focus:ring-primary-light dark:focus:ring-primary-darker">
                            <span class="sr-only">Search</span>
                            <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </main>
        <div class="fixed bottom-5 left-5">
            <button aria-hidden="true" @click="toggleTheme"
                class="p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring focus:ring-primary">
                <svg x-show="isDark" class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
                <svg x-show="!isDark" class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>
            </button>
        </div>
        <div class="fixed bottom-5 right-5">
            <a href="https://kamona-wd.github.io/kwd-dashboard/" target="_blank"
                class="inline-block px-4 py-2 bg-red-500 text-white rounded-md shadow-sm transition-colors hover:bg-red-700 focus:outline-none focus:ring">
                See full project
            </a>
        </div>
    </div>

</body>

</html>
