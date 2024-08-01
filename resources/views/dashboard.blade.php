<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ospk SMKN 65 | {{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body class="relative bg-white overflow-hidden max-h-screen">
    <header class="fixed right-0 top-0 left-60 bg-slate-200 py-3 px-4 h-16">
        <div class="max-w-4xl mx-auto">
            <div class="flex mt-1 items-center justify-between">

                <div class="text-lg font-bold">Today's Plan</div>
                <div>
                    <img src="./assets/img/profile.jpg" class="h-8 w-8 rounded-full" alt="">
                </div>
            </div>
        </div>
    </header>

    <aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-60">
        <div class="flex flex-col justify-between h-full">
            <div class="flex-grow">
                <div class="px-4 py-6 text-center border-b">
                    <h1 class="text-xl font-bold leading-none text-slate-500">Admin Mading Digital OSPK
                    </h1>
                </div>
                <div class="p-4">
                    <ul class="space-y-1">
                        <li>
                            <a href="/"
                                class="flex items-center bg-slate-300  rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                    <path
                                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                </svg>Plan
                            </a>
                        </li>



                    </ul>
                </div>
            </div>
            <div class="p-4">
                <button  type="button"
                    class="inline-flex items-center justify-center h-9 px-4 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                    <a href="{{ route('logout') }}" class="font-bold text-sm ">Logout</a>
                </button>
            </div>
        </div>
    </aside>

    <main class="ml-60 pt-16 max-h-screen overflow-auto">
        <div class="px-6 py-8">
            <div class="max-w-4xl mx-auto">
                {{-- <div class="bg-white rounded-3xl p-8 mb-5">
                    <h1 class="text-3xl font-bold mb-10">Messaging ID framework development for the marketing branch
                    </h1>
                    <div class="flex items-center justify-between">
                        <div class="flex items-stretch">
                            <div class="text-gray-400 text-xs">Members<br>connected</div>
                            <div class="h-100 border-l mx-4"></div>
                            <div class="flex flex-nowrap -space-x-3">
                                <div class="h-9 w-9">
                                    <img class="object-cover w-full h-full rounded-full"
                                        src="https://ui-avatars.com/api/?background=random">
                                </div>
                                <div class="h-9 w-9">
                                    <img class="object-cover w-full h-full rounded-full"
                                        src="https://ui-avatars.com/api/?background=random">
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-x-2">
                            <button type="button"
                                class="inline-flex items-center justify-center h-9 px-3 rounded-xl border hover:border-gray-400 text-gray-800 hover:text-gray-900 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z" />
                                </svg>
                            </button>
                            <button type="button"
                                class="inline-flex items-center justify-center h-9 px-5 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                                Open
                            </button>
                        </div>
                    </div>

                    <hr class="my-10">

                    <div class="grid grid-cols-2 gap-x-20">
                        <div>
                            <h2 class="text-2xl font-bold mb-4">Stats</h2>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="col-span-2">
                                    <div class="p-4 bg-green-100 rounded-xl">
                                        <div class="font-bold text-xl text-gray-800 leading-none">Good day, <br>Kristin
                                        </div>
                                        <div class="mt-5">
                                            <button type="button"
                                                class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                                                Start tracking
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                                    <div class="font-bold text-2xl leading-none">20</div>
                                    <div class="mt-2">Tasks finished</div>
                                </div>
                                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                                    <div class="font-bold text-2xl leading-none">5,5</div>
                                    <div class="mt-2">Tracked hours</div>
                                </div>
                                <div class="col-span-2">
                                    <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                                        <div class="font-bold text-xl leading-none">Your daily plan</div>
                                        <div class="mt-2">5 of 8 completed</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold mb-4">Your tasks today</h2>

                            <div class="space-y-4">
                                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                    <div class="flex justify-between">
                                        <div class="text-gray-400 text-xs">Number 10</div>
                                        <div class="text-gray-400 text-xs">4h</div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="font-bold hover:text-yellow-800 hover:underline">Blog and social
                                        posts</a>
                                    <div class="text-sm text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" class="text-gray-800 inline align-middle mr-1"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>Deadline is today
                                    </div>
                                </div>
                                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                    <div class="flex justify-between">
                                        <div class="text-gray-400 text-xs">Grace Aroma</div>
                                        <div class="text-gray-400 text-xs">7d</div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="font-bold hover:text-yellow-800 hover:underline">New campaign review</a>
                                    <div class="text-sm text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" class="text-gray-800 inline align-middle mr-1"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>New feedback
                                    </div>
                                </div>
                                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                    <div class="flex justify-between">
                                        <div class="text-gray-400 text-xs">Petz App</div>
                                        <div class="text-gray-400 text-xs">2h</div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="font-bold hover:text-yellow-800 hover:underline">Cross-platform and
                                        browser QA</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </main>
</body>

</html>
