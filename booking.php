<?php 
	session_start();
	$servername = "ip-172-31-6-39.ca-central-1.compute.internal";
	$un = "bot";
	$p = "imadumbbot";
	$dbname = "MSCI_444";
	$con = new mysqli($servername, $un, $p, $dbname) or die("Error: " . mysqli_error($link));
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
?>
<html>
<head>
	<script src = "bookdd.js"></script>
	<script src = "jquery.js"></script>
</head>
<body>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"></link>

		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<form action = "booking_confirmation.php">
	<ul class="mdl-list">
		<li class="mdl-list__item">
			<div class="mdl-selectfield mdl-js-selectfield">
				<label class="mdl-label" for="subject">Subject</label>
    				<select class="mdl-selectfield__select" name="subject" id = "subject" onchange = "getDate(this.value)">
					<option value = "">SELECT</option>
<?php
	$sql = "SELECT `Subject Name` as name FROM Subject";
	echo $sql;
	$result=mysqli_query($con, $sql);
	while($row=mysqli_fetch_assoc($result)){
		$subject=$row["name"];
		echo "<option value='".$subject."'>".$subject."</option>";
	}
?>
    				</select>
    				
  			</div>
		</li>
		<li class="mdl-list__item">
 			<div class="mdl-textfield mdl-js-textfield">
 				<label class="mdl-label" for="date">Date</label>
				<select class="mdl-selectfield__select" name = "date" id = "date" onchange = "getTeacher(document.getElementById('subject').value, this.value)">
					<option value = "">SELECT</option>
				</select>
   				
  			</div>
		</li>
		<li class="mdl-list__item">
 			<div class="mdl-textfield mdl-js-textfield">
 				<label class="mdl-label" for="teacher">Teacher</label>
    				<select name = "teacher"  id="teacher">
					<option value = "">SELECT</option>
				</select>
    				
  			</div>
		</li>
		<li class="mdl-list__item">
 			<div class="mdl-textfield mdl-js-textfield">
 				<label class="mdl-label" for="location">Location</label>
    				<select id="location" name = "location">
					<option value = "">SELECT</option>
<?php
	$sql = "SELECT `Location ID` as id, Address as ad, Description as des FROM Location";
	$result = mysqli_query($con, $sql);
	while($row=mysqli_fetch_assoc($result)){
		echo "<option value='" . $row['id']."'>" . $row['des'] . ", " . $row['ad'] . "</option>";
	}
?>
				</select>
				
  			</div>
		</li>
	</ul>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="login-button" action = "submit">
  		Book
	</button>
</form>
<style>
#login {
  	position: absolute;
  	top: 20%;
  	left: 40%;
}
#login-button {
	display: flex;
	justify-content: center;
	position: relative;
	align-items: center;
	margin: 0 auto;
}
</style>
</body>
</html>
