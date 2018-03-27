<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SHUPT - @yield('title')</title>
</head>
<body>
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
</body>
</html>