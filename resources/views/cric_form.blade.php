<html>
    <body>
        <form action="{{route('cric_get_value')}}" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>" >
            Email:<input type="email" name="email">
            Password:<input type="password" name="password">
            <input type="submit" value="submit">
            
            
            
            
            
        </form>
        
        
        
        
        
        
    </body>
    
    
    
    
    
    
</html>