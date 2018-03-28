<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>SHUPT - @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <p-nav></p-nav>
        @yield('content')
        <a href="{{route('mainpage')}}">MainPage </a>
        <a href="{{route('upload')}}">Upload </a>
        <a href="{{route('torrent')}}">Torrent </a>
        <a href="{{route('viewrequests')}}">ViewRequests </a>
        <a href="{{route('forums')}}">Forums</a>
        <br/>
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
</body>
</html>