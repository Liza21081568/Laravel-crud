@extends('layouts.app')


@section('content')
<center>
<div class="jumbotron text-center" style="
    padding: 4rem;
    width: 75%;
    Height: 80%;
    background-color: #c3cfdb;
    border-radius: 3rem;">
    <h1>Welcome To Laravel!</h1>
    <p>This is the laravel application </p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>
</center>
@endsection