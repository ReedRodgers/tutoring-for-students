

<?php
	session_start();
	$servername = "ip-172-31-6-39.ca-central-1.compute.internal";
	$un = "bot";
	$p = "imadumbbot";
	$dbname = "MSCI_444";
	$con = new mysqli($servername, $un, $p, $dbname) or die("Error: " . mysqli_error($link));
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	$sql = "SELECT `Start Time` as start,`End Time` as end, FROM Schedule, Subject WHERE Subject.TID = Schedule.TID and Subject.`Subject Name`= '" .  $_GET["s"] . "'";

	//echo "<select>";
	$result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_object($result)){
	//	echo "<p>" . $row -> TID . "~" . $row -> start . $row -> start . "-" . $row -> end ."</p>";
		echo "<option value = '" . $row -> start . "~" . $row -> end . "'>" . $row -> start ." TO " . $row -> end . "</option>";

	}
	//echo "</select>";
?>


