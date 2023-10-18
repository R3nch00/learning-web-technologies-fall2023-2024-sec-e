<html>
  <head>
    <title>X-Company forgot password Dashboard</title>
  </head>
  <body>
    <table border="2" align="center" width="650px" style="border-collapse: collapse; margin-top: 20px">
      <tr>
        <td><img src="C:/xampp/htdocs/companyX/X-company.png" alt="xCompany Logo" style="width: 80px" /><a href="PublicHome.php" style="width: 100px" style="margin: 10px">Home</a> | <a href="Login.php">Login</a> | <a href="Registration.php">Registration</a></td>
      </tr>

      <tr>
        <td style="padding: 80px"><form method="post" action="" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
   
    <fieldset>
      <legend><b>FORGOT PASSWORD</b></legend>
      <table>
        <tr>
          <td>Enter Email </td>
          <td>:</td>
          <td><input type="text" name="email" value="" required></td>
        </tr>
        <tr>
          <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
      </table>
    </fieldset>
  </form></td>
      </tr>

      <tr align="center">
        <td>
          <footer style="margin: 10px">Copyright &copy; 2017</footer>
        </td>
      </tr>

    </table>

  </body>
</html>

<?php

    session_start();
   
?>