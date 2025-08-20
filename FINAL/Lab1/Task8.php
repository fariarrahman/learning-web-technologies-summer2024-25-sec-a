<!DOCTYPE html>
<html>
<head>
    <title>2D Array Shapes</title>
</head>
<body>
<h2>2D Array Printing</h2>
<?php
$array = [
    [1, 2, 3, "A"],
    [1, 2, "B", "C"],
    [1, "D", "E", "F"]
];

for($i=0;$i<count($array);$i++){
    for($j=0;$j<count($array[$i]);$j++){
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}
?>
</body>
</html>