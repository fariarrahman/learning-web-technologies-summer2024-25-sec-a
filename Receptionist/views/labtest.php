<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab Test</title>
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
  <div class="lab-box">
    <h2>Lab Test Order</h2>
    <input type="text" id="pid" placeholder="Patient ID">
    <input type="text" id="test" placeholder="Test Name">
    <button onclick="orderLabTest()">Order</button>
    <p id="res"></p>
  </div>
</div>
</body>
</html>
