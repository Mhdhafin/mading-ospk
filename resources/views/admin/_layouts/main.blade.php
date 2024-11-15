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
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;1,600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/main.css">
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('style')
</head>

<body>
    <div class="bg-slate-200 flex h-screen">
        @include('admin._layouts.sidebar')

        <div class="flex h-full w-full flex-col">
            @include('admin._layouts.header')


            <div class="h-full px-6 overflow-hidden pl-10">
                <main id="dashboard-main" class="h-[calc(100vh-10rem)] overflow-auto px-4 py-10">
                    @yield('body')
                </main>
            </div>

        </div>
    </div>


    {{-- <script>
        function previewImage() {
            const image = document.querySelector("#image");
            const imgPreview = document.querySelector(".img-preview");
            const label = document.querySelector("#label");

            // Menampilkan preview hanya jika file telah dipilih
            imgPreview.style.display = 'block';
            label.style.display = 'none';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script> --}}

    <script src="./assets/js/script.js"></script>
    @stack('script')
    @stack('custom_script')
</body>

</html>
