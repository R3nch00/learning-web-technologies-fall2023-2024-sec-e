<html>

<head>
  <title>Login Form</title>
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
</head>

<body>
  <form method="post" action="../controllers/loginCheck.php">
    <fieldset>
      <legend><b>LOGIN</b></legend>
     
          User ID<br/>
          <input type="text" name="userid" value="" ><br/>
       
          Password<br/>
          <input type="password" name="password" value="" ><br/>
  
          <hr/>
          <input type="submit" name="btn" value="Login"></td>
          <a href="register.php">Register</a></td>
      
    </fieldset>
  </form>
</body>

</html>


<?php

session_start();

if(isset($_SESSION['message'])){
	if($_SESSION['message'] = "fail"){
		echo "User not exists";
	
	}

	unset($_SESSION['message']);
}

?>
