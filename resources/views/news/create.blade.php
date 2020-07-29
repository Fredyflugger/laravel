@extends('...layouts.layout')

@section('header')
@include('generalBlocks.header')
@stop

@section('navBarMenu')
@include('generalBlocks.navBarMenu')
@stop

@section('body')
@include('pageBlocks.newsCreateBody')
@stop

@section('sideBar')
@include('generalBlocks.sideBar')
@stop

@section('footer')
@include('generalBlocks.footer')
@stop