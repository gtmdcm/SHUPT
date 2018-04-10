<!-- 存放在 resources/views/child.blade.php -->
<head>
    <title>SHUPT - @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{csrf_token()}}">

</head>
@extends('layouts.app')

@section('title', 'Laravel学院')

@section('content')

    <s-carousel></s-carousel>
@endsection
@section('iflogin')
    @parent
@endsection