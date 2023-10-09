<?php 

    if(isset($_POST['email'])){
        $email = $_POST['email'];
        echo $email;
       
    }
?>

<html>
    <head>
    </head>
    <body>
        
        <form action="" method="post" enctype="">
           Email: <br> 
             <input type="text" name="email" value="<?php if(isset($email)){echo $email;}?>" /> <input type="button" name="hint" value="i" /> <br>

            <input type="submit" name="Submit" value="Submit" /> 
                          
         <hr> 
        </form>
    </body>
</html>
