

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
	$sql = "SELECT `Location ID` as id, Description as desc, Address as addrFROM Location";

	//echo "<select>";
	$result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_object($result)){
	//	echo "<p>" . $row -> TID . "~" . $row -> start . $row -> start . "-" . $row -> end ."</p>";
		echo "<option value = '" . $row -> id . "'>" . $row -> desc . ", " . $row -> "</option>";

	}
	//echo "</select>";
?>


