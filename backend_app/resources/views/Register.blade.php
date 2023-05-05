<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./signUP.css">
    <title>Title</title>
</head>
<body>
    <div class="darkBox">
        <form action="/register" method="post" class="signForm">
            @csrf
            <h1 class="signTitle">Sign up</h1>
            <div class="inputContainer">
                <input type="text" name="name" class="input" value="{{old('name')}}"/>
                <label class="label">Name:</label>
            </div>
            @error('name')
            <p class="error">{{$message}}</p>
            @enderror
            <div class="inputContainer">
                <input type="text" name="username" class="input" value="{{old('username')}}"/>
                <label class="label">User Name: </label>
            </div>
            @error('username')
            <p class="error">{{$message}}</p>
            @enderror
            <div class="inputContainer">
                <input type="email" name="email" class="input" value="{{old('email')}}"/>
                <label class="label">Email</label>

            </div>
            @error('email')
            <p class="error">{{$message}}</p>
            @enderror
            <div class="inputContainer">
                <input type="password" name="password" class="input" value="{{old('password')}}"/>
                <label class="label">Password</label>
            </div>
            @error('password')
            <p class="error">{{$message}}</p>
            @enderror

            <input type="submit" class="submitBtn" value="Save"/>
        </form>
    </div>

</body>
</html>
