<?php

session_start();


if(!isset($_SESSION['loginApprove'])){
    header("Location: ../../view/login.php");
}








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>host Dashboard</title>
</head>
<body>
 <table border="1" style="width: 100%; height: 650px;"cellspacing="0" >
<tr>
<td colspan="3" align="right">
   welcome  <b><?php echo $_SESSION['afterlogin']['name']; ?></b> || <a href="../../controller/logout.php">logout</a> || <a href="profile.php">profile</a>
</td>
</tr>
<tr>
    <td style="width:20%;"> <ul type="disc">
    <li><a href="hostprofile.php">Dashboard</a><br></li>
   <li> <a href="viewApost.php">View all post</a><br></li>
    <li><a href="bookedpost.php">View booked post</a><br></li>
    <li><a href="viewhistory.php">View history</a><br></li>
    
    </li>
    </ul>
</td>

     <td colspan="2"></td>
    
</tr>
    
 </table>

    
</body>
</html>