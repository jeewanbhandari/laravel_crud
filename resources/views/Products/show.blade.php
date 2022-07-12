<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Employee</title>
    
</head>
<body>

    

    <table border="2" width="100%" >
        
        <h1>Product Details</h1>
        <tr>
            <th>Name</th>
            <td>{{$product->name}}</td>
        </tr>
         <tr>
            <th>Price</th>
            <td>{{$product->price}}</td>
         </tr>
         <tr>
            <th>Stock</th>
            <td>{{$product->stock}}</td>
         </tr>
         <tr>
            <th>Image</th>
            <td>{{$product->image}}</td>
         </tr>
         <tr>
            <th>Description</th>
            <td>{{$product->description}}</td>
         </tr>
        


    </table>
    
</body>
</html>