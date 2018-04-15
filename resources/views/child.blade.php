@extends('layouts.app')

@section('title','测试页面0v0')

@section('vues')

    {{--<edit_profile></edit_profile>--}}
    <s-status></s-status>
@stop


@section('iflogin')
    @parent
@endsection
