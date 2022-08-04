@extends('layout')

@section('page')
    
    <div style="text-align: center; margin-top: 20px;">
        @auth
            <h1> Hello {{ auth()->user()->name }} </h1>
        @else
            <h1> Welcome </h1>
        @endauth
    </div>

@endsection