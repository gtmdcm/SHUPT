@extends('layouts.app')

@section('title','个人资料')

@section('vues')

    <edit_profile></edit_profile>

@stop


@section('iflogin')
    @parent
@endsection
