<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// var_dump($nome);

    include 'db_connection.php';

    // Registration
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_REQUEST["nome"];
        $cognome = $_REQUEST["cognome"];
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$hashed_password')";
    }
    mysqli_close($conn);

