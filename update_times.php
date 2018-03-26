<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	session_start();
	$servername = "ip-172-31-6-39.ca-central-1.compute.internal";
	$un = "bot";
	$p = "imadumbbot";
	$dbname = "MSCI_444";
	$_SESSION["con"] = new mysqli($servername, $un, $p, $dbname) or die("Error: " . mysqli_error($link));
?>
<html>
<body>


<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<form action = "timeslot.php" method = "GET">
	<div class="mdl-textfield mdl-js-textfield">
		<input class="mdl-textfield__input" type="datetime-local" id="StartTime" name="StartTime">
		<label class="mdl-textfield__label" for="Start Time">Start Time</label>
	</div>
	<div>
		<input type = "datetime-local" id = "EndTime" name = "EndTime">
		<label for = "EndTime">End Time</label>
	</div>
	<div>
		<input type = "submit">Submit</input>
	</div>
</form>

<style>
.demo-list-control {
  width: 300px;
}
.demo-list-radio {
  display: inline;
}
#login {
  position: absolute;
  top: 20%;
  left: 40%;
}
#update-button {
	display: flex;
	justify-content: center;
	position: relative;
	align-items: center;
	margin: 0 auto;
}
</style>
</body>
</html>
