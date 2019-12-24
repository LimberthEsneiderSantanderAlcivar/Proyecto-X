<!DOCTYPE html>
<html lang="">
    <head>
{{--         <title>@yield('title','Proyecto X')</title> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div id="app" class="d-flex flex-column h-screen justify-content-between">
            <header>
                @include('nav')
            </header>
            <main class="py-4">
                @yield('content')
            </main>
            <footer class="bg-white text-center text-black-50 py-3 shadow">
                Proyecto X | CopyRight @ {{ date('Y') }}
            </footer>
        </div>
    </body>
</html>