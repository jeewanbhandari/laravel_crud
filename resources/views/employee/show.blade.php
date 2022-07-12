<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Employee</title>
    
</head>
<body>

    

    <table border="1" width="100%">
        
        
        <tr>
            <th>Name</th>
            <td>{{$employee->name}}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{$employee->address}}</td>
         </tr>
         <tr>
            <th>Email</th>
            <td>{{$employee->email}}</td>
         </tr>
         <tr>
            <th>Phone</th>
            <td>{{$employee->phone}}</td>
         </tr>
         <tr>
            <th>Date of Birth</th>
            <td>{{$employee->dob}}</td>
         </tr>
         <tr>
            <th>Image</th>
            <td>{{$employee->image}}</td>
         </tr>
        


    </table>
    
</body>
</html>