<html>
    <head>
        <title>Registration Form</title>
    </head>
    <style>
      body {
        display: flex;
        justify-content: center;
        align-content: center:
      }
      table {
        width: 400px;
      }
      fieldset {
        margin-top: 200px;
        width: 400px;
      }
    </style>
    <body>
        <form method="post" action="../controllers/registerCheck.php" enctype="" > 
        <fieldset>
            <legend><b>REGISTRATION</b></legend>

                    ID<br/>
                    <input type="text" name="userid" value=""><br/>

                    Password<br/>
                    <input type="password" name="password" value=""><br/>

                    Confirm Password<br/>
                    <input type="password" name="cPassword" value=""><br/>

                    Name<br/>
                    <input type="text" name="name" value=""><br/>

                    User Type<hr/>
                    <input type="radio" name="user" value="user" />User
                    <input type="radio" name="user" value="ädmin" />Admin
                    <hr/>
           
            <input type="submit" name="btn" id="Submit" value="Sign Up">
            <a href="login.php">Sign In</a>
        </fieldset>
    </form>
    </body>
</html>



<?php

if(isset($_SESSION['message'])){
	if($_SESSION['message'] = "fail"){
		echo "User already exists";
	}
    
	unset($_SESSION['message']);
}

?>
