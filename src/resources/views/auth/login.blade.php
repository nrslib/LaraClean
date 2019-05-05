<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
<div class="flex-center position-ref full-height">
    <h1>Login</h1>
    <form action="auth/submit" method="post">
        @csrf

        ID: <input type="input" name="id">
        PASS: <input type="password" name="pass">
        <input type="submit">
    </form>
</div>
</body>
</html>
