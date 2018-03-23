<?php
	session_start();
	$servername = "ip-172-31-6-39.ca-central-1.compute.internal";
	$un = "bot";
	$p = "imadumbbot";
	$dbname = "MSCI_444";
	$con = new mysqli($servername, $un, $p, $dbname) or die("Error: " . mysqli_error($link));
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	$role="Student";
	$name=$_GET["firstName"] . " " . $_GET["lastName"];
	$role=$_GET["student-teacher"];
	$sql="Select count(*) as count from " . $role . " where " . $role . ".`Student Name` = '" . $name. "'";
	$result=mysqli_query($con, $sql);
	$count=mysqli_fetch_object($result)->count;
	mysqli_close($con);
	if($count>0){
		$_SESSION["failed"]=0;
		$_SESSION["name"]=$name;
		$_SESSION["role"]=$role;
	}else{
		$_SESSION["failed"]=1;
		header('Location: http://35.182.240.106/tutoring-for-students/phpCode/login.php');
		die();
	}
	if($role=="Student"){
		header('Location: http://35.182.240.106/tutoring-for-students/phpCode/student_homepage.php');
		die();
	}else{
		header('Location: http://35.182.240.106/tutoring-for-students/phpCode/teacher_homepage.php');
		die();
	}
?>
