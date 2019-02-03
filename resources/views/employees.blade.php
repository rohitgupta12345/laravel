<html>
<head>
<title>Student Management | Add</title>
</head>
<body>

<table>
    <tr>
      <th>S.No</th>  
     <th>id</th>
    <th>Employees</th>
    <th>Email</th>
    <th>Address</th>
    <th>Gender</th>
    
    <th>Edit</th>
    <th>Delete</th>
    
    
    
    
    </tr>
    <?php $count=1;?>
    
     @foreach($query as $querys)
    <tr>
         <td>{{$count++}}</td>
         <td>{{$querys->id}}</td>
         <td>{{$querys->name}}</td>
         <td>{{$querys->email}}</td>
         <td>{{$querys->password}}</td>
         <td>{{$querys->gender}}</td>
         <td><a href="{{route('edit-form',['id'=>$querys->id])}}">Edit</a></td>
         <td> <a href="{{route('delete-form',['id'=>$querys->id])}}">Delete</a></td>
         
     
        
    </tr>
    
       @endforeach
        

</table>
</form>
</body>
</html>