<?php
require_once("../../models/employerModel.php");
$employers = getEmployers();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employer Management</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<h2>Employer Management</h2>
<a href="add.php">+ Add Employer</a>
<br><br>

<input type="text" id="search" placeholder="Search Employer...">
<table border="1" width="100%">
    <thead>
        <tr>
            <th>ID</th><th>Name</th><th>Company</th><th>Contact</th><th>Username</th><th>Password</th><th>Action</th>
        </tr>
    </thead>
    <tbody id="employerTable">
        <?php foreach($employers as $emp): ?>
        <tr>
            <td><?= $emp['id'] ?></td>
            <td><?= $emp['employer_name'] ?></td>
            <td><?= $emp['company_name'] ?></td>
            <td><?= $emp['contact_no'] ?></td>
            <td><?= $emp['username'] ?></td>
            <td><?= $emp['password'] ?></td>
            <td>
                <a href="edit.php?id=<?= $emp['id'] ?>">Edit</a> |
                <a href="../../controllers/employerController.php?action=delete&id=<?= $emp['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
$("#search").keyup(function(){
    var keyword = $(this).val();
    $.post("../../controllers/employerController.php?action=search", {keyword: keyword}, function(data){
        $("#employerTable").html(data);
    });
});
</script>
</body>
</html>
