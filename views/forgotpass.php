
<html>
<head>
	<title>forgot pass</title>
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
			<tr>
				<td> 
					<a href="phome.php"> Back </a> 
	               
				</td>

				<td>
					<a href="../controller/logout.php"> logout </a>
			    </td>
			</tr>
		
		</table>	

</fieldset>

</center>

<br><br>

<center>

	<form  method="POST" action="../controller/forgotpasscheck.php">
		
		<fieldset align="center"  style="width:420px"  >
			
			<legend>Forgot password</legend>
		
		<table>
			<tr><td></br></td></tr>
			
			<tr>
				<td>Email</td>
				<td><input type="Email" name="email" value=""></td>
			</tr>
			
			<tr>
			
			<td></td>

			<td> <center><input type="submit" name="submit" value="Submit"> </center></td>
			
			</tr>

		</table>

		</fieldset>

		</center>
	</form>

</body>

</html>