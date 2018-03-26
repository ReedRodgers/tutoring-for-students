<html>
<body>
<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	session_start();
	$servername = "ip-172-31-6-39.ca-central-1.compute.internal";
	$un = "bot";
	$p = "imadumbbot";
	$dbname = "MSCI_444";
	$con = new mysqli($servername, $un, $p, $dbname) or die("Error: " . mysqli_error($link));
	$sql = "INSERT INTO Meeting(`Location ID`, `SID`, `Subject Name`, `TID`, `Start Time`, Cost) VALUES (" . $_GET['location'] . ", " . $_SESSION['id'] . " , '" . $_GET['subject'] . "', " . $_GET['teacher'] . ", '" . explode("~", $_GET['date'])[0] . "', 420.69)";
	mysqli_query($con, $sql);
	header("Location: http://35.182.240.106/tutoring-for-students/student_homepage1.php");
	die();
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<!-- Event card -->
<style>
.demo-card-event.mdl-card {
  width: 256px;
  height: 256px;
  background: #3E4EB8;
}
.demo-card-event > .mdl-card__actions {
  border-color: rgba(255, 255, 255, 0.2);
}
.demo-card-event > .mdl-card__title {
  align-items: flex-start;
}
.demo-card-event > .mdl-card__title > h4 {
  margin-top: 0;
}
.demo-card-event > .mdl-card__actions {
  display: flex;
  box-sizing:border-box;
  align-items: center;
  justify-content: center;
  margin: auto;
}
.demo-card-event > .mdl-card__actions > .mdl-button {
  display: flex;
  box-sizing:border-box;
  align-items: center;
  justify-content: center;
  margin: auto;
}
.demo-card-event > .mdl-card__actions > .material-icons {
  padding-right: 10px;
}
.demo-card-event > .mdl-card__title,
.demo-card-event > .mdl-card__actions,
.demo-card-event > .mdl-card__actions > .mdl-button {
  color: #fff;
}
</style>

<div class="demo-card-event mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h4>
<?php echo $sql . "<br>"; ?>
      Grade 11 Math<br>
      April 4, 2018<br>
      6:00-7:00pm<br>
      Waterloo Library<br>
      $25
    </h4>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">done</i>
    </a>
    <div class="mdl-layout-spacer"></div>
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">clear</i>
    </a>
  </div>
</div>





</body>
</html>
