<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./assets/img/ospk_logo.png" />
    <title> OSPK SMKN 65 | {{ $title }}</title>
    {{-- Alpine js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Font Awesome --}}
    <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    {{-- Tailwindcss --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <style>
        .custom-bg {
            width: 100%;
            height: 100%;
            /* Add your background pattern here */
            background-color: #ffffff;
            background-image: radial-gradient(rgba(12, 12, 12, 0.171) 2px, transparent 0);
            background-size: 30px 30px;
            background-position: -5px -5px;
        }
    </style>
</head>

<body class="bg-white">

    <x-navbar></x-navbar>



    <main>
        <div class="mx-auto max-w-7xl px-4   py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    <x-footer></x-footer>

    <script src="/assets/js/script.js"></script>
</body>

</html>
