<!DOCTYPE html>
<html>
<head>
    <title>Add Employer</title>
</head>
<body>
<h2>Add Employer</h2>
<form method="POST" action="../../controllers/employerController.php?action=add" onsubmit="return validateForm();">
    <input type="text" name="employer_name" id="employer_name" placeholder="Employer Name"><br>
    <input type="text" name="company_name" id="company_name" placeholder="Company Name"><br>
    <input type="text" name="contact_no" id="contact_no" placeholder="Contact No"><br>
    <input type="text" name="username" id="username" placeholder="Username"><br>
    <input type="password" name="password" id="password" placeholder="Password"><br>
    <button type="submit">Save</button>
</form>
<script>
function validateForm() {
    let fields = ["employer_name","company_name","contact_no","username","password"];
    for (let f of fields) {
        if (document.getElementById(f).value.trim() === "") {
            alert(f + " cannot be empty!");
            return false;
        }
    }
    return true;
}
</script>
</body>
</html>
