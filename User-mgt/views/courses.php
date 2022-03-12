<html>
<head>
	<title>Courses</title>
</head>
<body>

	<div align="center">
		<a href="../controllers/logout.php"> logout </a>
	</div>

	<form method="POST" action="courseupload.php" enctype="multipart/form-data">
		<center>
					<fieldset align="center" style="width:300px" >
		<legend>Math Course</legend>
		<table>
		<tr>
		<td>
			<b>Add course</b>
				<input type="file" name="mathcourse"value="">
				<input type="submit" name="math" value="Upload">
		</td>
		<td><a href="mathcourse/">
			Show Math List
		</a></td>
	    </tr>
</table>
	    </fieldset>
		</center>
	</form>
	<form method="POST" action="courseupload.php" enctype="multipart/form-data" >
		<center>
					<fieldset align="center" style="width:300px" >
		<legend>Ict Course</legend>
		<table>
		<tr>
		<td>
			<b>Add course</b>
				<input type="file" name="ictcourse"value="">
				<input type="submit" name="ict" value="Upload">
		</td>
		<td><a href="">
			Show Ict List
		</a></td>
	    </tr>
</table>
	    </fieldset>
		</center>
	</form>
		<form method="POST" action="courseupload.php" enctype="multipart/form-data">
		<center>
					<fieldset align="center" style="width:300px" >
		<legend>English Course</legend>
		<table>
		<tr>
		<td>
			<b>Add course</b>
				<input type="file" name="englishcourse"value="">
				<input type="submit" name="english" value="Upload">
		</td>
		<td><a href="englishlist.php">
			Show English List
		</a></td>
	    </tr>
</table>
	    </fieldset>
		</center>
	</form>

</body>
</html>