<?php

session_start();

if(!isset($_SESSION['flag'])){
	header('location: ../view/login.html');
}

?>

<html>
    <head>
        <title>User Home</title>
    </head>

    <body>

        <h1><center>Welcome Anne!</center></h1>

        <center><a href="profile.php">Profile</a></center>
        <center><a href="changepassword.php">Change Password</a></center>
        <center><a href="../controllers/logout.php">Logout</a></center>
        
    </body>
</html>
