<?php

include 'db_connection.php';

// Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {

        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $sql = "SELECT * FROM utenti WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {

            header('Location: events.php');
            exit;
        }
    }
}
mysqli_close($conn);
