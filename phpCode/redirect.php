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
	echo "<p>".$name." ".$_GET["student-teacher"]."</p>";
	$role=$_GET["student-teacher"];
	$sql="Select count(*) from " . $role . " where " . $role . ".`Student Name` = '" . $name. "'";
echo $sql;
	$result=mysqli_query($con, $sql);
	if(mysqli_num_rows($result)>0){
echo "<p>result > 0 </p>";
		$_SESSION["failed"]=0;
		$_SESSION["name"]=$name;
		$_SESSION["role"]=$role;
	}else{
echo "<p> no result :( </p>";
		$_SESSION["failed"]=1;
		echo "<form action='http://35.182.240.106/tutoring-for-students/phpCode/login.php'>";
			echo "<input type='submit'>OK</input>";
		echo "</form>";
	}
	if($role=="Student"){
		echo "<p>".$_SESSION["name"]."</p>".
		"<form action='http://35.182.240.106/tutoring-for-students/phpCode/student_homepage.php'>".
			"<input type='submit'>OK</input>".
		"</form>";
	}else{
		echo "<p>".$name."</p>";
		echo "<form action='http://35.182.240.106/tutoring-for-students/phpCode/teacher_homepage.php'>".
			"<input type='submit'>OK</input>".
		"</form>";
	}
	mysqli_close($con);
?>
