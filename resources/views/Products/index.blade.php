<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style>
        a
        {
            text-decoration:none;
        }
    </style>
    
</head>
<body>

    <h1>Product List</h1>
    <table border="1" width="100%">
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Image</th>
            <th>Description</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Action</th>
        </tr>
       
        @foreach($data as $d)
    
        <tr>
            <th>{{$d->id}}</th>
            <th>{{$d->name}}</th>
            <th>{{$d->price}}</th>
            <th>{{$d->stock}}</th>
            <th>{{$d->image}}</th>
            <th>{{$d->description}}</th>
            <th>{{$d->created_at}}</th>
            <th>{{$d->updated_at}}</th>
            <th><a href="{{route('Products.show',$d->id)}}">ViewDetails</a>
            <a href="{{route('Products.edit',$d->id)}}">Edit</a>
            <form action="{{route('Products.destroy',$d->id)}}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete">
            </form>

            </th>
        </tr>
        @endforeach


    </table>
  

</body>
</html>