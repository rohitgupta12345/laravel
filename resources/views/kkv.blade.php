
<html>
    <head>
        <title>Employee Details</title>
    </head> 
    <body>
         @foreach($employe as $employes)
                                
         <form action="{{route('emp_update_details',['id'=>$employes->id])}}" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="id" value="<?php echo $employes->id; ?>">
            <table>
                <tr>
                    
                    <td>Name:</td>
                    <td><input type="text" name="name" value="{{$employes->name}}"></td>
                </tr>
                <tr>
                    <td>Email::</td>
                    <td><input type="email" name="email" value="{{$employes->email}}"></td>
                </tr>
                  <tr>
                    <td>Address:</td>
                    <td><input type="text" name="password" value="{{$employes->password}}"></td>
                </tr>
                <tr>
                        <td>Key Skills:</td>
                       <td>C:<input type="checkbox" name="skills" value="{{$employes->skills}}"></td>
                       <td>Jquery:<input type="checkbox" name="skills" value="{{$employes->skills}}"></td>
                       <td>Ajax:<input type="checkbox" name="skills" value="{{$employes->skills}}"></td>
                       <td>Javascript:<input type="checkbox" name="skills" value="{{$employes->skills}}"></td>
                       <td>Php:<input type="checkbox" name="skills" value="{{$employes->skills}}"></td>
                       <td>Mysql:<input type="checkbox" name="skills" value="{{$employes->skills}}"></td>
                </tr>
                 <tr>
                    <td>Gender:</td>
                    <td>Male:<input type="radio" name="gender" value="male" checked="checked"></td>
                   <td> Female:<input type="radio" name="gender" value="female"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="update">
                    </td>
                    <td colspan="2">
                    
                    </td>
                </tr>
                
                 @endforeach
            </table>
            
            
        </form>
    </body>
    
</html>