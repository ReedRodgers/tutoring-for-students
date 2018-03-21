<?php 
	echo "<p>hmm</p>";
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	session_start();
	$servername = "ip-172-31-6-39.ca-central-1.compute.internal";
	$un = "bot";
	$p = "imadumbbot";
	$dbname = "MSCI_444";
	$con = new mysqli($servername, $un, $p, $dbname) or die("Error: " . mysqli_error($link));
?>
<html>
<body>


	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<form id="login" action="redirect.php">

<?php 
	if($_SESSION['failed']==1){
		echo "<p>Your login information did not match out records.</p><p> Please check spelling and try again</p>";
		$_SESSION['failed']=0;
	}
?>

<ul class="demo-list-control mdl-list">
  <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar">person</i>
      Teacher
    </span>
    <span class="mdl-list__item-secondary-action">
      <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-1">
        <input type="radio" id="list-option-1" class="mdl-radio__button" name="teacher" value="1" unchecked />
      </label>
    </span>
  </li>
  <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar">person</i>
      Student
    </span>
    <span class="mdl-list__item-secondary-action">
      <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-2">
        <input type="radio" id="list-option-2" class="mdl-radio__button" name="student" value="1" unchecked />
      </label>
    </span>
  </li>
  
</ul>


	<ul class="mdl-list">
		<li class="mdl-list__item">
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="firstName">
    <label class="mdl-textfield__label" for="firstName">First Name</label>
  </div>
</li>
<li class="mdl-list__item">
 <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="lastName">
    <label class="mdl-textfield__label" for="lastName">Last Name</label>
  </div>
</li>
</ul>

<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="login-button">
  Login
</button>
<?php
	$role="Student";
	$name=$_GET['firstName'] . " " . $_GET['lastName'];
	if(isset($_GET['teacher']){
		$role="Teacher";
	}
	$sql="Select count(*) from " . $role . " where " . $role . ".name = " . $name;
	$result=$con -> query($sql);
	if(mysqli_fetch_field($result) > 0){
		$_SESSION['failed']=0;
		$_SESSION['name']=$name
		$_SESSION['role']=$role
	}else{
		$_SESSION['failed']=1;
	}
?>
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
#login-button {
	display: flex;
	justify-content: center;
	position: relative;
	align-items: center;
	margin: 0 auto;
}
</style>




</form>


</body>
</html>
";

