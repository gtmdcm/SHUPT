@extends('layouts.app')

@section('title','认证邮箱')

@section('vues')
    <emailError></emailError>
@stop


@section('iflogin')
    @parent
@endsection