<?php
	if($_SESSION['failure']==1){
		header("Location: http://35.182.240.106/tutoring-for-students/phpCode/login.php");
		die();
	}elseif($_SESSION['role']=="Student"){
		header("Location: http://35.182.240.106/tutoring-for-students/phpCode/student_homepage.php");
		die();
	}else{
		header("Location: http://35.182.240.106/tutoring-for-students/phpCode/teacher_homepage.php");
		die();
	}
?>
