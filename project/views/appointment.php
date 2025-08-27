<?php
// Appointment Scheduling view
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Appointments</title>
<link rel="stylesheet" href="/learning-web-technologies-summer2024-25-sec-a/project/assets/background.css">
<link rel="stylesheet" href="/learning-web-technologies-summer2024-25-sec-a/project/assets/style.css">
</head>
<body>
  <div class="sidebar">
    <h2>BD Hospital</h2>
    <a href="homepage.php">Dashboard</a>
    <a href="billing.php">Billing & Insurance</a>
    <a href="lab.php">Lab Test Order</a>
    <a href="export.php">Data Export</a>
  </div>

  <div class="main-content">
    <div class="form-box">
      <h2>Schedule Appointment</h2>
      <input type="text" id="aname" placeholder="Patient Name">
      <input type="text" id="doc" placeholder="Doctor Name">
      <input type="date" id="date">
      <input type="time" id="time">
      <button onclick="schedule()">Schedule</button>
      <p id="res"></p>
    </div>
  </div>

<script>
function schedule(){
  let n=document.getElementById("aname").value;
  let d=document.getElementById("doc").value;
  let dt=document.getElementById("date").value;
  let t=document.getElementById("time").value;
  if(n===""||d===""||dt===""||t===""){alert("Fill all fields!"); return;}
  document.getElementById("res").innerText="Appointment: "+n+" with "+d+" on "+dt+" at "+t;
}
</script>
</body>
</html>
