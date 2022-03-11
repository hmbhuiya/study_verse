

<html>
<head>
	<title>Create User</title>
</head>
<body>  
<center>
<fieldset  style="width:600px" >

		<table >
			<tr>
				<td>
					Welcome to STUDY.COM !!! 
				</td>
			</tr>
		</table>
		<table align="right">

			<tr >
				<td > 
					<a href="phome.php"> Back </a> |
	                 <a href="../controller/logout.php"> Logout </a>
				</td>
			</tr>
		
</table>	
</fieldset></center>

<br><br>
<center>
	<form  method="POST" action="../controller/pregchck.php">
		<fieldset align="center"  style="width:420px"  >
			<legend>Create User</legend>
		<table>
			<tr> <td></br></td></tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value=""></td>
			</tr>

			
	        
	        <tr>
	        	<td>Date Of Birth</td>
		       <td> <input type="date" name="dob" value=""></td>
		
		
	        </tr>

	        <tr>

	        	<td>Gender</td>

       		<td>
			<input type="radio" name="gender"   value="male">Male
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender"  value="other">Other</td>
		
	</tr>
	<tr>

		<td>Degree</td>

		<td>    <input type="checkbox" name="education" value="">SSC
				<input type="checkbox" name="education" value="">HSC
				<input type="checkbox" name="education" value="">BSc
				<input type="checkbox" name="education" value="">MSc
				<input type="checkbox" name="education" value="">PhD
		</td>
	</tr>

	 <tr>

	 	

		<td> Blood Group 
		   <select name ="bg1" >
		   	<option  value="A+">A+</option>
		   	<option  value="O-">O-</option>
		   	<option  value="O+">O+</option>
		   	<option  value="A-">A-</option>
		   	<option  value="B+">B+</option>
		   	<option  value="B-">B-</option>
		   </select>
		</td>
	 </tr>



			
			<tr>

				<td></td>
				<td> <center><input type="submit" name="submit" value="Create"> </center></td>
			</tr>
		</table>
		</fieldset>
		</center>
	</form>
</body>
</html>