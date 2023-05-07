<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/Product" method="post">
    @csrf
    <div>
        <label for="ProductName">ProductName:</label>
        <input type="text" name="ProductName">
    </div>

    <div>
        <label for="ProductCode">ProductCode:</label>
        <input type="text" name="ProductCode">
    </div>

    <div>
        <label for="Price">Price:</label>
        <input type="text" name="Price">
    </div>

    <div>
        <label for="Size">Size:</label>
        <input type="text" name="Size">
    </div>

    <div>
        <label for="Colour">Colour:</label>
        <input type="text" name="Colour">
    </div>

    <div>
        <label for="ProductDescription">ProductDescription:</label>
        <input type="text" name="ProductDescription">
    </div>

    <button type="submit">Submit</button>

</form>
</body>
</html>
