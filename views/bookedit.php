<?php 
	include('header.php');

	$id = $_GET['id'];

	$file = fopen('../models/booklist.txt', 'r');

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
	<title>Edit Book</title>
</head>
<body>

	<a href="book_list.php"> Back </a> |
	<a href="../controller/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../controller/bookeditcheck.php">
		<input type="hidden" name="id" value="<?=$id?>"/>
		
		<fieldset>
			<legend>Edit Book</legend>
		<table>
			<tr>
				<td>Book Name</td>
				<td><input type="text" name="username" value="<?=$userArray[1]?>"></td>
			</tr>
			<tr>
				<td>Writer Name</td>
				<td><input type="text" name="writer" value="<?=$userArray[2]?>"></td>
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