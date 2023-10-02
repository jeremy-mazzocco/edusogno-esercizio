<?php

// Registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $REQUEST["nome"];
    $cognome = $REQUEST["cognome"];
    $email = $REQUEST["email"];
    $password = $REQUEST["password"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$hashed_password')";

    if (mysqli_query($conn, $query)) {
        echo "Registrazione avvenuta con successo!";
    } else {
        echo "Errore: " . $query . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
