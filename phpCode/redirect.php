<?php
	$role="Student";
	echo $_GET["firstName"];
	$name=$_GET["firstName"] . " " . $_GET["lastName"];
	echo "<p>".$name."</p>";
	$role=$_GET["student-teacher"]
	$sql="Select count(*) from " . $role . " where " . $role . ".`Student Name` = " . $name;
	$result=mysqli_query($con,$sql);
	$count=mysqli_fetch_field($result);
	if($count>0){
echo "<p>result > 0 </p>";
		$_SESSION["failed"]=0;
		$_SESSION["name"]=$name;
		$_SESSION["role"]=$role;
	}else{
echo "<p> no result :( </p>";
		$_SESSION["failed"]=1;
	}
	if($_SESSION["failure"]==1){
		echo "<p>".$_SESSION["name"]."</p>".
		"<form action='http://35.182.240.106/tutoring-for-students/phpCode/login.php'>".
			"<input type='submit'>OK</input>".
		"</form>";
	}elseif($_SESSION['role']=="Student"){
		echo "<p>".$_SESSION["name"]."</p>".
		"<form action='http://35.182.240.106/tutoring-for-students/phpCode/student_homepage.php'>".
			"<input type='submit'>OK</input>".
		"</form>";
	}else{
		header("Location: http://35.182.240.106/tutoring-for-students/phpCode/teacher_homepage.php");
		die();
	}
?>
