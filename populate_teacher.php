

<?php
	session_start();
	$servername = "ip-172-31-6-39.ca-central-1.compute.internal";
	$un = "bot";
	$p = "imadumbbot";
	$dbname = "MSCI_444";
	$con = new mysqli($servername, $un, $p, $dbname) or die("Error: " . mysqli_error($link));
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	$time = explode("~", $_GET['d']);
	$sql = "SELECT Teacher.`Teacher Name` as name, Teacher.TID as id FROM Schedule, Subject, `Teacher` WHERE Subject.TID = Schedule.TID and Schedule.TID = Teacher.`TID` and Subject.`Subject Name`= '" . $_GET['s'] . "' and Schedule.`Meeting ID` IS NULL and Schedule.`Start Time` = '" . $time[0] . "' and Schedule.`End Time`= '" . $time[1] . "'";

	echo "<option value = ''>SELECT</option>";
	$result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_object($result)){
	//	echo "<p>" . $row -> TID . "~" . $row -> start . $row -> start . "-" . $row -> end ."</p>";
		echo "<option value = '" . $row -> id . "'>" . $row -> name . "</option>";
	}
	//echo "</select>";
?>


