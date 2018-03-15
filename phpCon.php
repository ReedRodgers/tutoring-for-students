<?php
$servername = "MSCI_444@ec2-35-182-240-106.ca-central-1.compute.amazonaws.com";
$un = "bot";
$p = "imadumbbot";

$con = new mysqli($severname, $un, $p);

if(!$con){
	echo "Connection Failed";
	die("connection Failed:" . mysqli_connect_error());
}

$sql = "Select Last_name, First_name FROM Student_test Where First_name = "Jason";
$result = $conn -> query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "test";
        echo "Name: " . $row["First_name"] . " " .  $row["Last_name"];
    }
} else {
    echo "0 results";
}
$conn->close();

?>
