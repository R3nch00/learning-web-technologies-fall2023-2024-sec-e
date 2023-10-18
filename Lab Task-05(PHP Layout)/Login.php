<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "Invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "Null username/password";
        }
    }

?>

<html>
    <head>
        <title>X-Company Login Dashboard</title>
    </head>

    <body>
        <table border="1" align="center" style="border-collapse: collapse; margin-top: 30px;">
        
        <tr>
            <td><img src="C:/xampp/htdocs/companyX/X-company.png" alt="xCompany Logo" style="width: 80px"/><a href="PublicHome.php" style="width: 100px" style="margin: 40px">Home</a> | <a href="Login.php">Login</a> | <a href="Registration.php">Registration</a></td>
        </tr>
        
        <tr>
            <td style="padding: 80px;">
                <form method="post" action="loginCheck.php" <?php echo htmlspecialchars($_SERVER[ "PHP_SELF"]);?>>
                    <fieldset>
                        <legend>LOGIN</legend>
                        <table>

                            <tr>
                                <td>User Name </td>
                                <td>:</td>
                                <td><input type="text" name="username" value="" required></td>
                            </tr>

                            <tr>
                                <td>Password </td>
                                <td>:</td>
                                <td><input type="password" name="password" value="" required></td>
                        
                        </table>
                        <hr>

                        <table>
                            <tr><input type="checkbox">Remember Me</tr>
                            <tr><br><br></tr>
                            <tr>
                                <td>
                                    <td><input type="submit" name="btn" value="Submit"></td>
                                </td>
                                <td><a href="ChangePassword.php">Forgot Password</a></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr align="center">
            <td>
                <footer style="margin: 20px;">Copyright &copy; 2017</footer>
            </td>
        </tr>
        
        </table>
    </body>
</html>
