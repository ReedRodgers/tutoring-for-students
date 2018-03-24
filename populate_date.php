<?php
	session_start();
	$servername = "ip-172-31-6-39.ca-central-1.compute.internal";
	$un = "bot";
	$p = "imadumbbot";
	$dbname = "MSCI_444";
	$con = new mysqli($servername, $un, $p, $dbname) or die("Error: " . mysqli_error($link));
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	$sql = "SELECT `Start Time` as start,`End Time` as end, TID as TID FROM Schedule, Subject
WHERE Subject.TID = Schedule.TID and Subject.`Subject Name`= '".$_GET['subject']."'";
	$result = mysqli_query($sql, $con);
	while($row = mysqli_fetch_object($result){
		echo "<option value = '".$row["TID"]."~".$row["start"]."'>".$row['start']."-".$row['end']."</option>";
	}
?>
