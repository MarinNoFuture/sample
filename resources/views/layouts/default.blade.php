<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title','Sample') - Laravel 入门教程</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('layouts._header')

        <div class="container">
            @include('shared._messages')
            @yield('content')
            @include('layouts._footer')
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>