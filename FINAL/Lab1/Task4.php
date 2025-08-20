<!DOCTYPE html>
<html>
<head>
    <title>Largest Number</title>
</head>
<body>
<h2>Find Largest Number</h2>
<form method="post">
    <input type="text" name="a" placeholder="Enter first number"><br>
    <input type="text" name="b" placeholder="Enter second number"><br>
    <input type="text" name="c" placeholder="Enter third number"><br>
    <button type="submit" name="find">Find Largest</button>
</form>
<?php
if(isset($_POST['find'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
        if($a >= $b && $a >= $c) echo "Largest is $a";
        elseif($b >= $a && $b >= $c) echo "Largest is $b";
        else echo "Largest is $c";
    }
}
?>
</body>
</html>
