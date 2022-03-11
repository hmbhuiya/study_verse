<?php 
	session_start();
	
	if(isset($_REQUEST['update'])){
		
		$bookname = $_REQUEST['username'];
		$writer = $_REQUEST['writer'];
		
		$id = $_REQUEST['id'];

		if($bookname != null && $writer != null ){
			
			$file = fopen('../models/booklist.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $id){
					$line = $id."|".$bookname."|".$writer."\r\n";
					//$updatedContent .= $line;
				}
				$updatedContent .= $line;
				
			}

			$file = fopen('../models/booklist.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../views/book_list.php');

		}else{
			echo "null submission";
		}
	}
?>