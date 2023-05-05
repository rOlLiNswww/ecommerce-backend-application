<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./login.css">
    <title>Title</title>
</head>
<body>
<div class="darkBox">
    <form action="/login" method="post" class="signForm">
        @csrf
        <p class="message">Welcome to Backend manager</p>

        <input class="loginInput" type="text" name="email" placeholder="Email" value="{{old('email')}}"/>
        @error('email')
        <p class="errorMes">{{$message}}</p>
        @enderror

        <input class="loginInput" type="password" name="password" placeholder="Password" value="{{old('password')}}"/>
        @error('password')
        <p class="errorMes">{{$message}}</p>
        @enderror

        <input type="submit" class="button" value="Submit"/>
    </form>
</div>
</body>
</html>

