<?php 
	include('header.php');

	$id = $_GET['id'];

	$file = fopen('../models/studentlist.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode('|', $user);
		if($userArray[0] == $id){
			break;
		}
	}
?>

<html>
<head>
	<title>Edit Student</title>
</head>
<body>

	<a href="Student_list.php"> Back </a> |
	<a href="../controller/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../controller/studenteditcheck.php">
		<input type="hidden" name="id" value="<?=$id?>"/>
		
		<fieldset>
			<legend>Add new Student</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?=$userArray[1]?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?=$userArray[2]?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?=$userArray[3]?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>