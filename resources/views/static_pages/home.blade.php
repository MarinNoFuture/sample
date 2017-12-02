@extends('layouts.default')
@section('title','主页')

@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            你现在所看到的是Laravel
        </p>
        <p>
            一切从此开始
        </p>
        <p>
            <a href="{{ route('signup') }}" role="button" class="btn btn-lg btn-success">现在注册</a>
        </p>
    </div>
@stop