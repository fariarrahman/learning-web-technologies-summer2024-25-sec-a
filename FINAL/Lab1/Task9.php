<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Login Form</title>
</head>
<body>
    <h1>PHP Log in Form</h1>
    <hr><br>

    <form method="post">       
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="abc@email.com"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" placeholder="Password" name="password"><br><br>

        <input type="reset">
        <input type="submit" value="Log in">
        <br><br>

        <p>Don't have an account? <a href="registration_form.html">Sign up!!!</a></p>
    </form>

    <?php 
        // Corrected function name and superglobal variable case
        print_r($_POST);
print_r($_POST["name"]);
    ?>
</body>
</html>

