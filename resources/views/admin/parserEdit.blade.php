@extends('...layouts.layout')

@section('header')
@include('generalBlocks.header')
@stop

@section('navBarParsers')
@include('generalBlocks.navBarParsers')
@stop

@section('body')
@include('pageBlocks.parserEditBody')
@stop

@section('footer')
@include('generalBlocks.footer')
@stop