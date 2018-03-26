<?php session_start(); ?>
<html>
<body>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<style>
.demo-layout-transparent {
  background: url('tutor_student1.png') center / cover;
}
.demo-layout-transparent .mdl-layout__header,
.demo-layout-transparent .mdl-layout__drawer-button,
.demo-layout-transparent .mdl-layout__header .mdl-navigation__link {
  /* This background is dark, so we set text to white. Use 87% black instead if
     your background is light. */
  color: black;
}

</style>
<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <a href = "http://35.182.240.106/tutoring-for-students/login.php">Logout</a>
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"><?php echo $_SESSION["name"]; ?> Home</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="http://35.182.240.106/tutoring-for-students/booking.php">Booking</a>
        <a class="mdl-navigation__link" href="">Resources</a>
        <a class="mdl-navigation__link" href="http://35.182.240.106/tutoring-for-students/bill.php">Account</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Menu</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Booking</a>
      <a class="mdl-navigation__link" href="">Resources</a>
      <a class="mdl-navigation__link" href="">Account</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" id="upcomingSessions">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Subject</th>
      <th>Date</th>
      <th>Time</th>
      <th>Cost</th>
    </tr>
  </thead>
  <tbody>
<?php 
	$servername = "ip-172-31-6-39.ca-central-1.compute.internal";
	$un = "bot";
	$p = "imadumbbot";
	$dbname = "MSCI_444";
	$con = new mysqli($servername, $un, $p, $dbname) or die("Error: " . mysqli_error($link));
	$sql = "SELECT Subject as sub, 'Start Time' as dt, Cost as c FROM Meetings WHERE SID = " . $_SESSION['name'];
	$result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_object){
		$dt = explode(" ", $row['dt']);
		echo "<tr>";
		echo "<td class = 'mdl-data-table__cell--non-numeric'>" . $row -> sub . "</td>";
		echo "<td>" . $dt[0] . "</td>";
		echo "<td>" . $dt[1] . "</td>";
		echo "<td>" . $row['c'] . "</td>";
		echo "</tr>";
?>	
  </tbody>
</table>
    </main>
  </div>

</body>
</html>
<style>
#upcomingSessions {
  position: absolute;
  top: 30%;
  left: 35%;
}
</style>
