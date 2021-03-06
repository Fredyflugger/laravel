@extends('...layouts.layout')

@section('header')
    @include('generalBlocks.header')
@stop

@section('navBarMenu')
    @include('generalBlocks.navBarMenu')
@stop

@section('navBarParsers')
    @include('generalBlocks.navBarParsers')
@stop

@section('body')
    @include('pageBlocks.adminBody')
@stop

@section('footer')
    @include('generalBlocks.footer')
@stop
