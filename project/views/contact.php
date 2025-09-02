<?php
$name = $email = $message = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) $errors[] = "Name required";
    else $name = htmlspecialchars($_POST["name"]);

    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
        $errors[] = "Valid email required";
    else $email = $_POST["email"];

    if (empty($_POST["message"])) $errors[] = "Message required";
    else $message = htmlspecialchars($_POST["message"]);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact Us - BD Hospital</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <script src="../assets/js/validation.js"></script>
</head>
<body>
  <h2>Contact Us</h2>

  <?php if (!empty($errors)): ?>
    <div class="error">
      <?php foreach ($errors as $err) echo "<p>$err</p>"; ?>
    </div>
  <?php endif; ?>

  <form method="post" onsubmit="return validateContactForm()">
    <label>Name:</label>
    <input type="text" name="name" id="cname"><br>

    <label>Email:</label>
    <input type="text" name="email" id="cemail"><br>

    <label>Message:</label>
    <textarea name="message" id="cmessage"></textarea><br>

    <button type="submit">Send</button>
  </form>
</body>
</html>
