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
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"><?php echo $_SESSION["name"]; ?></span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="http://35.182.240.106/tutoring-for-students/update_times.php"p>Update Availability</a>
        <a class="mdl-navigation__link" href="">Update Subjects</a>
        <a class="mdl-navigation__link" href="">Add Resources</a>
        <a class="mdl-navigation__link" href="http://35.182.240.106/tutoring-for-students/teacher_meetings.php">Meeting</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Menu</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Update Availability</a>
      <a class="mdl-navigation__link" href="">Update Subjects</a>
      <a class="mdl-navigation__link" href="">Add Resources</a>
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
      <th>Wage</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Grade 11 Math</td>
      <td>March 30, 2018</td>
      <td>6:00pm</td>
      <td>$25</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Grade 11 Chemistry</td>
      <td>April 4, 2018</td>
      <td>7:00pm</td>
      <td>$25</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Grade 11 French</td>
      <td>April 5, 2018</td>
      <td>5:30pm</td>
      <td>$25</td>
    </tr>
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
  left: 20%;
}
</style>
