<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_email = $_POST["user_email"];

    $token = bin2hex(random_bytes(50));

    // Save token with the email
    $query = "UPDATE utenti SET reset_token='$token' WHERE email='$user_email'";
    mysqli_query($conn, $query);

    $reset_link = "http://localhost/Edusogno/edusogno-esercizio/reset_password.php?token=$token";


    // Invia l'email (Nota: devi configurare un sistema di invio email come PHPMailer o un altro servizio)
    mail($user_email, "Password Reset", "Clicca su questo link per resettare la tua password: $reset_link");
    
    echo "Email inviata con successo. Controlla la tua posta per il link di reset.";
}
