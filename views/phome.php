<?php

require('header.php');



?>

<html>
<head>	
	<title>Home Page</title>
</head>
<body>
		<center>
<fieldset  style="width:600px" >

		<table >
			<tr>
				<td>

	 <h1>Welcome home!!! <br> <center>Manager <?php echo $_SESSION['current_user'][1] ?> </center></h1>
				
				</td>

			</tr>
		</table>
		

</fieldset>

</center>
<br></br>

<table align="center">
	<tr>
		<td>

<center>
<fieldset align="center" style="width:300px" >
	<legend>User Profile List</legend>
	
<table align="center"> 
	<tr>
		<td>
	 
	  <a href="student_list.php"> Student's Profile List </a> 
	  
		</td>
	</tr>

	<tr>
		<td>
	 
	  <a href="teacher_list.php"> Teacher's Profile List </a> 
	  
		</td>
	</tr>


</table>
	</fieldset>
</center>

</td>

<td>

<center>

<fieldset align="center" style= " height:63  ;width:300px" >
	<legend>Library </legend>
	
<table align="center">
	<tr>
		<td>
	 
	  <a href="book_list.php">Book List</a> 
	  
		</td>
	</tr>

	<tr>
		<td>
	 
	  <a href="regbook.php">Add Books </a> 
	  
		</td>
	</tr>


</table>


	</fieldset>

</center>
</td>
</tr>
</table>


<br></br>

<table align="center">
	<tr>
		<td>

<center>

<fieldset align="center" style="width:300px" >
	<legend>Add user </legend>
	
<table align="center">
	<tr>
		<td>
	 
	  <a href="studentreg.php"> Add Student </a> 
	  
		</td>
	</tr>
	<tr>
		<td>
	 
	  <a href="teacherreg.php"> Add Teacher </a> 
	  
		</td>
	</tr>

	


</table>
	</fieldset>

</center>

</td>

<br></br>

<td>

<center>

<fieldset align="center" style="width:300px" >
	<legend> View Tansictions History </legend>
	
<table align="center">
	<tr>
		<td>
	 
	  <a href="student_transiction.php">Student Transictions</a> 
	  
		</td>
	</tr>
	<tr>
		<td>
	 
	  <a href="teacher_transiction.php">Teacher Transictions</a> 
	  
		</td>
	</tr>

</table>
	</fieldset>

</center>

</td>
</tr>
</table>

<br></br>

<table align="center">
	<tr>
		<td>

<center>

<fieldset align="center" style="width:300px" >
	<legend> View Feedback </legend>
	
<table align="center">
	<tr>
		<td>
	 
	  <a href="student_feedback.php">Student's Feedback</a> 
	  
		</td>
	</tr>
	<tr>
		<td>
	 
	  <a href="teacher_feedback.php">Teacher's Feedback</a> 
	  
		</td>
	</tr>

</table>
	</fieldset>

</center>

</td>

<br></br>
<td>

<center>

<fieldset align="center" style="width:300px" >
	<legend> Set Fees  </legend>
	
<table align="center">
	<tr>
		<td>
	 
	  <a href="course_fee.php">Set Course Fee</a> 
	  
		</td>
	</tr>
	<tr>
		<td>
	 
	  <a href="teachers_fee.php">Set Teachers Fee</a> 
	  
		</td>
	</tr>

</table>
	</fieldset>

</center>

</td>
</tr>
</table>

<br></br>

<center>

<fieldset align="center" style="height:63 ; width:300px" >
	<legend> View Profile  </legend>
	
<table align="center">
	<tr>
		<td>
	 
	  <a href="edit_own_profile.php"> Profile </a> 
	  
		</td>
	</tr>
	

	<tr>
		<td>
	 
	  <a href="userlist.php"> Manager List </a> 
	  
		</td>

	</tr>
	
</table>
	</fieldset>

</center>

</body>
</html>


