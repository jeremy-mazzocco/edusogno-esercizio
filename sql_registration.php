    <?php

    session_start();

    include 'db_connection.php';

    $message = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = mysqli_real_escape_string($conn, $_REQUEST["nome"]);
        $cognome = mysqli_real_escape_string($conn, $_REQUEST["cognome"]);
        $email = mysqli_real_escape_string($conn, $_REQUEST["email"]);
        $password = $_REQUEST["password"];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $checkEmail = "SELECT email FROM utenti WHERE email = '$email'";
        $result = mysqli_query($conn, $checkEmail);

        // extra: controlla se la email é giá registrata
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['message'] = "Email già registrata. Prova con un'altra e-mail.";
        } else {

            $query = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$hashed_password')";

            if (mysqli_query($conn, $query)) {
                $_SESSION['message'] = "Utente registrato con successo!";
            } else {
                $_SESSION['message'] = "Errore: " . mysqli_error($conn);
            }
        }

        header('Location: registration.php');
        exit;
    }

    mysqli_close($conn);


    // DEBUG
    // ini_set('display_errors', 1);
    // error_reporting(E_ALL);
    // var_dump($nome);
    ?>