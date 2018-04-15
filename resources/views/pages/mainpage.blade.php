@extends('layouts.app')

@section('title','MainPage')

@section('vues')
    <z-main></z-main>
@stop

@section('iflogin')
    @parent
@endsection