<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Backtrack History') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.scrolly.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.dropotron.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.scrollex.min.js') }}" defer></script>
    {{--<script src="{{ asset('js/browser.min.js') }}" defer></script>--}}
    {{--<script src="{{ asset('js/breakpoints.min.js') }}" defer></script>--}}
    {{--<script src="{{ asset('js/util.js') }}" defer></script>--}}
    {{--<script src="{{ asset('js/main.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    {{--<link rel="stylesheet" href="{{ asset('css/main.css') }} " />--}}
    {{--<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>--}}
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js" defer></script>

    <!-- Styles -->
    {{--<link href="{{asset('css/reset.css')}}" type="text/css" rel="stylesheet">--}}
    <link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet">
</head>
<body>
<div id="app">
        @yield('content')
</div>
</body>
</html>
