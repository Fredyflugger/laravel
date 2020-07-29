@extends('...layouts.layout')

@section('header')
@include('generalBlocks.header')
@stop

@section('navBarMenu')
@include('generalBlocks.navBarMenu')
@stop

@section('banner')
@include('generalBlocks.banner')
@stop

@section('body')
@include('pageBlocks.IndexBody')
@stop

@section('sideBar')
@include('generalBlocks.sideBar')
@stop

@section('footer')
@include('generalBlocks.footer')
@stop