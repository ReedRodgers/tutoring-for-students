<?php
	session_start();
	$servername = "ip-172-31-6-39.ca-central-1.compute.internal";
	$un = "bot";
	$p = "imadumbbot";
	$dbname = "MSCI_444";
	$con = new mysqli($servername, $un, $p, $dbname) or die("Error: " . mysqli_error($link));
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$sql = "INSERT into Schedule(TID, `Start Time`, `End Time`)".
		"VALUES('" . $_SESSION['id'] . "', '" . $_GET['StartTime'] . "', '" . $_GET['EndTime'] . "')";
	mysqli_query($con, $sql);
//	header("Location: 
?>
