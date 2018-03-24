<?php
	session_start();
	$servername = "ip-172-31-6-39.ca-central-1.compute.internal";
	$un = "bot";
	$p = "imadumbbot";
	$dbname = "MSCI_444";
	$con = new mysqli($servername, $un, $p, $dbname) or die("Error: " . mysqli_error($link));
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	$sql = "SELECT `Subject Name`,`Cost`,`Start Time`, `Location`.`Address`, `Location`.`Description` \n" . "FROM `Meeting`, `Teacher`, `Location`\n" . "WHERE `Meeting`.`TID` = `Teacher`.`TID` And `Teacher`.`Teacher Name` = '" . $_SESSION["name"]. "' AND `Location`.`Location ID`=`Meeting`.`Location ID`";
	$result=mysqli_query($con, $sql);
	mysqli_close($con);
	
?>
<html> <body> <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script> <style> .demo-list-item {
  width: 300px;
}
</style> <ul class="demo-list-item mdl-list">
  <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
<?php


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Subject: " . $row["Subject Name"]." - Cost: " . $row["Cost"]." - Time: " . $row["Start Time"] . " - Address: " . $row["Address"]. " " . $row["Description"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
    </span>
  </li>
  <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
    </span>
  </li>
  <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
    </span>
  </html>
