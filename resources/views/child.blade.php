<!-- 存放在 resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Laravel学院')

@section('content')
    <date></date>
@endsection


@section('iflogin')
    @parent
@endsection