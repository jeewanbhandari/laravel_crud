<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>

    <h1>Form to Edit Products</h1>
    <form action="{{route('Products.update', $products->id)}}" method="post">
    <input type="hidden" name="_method" value="PUT">

        @csrf
    <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{$products->name}}"><br></br>
        <label for="price">Price</label>
        <input type="number" id="price"name="price" value="{{$products->price}}"><br></br>
        <label for="stock">Stock</label>
        <input type="number" id="stock"name="stock" value="{{$products->stock}}"><br></br>
        <label for="image">Image</label>
        <input type="file" id="image"name="image" value="{{$products->image}}"><br></br>
        <label for="description">Description</label>
        <input type="text" id="description"name="description" value="{{$products->description}}"><br></br>
        <input type="submit"value="Update ">
</form>

</body>
</html>