@extends('layouts.app')

@section('title','Upload')

@section('content')
    <upload_torrent></upload_torrent>
@stop

@section('iflogin')
    @parent
@endsection