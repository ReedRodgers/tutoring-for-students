<?php
$servername = "MSCI_444@ec2-35-182-240-106.ca-central-1.compute.amazonaws.com";
$un = "bot";
$p = "imadumbbot";
echo "<p> step 1 </p>";
$con = new mysqli($severname, $un, $p);

if(!$con){
	echo "<p> Connection Failed </p>";
	die("connection Failed:" . mysqli_connect_error());
}
echo "<p>Connection SUccessful</p>";
echo "</body>";
?>
$sql = "Select Last_name, First_name, FROM Student_test Where First_name = Jason";
$result = $conn -> query($sql);
echo $result;
