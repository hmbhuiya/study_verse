<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		$fullname = $_REQUEST['fullname'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$address=$_REQUEST['address'];
		$cat = $_REQUEST['cat'];
		$id= rand();

		if($fullname != null && $username != null && $password != null && $email != null && $address != null && $cat != null){
			/*$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
			$_SESSION['user'] = $user;*/

			$user = $id."|".$fullname."|".$username."|".$password."|".$email."|".$address."|".$cat."\r\n";
			$file = fopen('../models/reg.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../views/login.php');
			
		}else{
			echo "null submission";
		}
	}
?>