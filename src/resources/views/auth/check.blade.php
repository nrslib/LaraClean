<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <ul class="col-lg-12">
            Current State:
            @if ($viewModel->isLogin())
            Login
            @else
            Logout
            @endif
        </ul>
    </div>
    @if ($viewModel->isLogin())
    <div class="row">
        <a href="{{action('AccountController@index')}}" class="btn btn-primary col-lg-12">Show My Account</a>
    </div>
    @endif
    <div class="row">
        @if ($viewModel->isLogin())
        <a href="{{action('AuthController@logout')}}" class="btn btn-primary col-lg-12">Logout</a>
        @else
        <a href="{{action('AuthController@login')}}" class="btn btn-primary col-lg-12">Login</a>
        @endif

    </div>
    <div class="row">
        <a href="/" class="btn btn-secondary col-lg-12" >Back</a>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

