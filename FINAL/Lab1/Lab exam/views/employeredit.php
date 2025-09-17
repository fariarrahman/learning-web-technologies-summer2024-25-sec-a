<?php
require_once("../../models/employerModel.php");
$emp = getEmployerById($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Employer</title>
</head>
<body>
<h2>Edit Employer</h2>
<form method="POST" action="../../controllers/employerController.php?action=update">
    <input type="hidden" name="id" value="<?= $emp['id'] ?>">
    <input type="text" name="employer_name" value="<?= $emp['employer_name'] ?>"><br>
    <input type="text" name="company_name" value="<?= $emp['company_name'] ?>"><br>
    <input type="text" name="contact_no" value="<?= $emp['contact_no'] ?>"><br>
    <input type="text" name="username" value="<?= $emp['username'] ?>"><br>
    <input type="text" name="password" value="<?= $emp['password'] ?>"><br>
    <button type="submit">Update</button>
</form>
</body>
</html>
