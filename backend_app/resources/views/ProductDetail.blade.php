<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


    <h1>
        Product Detail
    </h1>
        <label for="ProductName">ProductName:</label>
        <p>{{$Product->ProductName}}</p>
        <p>{{$Product->ProductCode}}</p>
        <p>{{$Product->Price}}</p>
        <p>{{$Product->Size}}</p>
        <p>{{$Product->Colour}}</p>
        <p>{{$Product->ProductDescription}}</p>

    <a href="/Home/{{$id}}/edit">Edit</a>
    <form action="/Home/{{$Product->id}}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>



</form>
</body>
</html>
