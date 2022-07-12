<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span{
            color:red;
        }

        
    </style>
</head>
<body>

    <h1>Form to create employee</h1>
    <form action="{{route('employee.store')}}" method="post">
        @csrf
    <label for="name">Full name</label>
        <input type="text" id="name"name="name" value="{{old('name')}}">
        @error('name')
            <span class='error'>{{$message}}</span>
        @enderror
        <br></br>
   
        <label for="address">Address</label>
        <input type="text" id="address"name="address" value="{{old('address')}}"><br></br>
        <label for="email">Email</label>
        <input type="text" id="email"name="email" value="{{old('email')}}">
        @error('email')
        <span class='error'>{{$message}}</span>
        @enderror
        <br></br>
        <label for="phone">Phone</label>
        <input type="number" id="phone"name="phone" value="{{old('phone')}}"> 
        @error('phone')
        <span class='error'>{{$message}}</span>
        @enderror
        <br></br>
        <label for="dob">Date of birth</label>
        <input type="date" id="dob"name="dob" value="{{old('dob')}}"><br></br>
        <label for="image">Image</label>
        <input type="file" id="image"name="image" value="{{old('image')}}"><br></br>
        <input type="submit"value="Save ">
</form>

</body>
</html>