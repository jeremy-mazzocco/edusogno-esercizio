<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_GET["token"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    if ($new_password === $confirm_password) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        $query = "UPDATE utenti SET password='$hashed_password', reset_token=NULL WHERE reset_token='$token'";
        mysqli_query($conn, $query);

        echo "Password resettata con successo!" . '<br>' . '<p>Torna al <a href="index.php">Login</a></p>';
    } else {
        echo "Le password non corrispondono!";
    }
}
