<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Appointments</title>
<link rel="stylesheet" href="../assets/css/background.css">
<script src="../assets/js/script.js"></script>
</head>
<body>
<div class="sidebar">
  <h2>Hospital System</h2>
  <a href="home.php">Home</a>
  <a href="billing.php">Billing</a>
  <a href="appointments.php">Appointments</a>
  <a href="lab.php">Lab Test</a>
  <a href="export.php">Export</a>
</div>

<div class="main-content">
  <div class="appt-box">
    <h2>Schedule Appointment</h2>
    <input type="text" id="aname" placeholder="Patient Name">
    <input type="text" id="doc" placeholder="Doctor Name">
    <input type="date" id="date">
    <input type="time" id="time">
    <button onclick="scheduleAppointment()">Schedule</button>
    <p id="res"></p>
  </div>
</div>
</body>
</html>
