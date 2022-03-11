<html>
<head>
	<title>Registration</title>
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

	<form  method="POST" action="../controller/regbookcheck.php">
		
		<fieldset align="center"  style="width:420px"  >
			
			<legend>BOOK Registration</legend>
		
		<table>
			<tr><td></br></td></tr>
			
			<tr>
				<td>Book_Name</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			
			<tr>
				<td>Writer Name</td>

				<td><input type="text" name="writer" value="">
				</td>

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