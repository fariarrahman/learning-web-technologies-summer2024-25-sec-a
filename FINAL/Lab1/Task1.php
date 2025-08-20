<!DOCTYPE html>
<html>
<head>
    <title>Rectangle Calculator</title>
    <style>
        body {font-family: Arial; background: #f2f2f2; padding: 30px;}
        .container {background: white; padding: 20px; border-radius: 10px; max-width: 400px; margin: auto; box-shadow: 0 0 10px gray;}
        h2 {text-align: center;}
        input, button {width: 95%; padding: 8px; margin: 5px 0;}
        button {background: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer;}
        .result {margin-top: 15px; padding: 10px; background: #e6ffe6; border-radius: 5px;}
    </style>
</head>
<body>
<div class="container">
<h2>Rectangle Calculator</h2>
<form method="post">
    <input type="text" name="length" placeholder="Enter length"><br>
    <input type="text" name="width" placeholder="Enter width"><br>
    <button type="submit" name="calculate">Calculate</button>
</form>
<?php
if(isset($_POST['calculate'])){
    $length = $_POST['length'];
    $width = $_POST['width'];
    if(is_numeric($length) && is_numeric($width)){
        $area = $length * $width;
        $perimeter = 2 * ($length + $width);
        echo "<div class='result'>Length: $length<br>Width: $width<br>Area = $area<br>Perimeter = $perimeter</div>";
    }
}
?>
</div>
</body>
</html>
