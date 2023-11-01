<html>
<head>
	<title>View Users</title>
</head>

<body>
	<table>
         <tr>
			 <td colspan="4" align="center">Users</td>
		 </tr>
		 <tr>
			 <td>ID</td>
			 <td>NAME</td>
			 <td>USER TYPE</td>
			
		</tr>

		<?php foreach($result as $row): ?>

		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['user'] ?></td>
			</tr>
			<?php endforeach; ?>
			<tr>
				<td colspan="4" align="right"><a href="adminHome.php">Go Home</a></td>
			</tr>

	</table>
	
</body>
</html>



<?php

session_start();

require_once "../model/databaseFunction.php";
if(!isset($_SESSION['flag'])){
	header('location: ../view/login.html');
}
else{
	$result=showall();
}


?>