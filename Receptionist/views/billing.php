<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Billing & Insurance</title>
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

    <h3>Pharmacy</h3>
    <label>Medicine Name:</label>
    <input type="text" id="medName">
    <label>Price:</label>
    <input type="number" id="medPrice" value="0">
    <label>Qty:</label>
    <input type="number" id="medQty" value="1">
    <button onclick="addMedicine()">Add Medicine</button>

    <table id="medTable">
      <thead><tr><th>#</th><th>Medicine</th><th>Price</th><th>Qty</th><th>Total</th></tr></thead>
      <tbody></tbody>
    </table>

    <button onclick="calculateBill()">Generate Bill</button>
    <div class="result" id="summaryArea"></div>
  </div>
</div>
</body>
</html>

