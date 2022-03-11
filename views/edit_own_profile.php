<?php 
	include('header.php');
	

	$id =  $_SESSION['current_user']['0'];

	$file = fopen('../models/user.txt', 'r');

	

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
	<title>Profile</title>
</head>
<body>
<right>
	<a href="userlist.php"> Back </a> |
	<a href="../controller/logout.php"> logout </a>
</right>
	<br><br>

	<form method="POST" action="../controller/edit_own_profile_check.php" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?=$id?>"/>
		<center>
		<fieldset style="width:300px">
			<legend>Profile</legend>
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

				<td>
						Image: <input type="file" name="myfile">
				</td>

			</tr>


			<tr>
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>
				<td><input type="submit" name="back" value="Back"></td>
			</tr>



		</table>
		</fieldset>
	</center>
	</form>
</body>
</html>