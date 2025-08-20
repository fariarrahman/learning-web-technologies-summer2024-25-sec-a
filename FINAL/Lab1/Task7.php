<!DOCTYPE html>
<html>
<head>
    <title>Shapes</title>
</head>
<body>
<h2>Shapes</h2>

<?php
// Triangle with *
for($i=1;$i<=3;$i++){
    for($j=1;$j<=$i;$j++){
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";

// Numbers
$num=1;
for($i=1;$i<=3;$i++){
    for($j=1;$j<=$i;$j++){
        echo $num++ . " ";
    }
    echo "<br>";
}

echo "<br>";

// Alphabets
$char='A';
for($i=1;$i<=3;$i++){
    for($j=1;$j<=$i;$j++){
        echo $char++ . " ";
    }
    echo "<br>";
}
?>
</body>
</html>
