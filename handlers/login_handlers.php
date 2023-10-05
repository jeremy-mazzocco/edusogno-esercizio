    <?php
    include '../includes/db_connection.php';
    include '../views/events.php';

    // Login
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
        $password = $_REQUEST['password'];

        $sql_email = "SELECT * FROM utenti WHERE email = '$email'";
        $result_email = mysqli_query($conn, $sql_email);

        if (mysqli_num_rows($result_email) > 0) {
            $user = mysqli_fetch_assoc($result_email);

            if (password_verify($password, $user['password'])) {

                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['userid'] = $user['id'];
                $_SESSION['username'] = $user['nome'];
                $_SESSION['lastname'] = $user['cognome'];
                $_SESSION['email'] = $user['email'];

                // selezione nome evento e attendees
                $sql_events = "SELECT nome_evento, data_evento, attendees FROM eventi";
                $result_events = mysqli_query($conn, $sql_events);

                $events = [];

                while ($event = mysqli_fetch_assoc($result_events)) {
                    $emailsArray = explode(',', $event['attendees']);
                    $emailsArray = array_map('trim', $emailsArray);

                    if (in_array($email, $emailsArray)) {
                        $events[] = [$event['nome_evento'], $event['data_evento']];
                    }
                }

                $_SESSION['events'] = $events;

                header('Location: ../views/events.php');
                exit;
            } else {
                echo "<div>Password errata!</div>";
            }
        } else {
            echo "<div>Utente non trovato!</div>";
        }
    }
    mysqli_close($conn);
