<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link rel="canonical" href="">

    <meta name="description" ">

        <title>Ospk SMKN 65 | {{ $title }}</title>
        <script src="https://cdn.tailwindcss.com"></script>

        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;1,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="./assets/css/main.css">

        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="bg-slate-200 flex h-screen">
            @include('_layouts.sidebar')

            <div class="flex h-full w-full flex-col">
                @include('_layouts.header')


              <div class="h-full overflow-hidden pl-10">
                <main id="dashboard-main" class="h-[calc(100vh-10rem)] overflow-auto px-4 py-10">
                    @yield('body')
                </main>
              </div>

            </div>
          </div>

          <script src="./assets/js/script.js"></script>
    </body>
</html>
