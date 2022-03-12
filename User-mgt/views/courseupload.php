<!-- math course upload -->
<?php 
	session_start();
	
	if(isset($_REQUEST['math'])){
		$src = $_FILES['mathcourse']['tmp_name'];
		$des = "mathcourse/".$_FILES['mathcourse']['name'];

		if(move_uploaded_file($src, $des)){
			header("location:courses.php?true");
		}

	}
	else header('location: ../views/Courses.php');

?>
<!-- Ict course upload -->
<?php 
	session_start();
	
	if(isset($_REQUEST['ict'])){


		$src = $_FILES['ictcourse']['tmp_name'];
		$des = "ictcourse/".$_FILES['ictcourse']['name'];

		if(move_uploaded_file($src, $des)){
			header("location:courses.php?true");
		}
	}
	else header('location: ../views/courses.php');

?>
<!-- english course upload -->
<?php 
	session_start();
	
	if(isset($_REQUEST['english'])){
	

		$src = $_FILES['englishcourse']['tmp_name'];
		$des = "englishcourse/".$_FILES['englishcourse']['name'];

		if(move_uploaded_file($src, $des)){
			header("location:courses.php?true");
		}
	}
	else header('location: ../views/courses.php');

?>