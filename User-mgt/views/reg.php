<html>
<head>
	<title>Signup</title>
</head>
<body>
	<form method="POST" action="../controllers/regCheck.php" enctype="multipart/form-data">
		<table>
			<tr>

				<td>Enter Your Full Name:</td>
				<td><input type="text" name="fullname" value=""></td>
			</tr>
			<tr>

				<td>Username:</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" value=""></td>
			</tr>
			
			<tr>
				<td>Choose Your Department:</td>
				<td>
					<select name="dept">
						<option value="Math">Math</option>
						<option value="English">English</option>
						<option value="ICT">ICT</option>
					</select> 
				</td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="address" value=""></td>
			</tr>
			<tr>
				<td>Choose Your Category:</td>
				<td>
					<select name="cat">
						<option value="School">School</option>
						<option value="College">College</option>
						<option value="University">University</option>
					</select> 
				</td>
			</tr>
			<tr>
						<td>Upload Profile Image: </td>
						<td>
						<input type="file" name="userpic" value="">
						</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>