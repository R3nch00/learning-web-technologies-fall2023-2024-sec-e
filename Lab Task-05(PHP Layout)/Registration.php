<html>
    <head>
        <title>X-Company Registration Dahboard</title>
    </head>
    <body>
        <table border="1" align="center" width="600px" style="border-collapse: collapse; margin-top:20px ;">
            <tr>
                <td><img src="C:/xampp/htdocs/companyX/X-company.png" alt="xCompany Logo" style="width: 80px" /><a href="home.php" style="width: 100px" style="margin: 40px">Home</a> | <a href="login.php">Login</a> | <a href="register.php">Registration</a></td>
            </tr>

            <tr>
                <td style="padding: 80px"><form method="post" action="" enctype="" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
                <fieldset>
                    <legend>REGISTRATION</legend>
                    <table>
                        <tr>
                            <td>Name </td>
                            <td>:</td>
                            <td><input type="text" name="name" value=""></td>
                        </tr>
        
                        <tr>
                            <td>Email </td>
                            <td>:</td>
                            <td><input type="email" name="email" value=""></td>
                        </tr>
                        <tr>
                            <td>User Name </td>
                            <td>:</td>
                            <td><input type="text" name="username" value=""></td>
                        </tr>
                        <tr>
                            <td>Password </td>
                            <td>:</td>
                            <td><input type="password" name="password" value=""></td>
                        </tr>
                        <tr>
                            <td>Confirm Password </td>
                            <td>:</td>
                            <td><input type="password" name="password"></td>
                        </tr>
                    </table>

        </table>
    </body>
</html>