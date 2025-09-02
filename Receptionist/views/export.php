<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Export Data</title>
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
  <div class="export-box">
    <h2>Export Data</h2>
    <button onclick="exportCSV()">Export Billing Data (CSV)</button>
    <button onclick="exportPDF()">Export PDF (Demo)</button>
    <p id="res"></p>
  </div>
</div>
</body>
</html>
