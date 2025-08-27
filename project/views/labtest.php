<?php
// Lab Test Order view
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab Test</title>
<link rel="stylesheet" href="/learning-web-technologies-summer2024-25-sec-a/project/assets/background.css">
<link rel="stylesheet" href="/learning-web-technologies-summer2024-25-sec-a/project/assets/style.css">
</head>
<body>
  <div class="sidebar">
    <h2>BD Hospital</h2>
    <a href="homepage.php">Dashboard</a>
    <a href="billing.php">Billing & Insurance</a>
    <a href="appointments.php">Appointments</a>
    <a href="export.php">Data Export</a>
  </div>

  <div class="main-content">
    <div class="form-box">
      <h2>Lab Test Order</h2>
      <input type="text" id="pid" placeholder="Patient ID">
      <input type="text" id="test" placeholder="Test Name">
      <button onclick="order()">Order</button>
      <p id="res"></p>
    </div>
  </div>

<script>
function order(){
  let p=document.getElementById("pid").value;
  let t=document.getElementById("test").value;
  if(p===""||t===""){alert("Fill all fields!");return;}
  document.getElementById("res").innerText="Lab Test Ordered for "+p+" : "+t;
}
</script>
</body>
</html>
