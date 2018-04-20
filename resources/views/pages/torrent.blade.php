@extends('layouts.app')

@section('title','Torrent')

@section('vues')
    <Col>
    <torrent></torrent>
    </Col>
@stop

@section('iflogin')
    @parent
@endsection