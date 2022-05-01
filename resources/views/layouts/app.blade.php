<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>ShopNow | {{ $title }}</title>
</head>

<body class="selection:bg-rose-500 selection:text-white bg-slate-100">
    <div class="sticky top-0 z-50">
        @include('layouts.navbar')
    </div>
    @yield('container')

    @include('layouts.footer')
    @include('layouts.top')
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
