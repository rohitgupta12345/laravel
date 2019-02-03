
<html>
    <head>
        <title>Employee Details</title>
    </head> 
    <body>
        <table>
            <tr>
                <th>Email</th>
                 <th>Password</th>
                 <th>Edit</th>
                 <th>Delete</th>
            </tr>
         @foreach($query as $querys)
                                
         <tr>
             <td>
                 {{$querys->email}}</td>
             <td>{{$querys->password}}</td>
             <td><a href="{{route('edit_cric_form',['id'=>$querys->id])}}">Edit</a></td>
             
         <td> <a href="{{route('edit-form',['id'=>$querys->id])}}">Delete</a></td>
         
         </tr>
                 @endforeach
            </table>
            
            
        </form>
    </body>
    
</html>