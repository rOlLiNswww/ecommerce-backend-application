<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./signUP.css">
    <title>Title</title>
</head>
<body>
<div>
    <div class="darkBox">
        <form action="/register" method="post" class="signForm">
            @csrf
            <h1 class="signTitle">Sign up</h1>
            <div class="inputContainer">
                <input type="text" name="name" class="input"/>
                <label class="label">Name:</label>
            </div>
            <div class="inputContainer">
                <input type="text" name="username" class="input" />
                <label class="label">User Name: </label>
            </div>
            <div class="inputContainer">
                <input type="email" name="email" class="input"/>
                <label class="label">Email</label>
            </div>
            <div class="inputContainer">
                <input type="password" name="password" class="input"/>
                <label class="label">Password</label>
            </div>

            <input type="submit" class="submitBtn" value="Save"/>
        </form>
    </div>
</div>
</body>
</html>
