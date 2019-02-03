<html>
    <head>
        <title>Employee Details</title>
    </head> 
    <body>
        <form action="{{route('credential_details')}}" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <table>
               
                <tr>
                    <td>Email::</td>
                    <td><input type="email" name="email"></td>
                </tr>
                  <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <input type="submit" value="submit">
                    </td>
                    
                </tr>
                
                
            </table>
            
            
        </form>
    </body>
    
</html>
