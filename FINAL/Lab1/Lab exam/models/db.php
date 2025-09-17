<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "job_portal";  // change to your DB

function getConnection() {
    global $host, $user, $pass, $dbname;
    $con = mysqli_connect($host, $user, $pass, $dbname);
    if (!$con) {
        die("DB Connection failed: " . mysqli_connect_error());
    }
    return $con;
}
?>
