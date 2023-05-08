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

        <div class="inputContainer">
            <label class="label" for="ProductCode">ProductCode:</label>
            <input class="input" type="text" name="ProductCode">
        </div>


        <div class="inputContainer">
            <label class="label" for="Price">Price:</label>
            <input class="input" type="text" name="Price">
        </div>

        <div class="inputContainer">
            <label class="label" for="Size">Size:</label>
            <input class="input" type="text" name="Size">
        </div>
        <div class="inputContainer">
            <label class="label" for="Colour">Colour:</label>
            <input class="input" type="text" name="Colour">
        </div>
        <div class="inputContainer">
            <label class="label" for="ProductDescription">ProductDescription:</label>
            <input class="input" type="text" name="ProductDescription">
        </div>
        <button type="submit" class="submitBtn">Submit</button>

    </form>
</div>
</body>
</html>
