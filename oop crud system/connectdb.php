<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "";


// Connect to database
$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
global $conn;

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>

