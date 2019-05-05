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
                <li>Id: {{$viewModel->getId()}}</li>
                <li>Name: {{$viewModel->getName()}}</li>
            </ul>
        </div>
        <div class="row">
            <a href="{{action('AuthController@check')}}" class="btn btn-secondary col-lg-12" >Back</a>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
