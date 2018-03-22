<?php
	$role="Student";
	echo $_GET["firstName"];
	$name=$_GET["firstName"] . " " . $_GET["lastName"];
	echo "<p>".$name."</p>";
	if(isset($_GET["teacher"])){
		$role="Teacher";
	}
	$sql="Select count(*) from " . $role . " where " . $role . ".`Student Name` = " . $name;
	$result=mysqli_query($con,$sql);
	$count=mysqli_fetch_field($result);
	if($count>0){
echo "<p>result > 0 </p>";
		$_SESSION["failed"]=0;
		$_SESSION['name']=$name;
		$_SESSION['role']=$role;
	}else{
echo "<p> no result :( </p>";
		$_SESSION['failed']=1;
	}
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
