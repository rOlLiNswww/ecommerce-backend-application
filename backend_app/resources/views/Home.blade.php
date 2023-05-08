<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./Home.css">
</head>
<body>
<h1 class="title">Welcome: {{auth()->user()->email}}</h1>
<div>
    <div class="sideBar">
        <a href="/Product"><div class="add sideBarButton"></div></a>

        <form class="form" method="post" action="/logout">
            @csrf
            <button class="exit sideBarButton" type="submit"></button>
        </form>
    </div>
</div>


<form action="/search" method="get">
    <input class="search" type="text" name="search" placeholder="search"/>
</form>


@foreach($Products as $Product)
    <section class="productBox">
        <p>Product Name: {{$Product->ProductName}}</p>
        <p>Product Code: {{$Product->ProductCode}}</p>
        <p>Price(AUD$): {{$Product->Price}}</p>
        <p>Size: {{$Product->Size}}</p>
        <p>Colour: {{$Product->Colour}}</p>
        <p>ProductDescription: {{$Product->ProductDescription}}</p>
        <a class="edit" href="/Home/{{$Product->id}}/edit"><img src="./edit.blade.php" alt=""></a>

        <form action="/delete/{{$Product->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="deleteBtn">delete</button>
        </form>
    </section>

@endforeach

</body>
</html>
