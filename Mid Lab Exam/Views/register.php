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
            <table>
                <tr>
                    <td>ID </td>
                    <td><input type="text" name="userid" value=""></td>
                </tr>

                <tr>
                    <td>Password </td>
                    <td><input type="password" name="password" value=""></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="cPassword" value=""></td>
                </tr>
                <tr>
                    <td>Name </td>
                    <td><input type="text" name="name" value=""></td>
                </tr>
                <tr>
                  <td>
                    <label for="usertype">User Type</label>
                    <hr>
                    <input type="radio" name="" value="" />User
                    <input type="radio" name="" value= />Admin
                  </td>
                </tr>
            </table>
            <hr>
            
            <input type="submit" name="btn" id="Submit" value="Sign Up">
            <a href="login.php">Sign In</a>
        </fieldset>
    </form>
    </body>
</html>
