@extends('...layouts.layout')

@section('header')
    @include('header')
@stop

@section('navBarMenu')
    @include('navBarMenu')
@stop

@section('body')
    @include('authBody')
@stop

@section('sideBar')
    @include('sideBar')
@stop

@section('footer')
    @include('footer')
@stop
