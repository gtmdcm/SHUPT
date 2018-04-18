@extends('layouts.app')

@section('title','Upload')

@section('vues')
    <div style="
    justify-content: center;
    display: flex;">
    <upload_torrent></upload_torrent>
    </div>

@stop

@section('iflogin')
    @parent
@endsection