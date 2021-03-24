<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "farmers_buddy";

//create connection
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
