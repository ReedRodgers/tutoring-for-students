<?php
$servername = "MSCI_444@ec2-35-182-240-106.ca-central-1.compute.amazonaws.com";
$un = "bot";
$p = "imadumbbot";

$con = new mysqli($severname, $un, $p);

if($con -> connect_error){
	die("connection Failed:" . $con -> connect_error);
}
echo "Connection SUccessful";
?>