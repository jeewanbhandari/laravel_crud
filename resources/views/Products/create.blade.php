<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        .error
        {
            color:red;
        }
    </style>
</head>
<body>

    <h1>Form to Create Products</h1>
    <form action="{{route('Products.store')}}" method="post">
        @csrf
    <label for="name">Name</label>
        <input type="text" id="name" name="name"><br></br>
        <label for="price">Price</label>
        <input type="text" id="price"name="price">
        @error('price')
            <span class='error'>{{$message}}</span>
        @enderror
        <br></br>
        <label for="stock">Stock</label>
        <input type="text" id="stock"name="stock">
        @error('stock')
            <span class='error'>{{$message}}</span>
        @enderror
        <br></br>
        <label for="image">Image</label>
        <input type="file" id="image"name="image"><br></br>
        <label for="description">Description</label>
        <input type="text" id="description"name="description"><br></br>
        <input type="submit"value="Save ">
</form>

</body>
</html>