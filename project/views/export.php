<?php
// Data Export view
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Export Data</title>
<link rel="stylesheet" href="/learning-web-technologies-summer2024-25-sec-a/project/assets/background.css">
<link rel="stylesheet" href="/learning-web-technologies-summer2024-25-sec-a/project/assets/style.css">
</head>
<body>
  <div class="sidebar">
    <h2>BD Hospital</h2>
    <a href="homepage.php">Dashboard</a>
    <a href="billing.php">Billing & Insurance</a>
    <a href="appointments.php">Appointments</a>
    <a href="lab.php">Lab Test Order</a>
  </div>

  <div class="main-content">
    <div class="form-box">
      <h2>Export Data</h2>
      <button onclick="exportCSV()">Export Billing Data (CSV)</button>
      <button onclick="exportPDF()">Export PDF (Demo)</button>
      <p id="res"></p>
    </div>
  </div>

<script>
function exportCSV(){
  let data="PatientID,Name,Days,Total\n101,Demo,3,4500\n";
  let link=document.createElement("a");
  link.setAttribute("href","data:text/csv;charset=utf-8,"+data);
  link.setAttribute("download","data.csv");
  link.click();
}
function exportPDF(){
  alert("PDF Export (Demo). In real app, generate PDF here.");
}
</script>
</body>
</html>
