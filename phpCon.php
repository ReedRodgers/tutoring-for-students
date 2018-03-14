<?php
$servername = "MSCI_444@ec2-35-182-240-106.ca-central-1.compute.amazonaws.com";
$un = "bot";
$p = "imadumbbot";
echo "<body> <p> step 1 </p>";
$con = new mysqli($severname, $un, $p);

if(!$con){
	echo "<p> Connection Failed </p>";
	die("connection Failed:" . mysqli_connect_error());
}
echo "<p>Connection SUccessful</p>";
echo "</body>";
?>
