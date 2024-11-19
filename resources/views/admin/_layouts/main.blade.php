<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link rel="canonical" href="">

    <meta name="description">

    <link rel="shortcut icon" href="./assets/img/ospk_logo.png" />
    <title>Ospk SMKN 65 | @yield('title')</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;1,600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    @stack('style')

    @vite('resources/css/app.css')
</head>

<body>
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
        @include('admin._layouts.sidebar')

        <div class="flex-1 flex flex-col overflow-hidden">
            @include('admin._layouts.header')

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    @yield('body')
                </div>
            </main>
        </div>
    </div>

    @include('sweetalert::alert')


    <script src="./assets/js/script.js"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @stack('script')
    @stack('custom_script')
</body>

</html>
