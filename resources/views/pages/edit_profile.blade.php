@extends('layouts.app')

@section('title','个人资料')

@section('vues')
    <div style="
    justify-content: center;
    display: flex;">
    <edit_profile></edit_profile>
    </div>
@stop


@section('iflogin')
    @parent
@endsection
