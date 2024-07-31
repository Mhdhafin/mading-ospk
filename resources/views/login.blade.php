<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OSPK SMKN 65 | {{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div
                class="absolute inset-0 bg-gradient-to-r from-slate-500 to-slate-700 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                @if (Session::has('error'))
                    <div class="mt-2 mb-3 bg-red-100 border border-red-200 text-sm text-red-800 rounded-lg p-4 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500"
                        role="alert" tabindex="-1" aria-labelledby="hs-soft-color-success-label">
                        <span id="hs-soft-color-success-label" class="font-bold">{{ Session::get('error') }}</span>
                    </div>
                @endif
                <div class="max-w-md mx-auto">
                    <div>
                        <h1 class="text-2xl font-semibold w-screen">Login </h1>
                    </div>
                    <form action="{{ route('loginPost') }}" method="POST">
                        @csrf
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="relative">
                                    <input autocomplete="off" id="username" name="username" type="text"
                                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                                        placeholder="username" />
                                    <label for="username"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Username</label>
                                </div>
                                <div class="relative">
                                    <input autocomplete="off" id="password" name="password" type="password"
                                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                                        placeholder="Password" />
                                    <label for="password"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
                                </div>
                                <div class="relative">
                                    <button class="bg-slate-500 text-white rounded-md px-2 py-1">Submit</button>

                                </div>
                                <div class="mt-2">
                                    <span class="text-base">Don't Have Account?<a href="/register"
                                            class="ml-3 hover:text-blue-600 hover:underline">Register</a></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
