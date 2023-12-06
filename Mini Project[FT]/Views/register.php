<html>
    <head>
        <title>Registration Form</title>
    </head>
    <style>
      body {
        display: flex;
        justify-content: center;
        align-content: center;
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
            <legend>REGISTRATION</legend>
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
                    <td>Email </td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                  <td>
                    <label for="usertype">User Type<i>[User/Admin]</i></label>
                    <select name="usertype" id="type">
                      <option value="user">User</option>
                      <option value="admin">Admin</option>
                    </select>
                  </td>
                </tr>
            </table>
            <hr>
            
            <input type="submit" name="btn" id="Submit" value="Register">
            <a href="login.php">Login</a>
        </fieldset>
    </form>
    </body>
</html>
