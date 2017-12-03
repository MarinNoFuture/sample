@extends('layouts.default')
@section('title',$user->name)
@section('content')
<div class="row user_info">
    <section class="avatar">
        @include('shared._user_info', ['user'=>$user])
    </section>
</div>
@stop