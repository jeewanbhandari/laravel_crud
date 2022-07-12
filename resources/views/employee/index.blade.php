<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Employees</title>
    <style>
        a
        {
            text-decoration:none;
        }
    </style>
    
</head>
<body>

    <h1>Employees List</h1>
    @if(session('success'))
    
        <p style="background=green ;padding :10px">{{session('success')}}</p>  
    
    @endif
    @if(session('error'))
    <p style="background=red ;padding :10px">{{session('error')}}</p>  
 

    
    @endif
    <table border="1" width="100%">
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>BirthDate</th>
            <th>Image</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Action</th>
            
        </tr>
        @foreach($data as $d)
        <tr>
            <th>{{$d->id}}</th>
            <th>{{$d->name}}</th>
            <th>{{$d->email}}</th>
            <th>{{$d->phone}}</th>
            <th>{{$d->address}}</th>
            <th>{{$d->dob}}</th>
            <th>{{$d->image}}</th>
            <th>{{$d->created_at}}</th>
            <th>{{$d->updated_at}}</th>
            <th><a href="{{route('employee.show',$d->id)}}">ViewDetails</a>
            <a href="{{route('employee.edit',$d->id)}}">Edit</a>
            <form action="{{route('employee.destroy',$d->id)}}" method="post">
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