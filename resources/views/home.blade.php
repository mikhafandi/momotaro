@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <h1 class="fa">Dashboard</h1>
@stop

@section('content')
    <p class="fa">You are logged in!</p>
    <span class="fa">dibawah ini pakai vue</span>
    <div id="app">
        <homecomp></homecomp>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
@stop