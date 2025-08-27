<?php
// Billing + Insurance view
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Billing & Insurance</title>
  <link rel="stylesheet" href="/learning-web-technologies-summer2024-25-sec-a/project/assets/background.css">
<link rel="stylesheet" href="/learning-web-technologies-summer2024-25-sec-a/project/assets/style.css">
</head>
<body>
  <div class="sidebar">
    <h2>BD Hospital</h2>
    <a href="homepage.php">Dashboard</a>
    <a href="appointments.php">Appointments</a>
    <a href="lab.php">Lab Test Order</a>
    <a href="export.php">Data Export</a>
  </div>

  <div class="main-content">
    <div class="form-box">
      <h2>Billing + Insurance</h2>
      <label>Patient Name:</label>
      <input type="text" id="pname">
      <label>Patient ID:</label>
      <input type="text" id="pid">
      <label>Date of Admission:</label>
      <input type="date" id="admission">
      <label>Date of Leaving:</label>
      <input type="date" id="leaving">
      <label>Bed Type:</label>
      <select id="bed">
        <option value="">--Select--</option>
        <option value="1500">Ward (1500/day)</option>
        <option value="4000">Single Room (4000/day)</option>
      </select>
      <label>Insurance (%):</label>
      <select id="insurance">
        <option value="0">No Insurance</option>
        <option value="0.1">10%</option>
        <option value="0.3">30%</option>
        <option value="0.4">40%</option>
      </select>
      <button onclick="generateBill()">Generate & Submit</button>
      <div id="result" class="result"></div>
    </div>
  </div>

<script>
function generateBill() {
  // Simple UI calculation (placeholder)
  let name = document.getElementById("pname").value;
  let id = document.getElementById("pid").value;
  let adm = document.getElementById("admission").value;
  let leave = document.getElementById("leaving").value;
  let bed = document.getElementById("bed").value;
  let ins = document.getElementById("insurance").value;

  if(name===""||id===""||adm===""||leave===""||bed==="") {
    alert("Please fill all fields!");
    return;
  }

  let days = (new Date(leave) - new Date(adm)) / (1000*3600*24);
  if(days <= 0) days = 1;

  let baseBill = parseInt(bed) * days;
  let coverage = parseFloat(ins);
  let discount = baseBill * coverage;
  let finalBill = baseBill - discount;

  let box = document.getElementById("result");
  box.style.display = "block";
  box.innerText =
    "Patient: " + name + "\n" +
    "Days: " + days + "\n" +
    "Base Bill: " + baseBill + " Tk\n" +
    "Insurance Discount: " + discount + " Tk\n" +
    "Final Bill: " + finalBill + " Tk\n" +
    "Claim Status: Pending...";
}
</script>
</body>
</html>
