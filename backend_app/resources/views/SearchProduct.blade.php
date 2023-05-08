<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./Home.css">
</head>
<body>


@foreach($Product as $P)
    <section class="productBox">
        <p>Product Name:{{$P->ProductName}}</p>
        <p>Product Code:{{$P->ProductCode}}</p>
        <p>Price:{{$P->Price}}</p>
        <p>Size:{{$P->PSize}}</p>
        <p>Colour:{{$P->Colour}}</p>
        <p>ProductDescription:{{$P->ProductDescription}}</p>
        <a class="edit" href="/Home/{{$P->id}}/edit"><img src="./edit.blade.php" alt=""></a>
        <form action="/delete/{{$P->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="deleteBtn">delete</button>
        </form>
    </section>

@endforeach
</body>
</html>
