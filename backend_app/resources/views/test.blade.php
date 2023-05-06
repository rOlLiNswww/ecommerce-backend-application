<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
    @auth
        <p>welcome:{{auth()->user()->name}}</p>
        <form method="post" action="/logout">
            @csrf
            <button type="submit">logout</button>
        </form>
    @else
        <a href="/register">注册</a>
        <a href="/login">登陆</a>
    @endauth



</h1>

</body>
</html>
