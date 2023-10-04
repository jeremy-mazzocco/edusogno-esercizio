<?php

// Connection to Database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db-edusogno";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>
