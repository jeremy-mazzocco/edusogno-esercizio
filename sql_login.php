<?php

include 'db_connection.php';

// Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $password = $_REQUEST['password'];

    $sql_email = "SELECT * FROM utenti WHERE email = '$email'";
    $result_email = mysqli_query($conn, $sql_email);

    // Verifica se la query ha restituito un risultato
    if (mysqli_num_rows($result_email) > 0) {
        $user = mysqli_fetch_assoc($result_email);

        if (password_verify($password, $user['password'])) {

            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['userid'] = $user['id'];
            $_SESSION['username'] = $user['nome'];
            $_SESSION['lastname'] = $user['cognome'];
            $_SESSION['email'] = $user['email'];

            $sql_events = "SELECT nome_evento FROM eventi WHERE attendees LIKE '%$email%'";
            $result_events = mysqli_query($conn, $sql_events);

            while ($event = mysqli_fetch_assoc($result_events)) {
                $events[] = $event['nome_evento'];
            };

            $_SESSION['events'] = $events;

            header('Location: events.php');
            exit;

        } else {
            echo "<div>Password errata!</div>";
        }
    } else {
        echo "<div>Utente non trovato!</div>";
    }
}

mysqli_close($conn);
