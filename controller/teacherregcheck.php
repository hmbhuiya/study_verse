<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		$id = rand();
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		$dob = $_REQUEST['dob'];

		$gender= $_REQUEST['gender'];
		$degree= $_REQUEST['education'];
		$bloodgroup= $_REQUEST['bg1'];


		

		if($username != null && $password != null && $email != null && $dob != null && $gender != null&& $degree != null && $bloodgroup != null ){
		

			$user = $id."|".$username."|".$password."|".$email."|".$dob."|".$gender."|".$degree."|".$bloodgroup."\r\n";
			$file = fopen('../models/teacherlist.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../views/teacher_list.php');
			
		}else{
			echo "null submission";
		}
	}
?>