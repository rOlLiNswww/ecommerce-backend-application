<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./signUp.css">
    <title>Title</title>
</head>
<body style="background-color: #9ca3af;">
<form action="/Home/{{$Product->id}}" method="post">
    @csrf
    @method('put')

    <div style="margin: 15% 38%">
        <h1>
            Edit Product
        </h1>
        <div>
            <label for="ProductName">ProductName:</label>
            <input type="text" name="ProductName" value="{{$Product->ProductName}}">
        </div>

        <div>
            <label for="ProductCode">ProductCode:</label>
            <input type="text" name="ProductCode" value="{{$Product->ProductCode}}">
        </div>

        <div>
            <label for="Price">Price:</label>
            <input type="text" name="Price" value="{{$Product->Price}}">
        </div>

        <div>
            <label for="Size">Size:</label>
            <input type="text" name="Size" value="{{$Product->Size}}">
        </div>

        <div>
            <label for="Colour">Colour:</label>
            <input type="text" name="Colour" value="{{$Product->Colour}}">
        </div>

        <div>
            <label for="ProductDescription">ProductDescription:</label>
            <input type="text" name="ProductDescription" value="{{$Product->ProductDescription}}">
        </div>

        <button type="submit" >Submit Edit</button>
    </div>
</form>
</body>
</html>
