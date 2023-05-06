<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
    @auth
        <p>welcome:{{auth()->user()->username}}</p>
        <form method="post" action="/logout">
            @csrf
            <button type="submit">logout</button>
        </form>
    @else
        <a href="/">登陆失败，点击返回主页</a>
    @endauth
</h1>

</body>
</html>
