<!DOCTYPE html>
<html>
<head>
    <title>Odd Numbers</title>
</head>
<body>
<h2>Odd Numbers between 10 and 100</h2>
<?php
for($i=10; $i<=100; $i++){
    if($i % 2 != 0) echo $i . " ";
}
?>
</body>
</html>
