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
        <form action="auth/submit" method="post">
            @csrf

            <div class="form-group">
                <label>ID</label>
                <input type="input" name="id" class="form-control">
            </div>
            <div class="form-group">
                <label>PASS</label>
                <input type="password" name="pass" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
    <div class="row">
        <a href="{{action('AuthController@check')}}" class="btn btn-secondary" >Back</a>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

