<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		
	
		$email = $_REQUEST['email'];

		

		if($email != null){
			
			$file = fopen('../models/user.txt', 'r');
			

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				//print_r($user) ;
				
				if($user[3] ==$email){
					
					print_r($user[2]);
					//echo "hello";
				}
			
		}
		
	
	}
	else echo "null submission";
}
?>