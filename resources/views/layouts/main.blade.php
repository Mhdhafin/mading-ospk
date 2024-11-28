<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./assets/img/ospk_logo.png" />
    <title> OSPK SMKN 65 | @yield('title')</title>
    {{-- Alpine js --}}
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font Awesome --}}
    <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- from node_modules -->
    <script src="node_modules/@material-tailwind/html@latest/scripts/ripple.js"></script>

    <!-- from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>

    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- Icons --}}
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <style>
        /* .custom-bg {
            width: 100%;
            height: 100%;

            background-color: #ffffff;
            background-image: radial-gradient(rgba(12, 12, 12, 0.171) 2px, transparent 0);
            background-size: 30px 30px;
            background-position: -5px -5px;
        } */



        .hero {
            height: 100vh;
            background: url(./assets/img/ospk-team.jpeg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            z-index: 1;
        }



        .hero-bg {
            content: "";
            height: 100%;
            width: 100%;
            position: absolute;
            background-color: #000;
            opacity: 0.4;
            z-index: -1;
        }
    </style>

    @vite('resources/css/app.css')
</head>

<body class="bg-white">

    <x-navbar></x-navbar>


    @yield('body')

    {{-- <x-footer></x-footer> --}}
    {{-- <div class="w-full py-4 bg-red-600">
        <p class="text-center text-white mb-3">Created by Muhammad Dhafin Haron</p>
        <hr class="w-96 mx-auto">
        <a href=""></a>
    </div> --}}


    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/user.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>



</body>

</html>
