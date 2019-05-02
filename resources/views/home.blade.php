@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('public/custom.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-50">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                       <strong> {{ Auth::user()->name }}!! </strong> &nbsp;&nbsp;You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
