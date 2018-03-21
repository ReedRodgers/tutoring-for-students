<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "ip-172-31-6-39.ca-central-1.compute.internal";
$un = "bot";
$p = "imadumbbot";
$dbname = "MSCI_444";

echo "test";

$con = new mysqli($servername, $un, $p, $dbname) or die("Error: " . mysqli_error($link));

$sql = "Select * from Student";
echo "query";
$result = $con -> query($sql);

echo "before if";

if ($result -> num_rows > 0) {
    // output data of each row
	echo "if";
    while($row = mysqli_fetch_array($result)){
	echo "test";
        echo "Name: " . $row["Student Name"] . " " .  $row["Balance"];
    }
} else {
    echo "0 results";
}

$con->close();

?>
