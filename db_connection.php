<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db-edusogno";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die('Could not connect: ' . mysqli_error());
} else
    echo 'Connected successfully';
