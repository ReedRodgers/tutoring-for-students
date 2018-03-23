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
<script>
	function updateDates(str){
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}
		xmlhttp.onreadystatechange = function(){
			if(this.readyState = 4 && this.status = 200){
				document.getElementById("times").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "getDates.php?q="+str, true);
		xmlhttp.send();
	}
</script>
<body>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<div id="login">

	<ul class="mdl-list">
		<li class="mdl-list__item">
  <div class="mdl-textfield mdl-js-textfield">
    <select name="subject" onchange="updateDates(this.value)">
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
    <label class="mdl-textfield__label" for="subject">Subject</label>
  </div>
</li>
<li class="mdl-list__item">
 <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="date">
    <label class="mdl-textfield__label" for="date">Date</label>
  </div>
</li>
<li class="mdl-list__item">
 <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="time">
    <label class="mdl-textfield__label" for="time">Time</label>
  </div>
</li>

<li class="mdl-list__item">
 <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="location">
    <label class="mdl-textfield__label" for="location">Location</label>
  </div>
</li>

</ul>

<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="login-button">
  Book
</button>


</div>

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
