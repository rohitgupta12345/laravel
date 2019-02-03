<html>
    <head>
        <title>Employee Details</title>
    </head> 
    <body>
        <form action="{{route('emp_details')}}" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email::</td>
                    <td><input type="email" name="email"></td>
                </tr>
                  <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                        <td>Key Skills:</td>
                       <td>C:<input type="checkbox" value="C" name="skills[]"></td>
                       <td>Jquery:<input type="checkbox" value="jquery" name="skills[]"></td>
                       <td>Ajax:<input type="checkbox" value="ajax" name="skills[]"></td>
                       <td>Javascript:<input type="checkbox" value="js" name="skills[]"></td>
                       <td>Php:<input type="checkbox" name="skills" value="php[]"></td>
                       <td>Mysql:<input type="checkbox" name="skills[]"></td>
                </tr>
                 <tr>
                    <td>Gender:</td>
                    <td>Male:<input type="radio" name="gender" value="male" checked="checked"></td>
                   <td> Female:<input type="radio" name="gender" value="female"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="submit">
                    </td>
                    <td colspan="2"> <a href="{{route('reset_link')}}">LogIn</a> </td>
                </tr>
                
                
            </table>
            
            
        </form>
    </body>
    
</html>
