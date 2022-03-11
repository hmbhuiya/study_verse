<?php 
	session_start();
	
	if(isset($_REQUEST['delete'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$id = $_REQUEST['id'];

		if($username != null && $password != null && $email != null){
			
			$file = fopen('../models/user.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] != $id){
					
					$updatedContent .= $line;

				}
				//$updatedContent .= $line;
				
			}

			$file = fopen('../models/user.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../views/userlist.php');

		}else{
			echo "null submission";
		}
	}
	else 
		header('location: ../views/userlist.php');

?>