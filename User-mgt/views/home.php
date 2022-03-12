<?php 
	//include('header.php');
	//include_once('header.php');
  
	require('header.php');
	//require_once('header.php');
?>

<html>
<head>	
	<title>Home Page</title>
</head>
<body>
	<h1 align="center">Welcome <?php echo $_SESSION['current_user'][1] ?></h1>
		<center>|
	<a href="updateprofile.php">  Update Profile </a> |
	<a href="../controllers/logout.php"> logout </a> |</center>
	<br>
		<form method="POST" action="">
		<center>
					<fieldset align="center" style="width:300px" >
		<legend>Dashboard</legend>
		<table>
		<tr>
		<td>
			<a href="Courses.php">Courses</a> </br>
			<a href="">Payment</a></br>
			<a href="">Enrolled Students</a></br>
			<a href="">Contact list</a></br>
			<a href="">Feedbacks</a></br>
		</td>
	    </tr>
</table>

	

</body>
</html>