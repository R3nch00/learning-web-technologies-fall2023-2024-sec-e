<html>
<head>
	
	<title>Profile</title>

</head>
<body>
	<table>
		<tr>
			<td colspan="2" align="center">Profile</td>
		</tr>
		<tr>
			<td>ID</td>
			<td><?php echo $_SESSION['id'] ?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo $_SESSION['name'] ?></td>
		</tr>
		<tr>
			<td>User Type</td>
			<td><?php echo $_SESSION['user'] ?></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><a href="adminHome.php">Go Home</a></td>
		</tr>
	</table>
	
</body>
</html>


<?php 

session_start();
require_once "../model/databaseFunction.php";


if(!isset($_SESSION['flag'])){
	header('location: ../view/login.php');
}


?>