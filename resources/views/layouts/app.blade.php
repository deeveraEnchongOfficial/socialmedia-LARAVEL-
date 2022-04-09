<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/line-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/line-awesome-font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/slick/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ URL::asset('//fonts.gstatic.com') }}" />
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito') }}" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>

<body>

    @yield('content')

    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('lib/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/scrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>

    @yield('scripts')
</body>

</html>