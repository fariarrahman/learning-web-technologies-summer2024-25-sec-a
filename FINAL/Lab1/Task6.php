<!DOCTYPE html>
<html>
<head>
    <title>Search in Array</title>
</head>
<body>
<h2>Search Element</h2>
<form method="post">
    <input type="text" name="search" placeholder="Enter number to search">
    <button type="submit" name="find">Search</button>
</form>
<?php
$numbers = array(10,20,30,40,50);
if(isset($_POST['find'])){
    $search = $_POST['search'];
    if(in_array($search, $numbers)){
        echo "$search found in array!";
    } else {
        echo "$search not found in array!";
    }
}
?>
</body>
</html>
