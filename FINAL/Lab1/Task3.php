<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even</title>
</head>
<body>
<h2>Check Odd or Even</h2>
<form method="post">
    <input type="text" name="number" placeholder="Enter a number">
    <button type="submit" name="check">Check</button>
</form>
<?php
if(isset($_POST['check'])){
    $num = $_POST['number'];
    if(is_numeric($num)){
        if($num % 2 == 0){
            echo "<p>$num is Even</p>";
        } else {
            echo "<p>$num is Odd</p>";
        }
    }
}
?>
</body>
</html>
