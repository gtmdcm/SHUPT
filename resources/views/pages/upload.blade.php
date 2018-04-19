@extends('layouts.app')

@section('title','Upload')

@section('vues')
    <upload_torrent></upload_torrent>

@stop

@section('iflogin')
    @parent
@endsection