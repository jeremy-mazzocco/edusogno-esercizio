<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'db_connection.php';

// Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {

        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $sql_email = "SELECT * FROM utenti WHERE email = '$email'";
        $result_email = mysqli_query($conn, $sql_email);
        $user = mysqli_fetch_assoc($result_email);

        if (password_verify($password, $user['password'])) {

            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['userid'] = $user['id'];
            $_SESSION['username'] = $user['nome'];
            $_SESSION['lastname'] = $user['cognome'];
            $_SESSION['email'] = $user['email'];

            // soluzione ok ma ricordati di mettere una validation nella regitrare l'utente 
            $sql_events = "SELECT nome_evento FROM eventi WHERE attendees LIKE '%$email%'";
            $result_events = mysqli_query($conn, $sql_events);

                while ($event = mysqli_fetch_assoc($result_events)) {
                    $events[] = $event['nome_evento'];
                };

                $_SESSION['events'] = $events;

        };

        header('Location: events.php');
        exit;

    } else {
        echo "<div>'Password errata!'</div>";
    }
} else {
    echo "<div>'Utente non trovato!'</div>";
}

mysqli_close($conn);
