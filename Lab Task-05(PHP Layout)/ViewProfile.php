<html>
    <head>
        <title>X-Company View Profile Dashboard</title>
    </head>
    <body>
        <table  border="2" align="center"  width="650px"  style="border-collapse: collapse; margin-top: 20px">
        
        <tr>
            <td><td colspan="2"><img src="C:/xampp/htdocs/companyX/X-company.png" alt="xCompany Logo" style="width: 80px" /><a href="PublicHome.php" style="width: 100px" style="margin: 10px">Home</a> | <a href="Login.php">Login</a> | <a href="Registration.php">Registration</a></td>
        </tr>

        <tr>
            <td style="padding-bottom: 100px">
            <h4 style="margin-top: 15px; margin-left: 15px; margin-bottom: 10px;">Account</h4>
            <hr style="margin: 10px;">
                <ul style="margin-left: 20px; margin-top: 20px;">
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
                    <legend>PROFILE</legend>
                        <form action="" method="post">
                            <table align="center">

                                <tr>
                                    <td>Name</td>
                                    <td> : Bob</td>
                                    <td rowspan="5"><img src="C:/xampp/htdocs/companyX/profilepicture.jpg" alt="Profile Picture" width="100px"><a href="ChangeProfilePicture.php"><br>Change</a></td>
                                </tr>
                                
                                <tr>
                                    <td>Gender </td>
                                    <td> : Male</td>
                                </tr>

                                <tr>
                                    <td>Date of Birth</td>
                                    <td> : 19/09/1998</td>
                                </tr>

                                <tr>
                                    <td><a href="ViewProfile.php">Edit Profile</a></td>
                                </tr>

                            </table>
                        </form>
                </fieldset>
            </td>
        </tr>

        <tr align="center">
            <td colspan="2">
                <footer style="margin-top: 10px;">Copyright &copy; 2017</footer>
            </td>
        </tr>
        
        </table>
    </body>
</html>

<?php

    session_start();

 ?>   