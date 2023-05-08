<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./signUp.css">
    <title>Title</title>
</head>
<body>
<div class="darkBox">
    <form action="/Product" class="signForm" method="post">
        @csrf

        <h2 class="signTitle">Add</h2>

        <div class="inputContainer">
            <label class="label" for="ProductName">ProductName:</label>
            <input class="input" type="text" name="ProductName">
        </div>

        @error('ProductName')
        <p class="error">{{$message}}</p>
        @enderror

        <div class="inputContainer">
            <label class="label" for="ProductCode">ProductCode:</label>
            <input class="input" type="text" name="ProductCode">
        </div>

        @error('ProductCode')
        <p class="error">{{$message}}</p>
        @enderror

        <div class="inputContainer">
            <label class="label" for="Price">Price:</label>
            <input class="input" type="text" name="Price">
        </div>
        @error('Price')
        <p class="error">{{$message}}</p>
        @enderror

        <div class="inputContainer">
            <label class="label" for="Size">Size:</label>
            <input class="input" type="text" name="Size">
        </div>

        @error('Size')
        <p class="error">{{$message}}</p>
        @enderror
        <div class="inputContainer">
            <label class="label" for="Colour">Colour:</label>
            <input class="input" type="text" name="Colour">
        </div>

        @error('Colour')
        <p class="error">{{$message}}</p>
        @enderror
        <div class="inputContainer">
            <label class="label" for="ProductDescription">ProductDescription:</label>
            <input class="input" type="text" name="ProductDescription">
        </div>

        @error('ProductDescription')
        <p class="error">{{$message}}</p>
        @enderror
        <button type="submit" class="submitBtn">Submit</button>

    </form>
</div>
</body>
</html>
