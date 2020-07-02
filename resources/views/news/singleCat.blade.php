@extends('...layouts.layout')

@section('header')
    @include('header')
@stop

@section('navBarMenu')
    @include('navBarMenu')
@stop

@section('banner')
    @include('banner')
@stop

@section('body')
    @include('singleCatBody')
@stop

@section('sideBar')
    @include('sideBar')
@stop

@section('footer')
    @include('footer')
@stop
