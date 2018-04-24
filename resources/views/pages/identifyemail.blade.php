@extends('layouts.app')

@section('title','认证邮箱')

@section('vues')
    <identify_email></identify_email>
@stop


@section('iflogin')
    @parent
@endsection