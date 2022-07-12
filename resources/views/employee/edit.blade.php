<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Form to create employee</h1>
    <form action="{{route('employee.update', $employee->id)}}" method="post">
        <input type="hidden" name="_method" value="PUT">
        @csrf
    <label for="name">Full name</label>
        <input type="text" id="name"name="name" value="{{$employee->name}}"><br></br>
        <label for="address">Address</label>
        <input type="text" id="address"name="address" value="{{$employee->address}}"><br></br>
        <label for="email">Email</label>
        <input type="text" id="email"name="email"  value="{{$employee->email}}"><br></br>
        <label for="phone">Phone</label>
        <input type="number" id="phone"name="phone"  value="{{$employee->phone}}"><br></br>
        <label for="dob">Date of birth</label>
        <input type="date" id="dob"name="dob"  value="{{$employee->dob}}"><br></br>
        <label for="image">Image</label>
        <input type="file" id="image"name="image"  value="{{$employee->image}}"><br></br>
        <input type="submit"value="Update ">
</form>

</body>
</html>