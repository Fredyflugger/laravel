@extends('...layouts.layout')

@section('header')
    @include('generalBlocks.header')
@stop

@section('navBarMenu')
    @include('generalBlocks.navBarMenu')
@stop

@section('body')
    @include('pageBlocks.newsEditBody')
@stop

@section('footer')
    @include('generalBlocks.footer')
@stop