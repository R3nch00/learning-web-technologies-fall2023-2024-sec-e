<html>
    <head>
        <title>X-Company Edit Profile Dashboard</title>
    </head>
    <body>
        <table  border="2" align="center"  width="650px"  style="border-collapse: collapse; margin-top: 20px">

        <tr>
            <td><td colspan="2"><img src="C:/xampp/htdocs/companyX/X-company.png" alt="xCompany Logo" style="width: 80px" /><a href="PublicHome.php" style="width: 100px" style="margin-top: 40px">Home</a> | <a href="Login.php">Login</a> | <a href="Registration.php">Registration</a></td>
        </tr>

        <tr>
            <td style="padding-bottom: 100px;">
            <h4 style="margin-top: 15px; margin-left: 15px; margin-bottom: 10px;">Account</h4>
            <hr style="margin: 0 10px;">
                <ul style="margin-left: 20px; margin-top:20px;">
                    <li><a href="Dashboard.php">Dashboard</a></li>
                    <li><a href="ViewProfile.php">View Profile</a></li>
                    <li><a href="EditProfile.php">Edit Profile</a></li>
                    <li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
                    <li><a href="ChangePassword.php">Change Password</a></li>
                    <li><a href="Logout.php">Logout</a></li>
                </ul>      
            </td>

            <td style="padding-bottom: 100px;">
                <fieldset>
                    <legend>EDIT PROFILE</legend>
                        <form action="" method="post">
                            <table align="center">

                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td><input type="text" name="name"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input type="email" name="email"></td>
                                </tr>

                                <tr>
                                    <td>Gender</td>
                                    <td>:</td>
                                    <td>
                                        <input type="radio"> Male 
                                        <input type="radio"> Female 
                                        <input type="radio"> Other 
                                    </td>
                                </tr>

                                <tr>
                                    <td>Date of Birth</td>
                                    <td>:</td>
                                    <td><input type="date" name="date"></td>
                                </tr>
                               
                                <tr>
                                    <td><input type="submit" name="btn" value="Submit"></td>
                                </tr>

                            </table>
                        </form>
                </fieldset>
            </td>
        </tr>

        <tr align="center">
            <td colspan="2">
                <footer style="margin: 10px;">Copyright &copy; 2017</footer>
            </td>
        </tr>
        </table>
    </body>
</html>

<?php

    session_start();

?>