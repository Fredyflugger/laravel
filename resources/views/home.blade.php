@extends('layouts.auth')

@section('header')
    @include('generalBlocks.header')
@stop

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    @if(Auth::user()->is_admin)
                        <br>
                        <a href="{{ route('admin') }}" class="text-danger">Перейти в админку</a>
                    @endif

                    @if(session()->has('error'))
                        <div class="alert alert-success" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
