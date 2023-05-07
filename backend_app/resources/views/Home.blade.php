<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./Home.css">
</head>
<body>
<h1>welcome:{{auth()->user()->username}}</h1>
<a href="/Product">Add Product</a>
@foreach($Products as $Product)
    <section class="productBox">
        <p>Product Name:{{$Product->ProductName}}</p>
        <p>Product Code:{{$Product->ProductCode}}</p>
        <p>Price:{{$Product->Price}}</p>
        <p>Size:{{$Product->PSize}}</p>
        <p>Colour:{{$Product->Colour}}</p>
        <p>ProductDescription:{{$Product->ProductDescription}}</p>
    </section>
@endforeach


<h1>
    @auth
        <form method="post" action="/logout">
            @csrf
            <button type="submit">logout</button>
        </form>
    @else
        <a href="/">登陆失败，点击返回主页</a>
    @endauth
</h1>
</body>
</html>
