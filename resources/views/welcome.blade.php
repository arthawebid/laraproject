@extends('layouts.app')
@section('judulpage','Welcome Page')

@section('konten')
<div class="container">

    <div class="menu">
        <a href="./">Home</a>
        <a href="{{ route('listteman') }}">teman</a>
        <a href="./about">About</a>
    </div>

    <div class="konten">
        <h3>Welcome Page</h3>
    </div>
</div>
@endsection