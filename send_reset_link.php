<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'db_connection.php';
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['user_email'])) {

        $email = mysqli_real_escape_string($conn, $_POST['user_email']);

        $sql = "SELECT * FROM utenti WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if ($result) {

            $token = bin2hex(random_bytes(50));

            $sql_token = "UPDATE utenti SET reset_token='$token' WHERE email='$email'";
            if (mysqli_query($conn, $sql_token)) {

                $reset_link = "http://localhost/Edusogno/edusogno-esercizio/reset_password.php?token=$token";

                // ho usato PHPmail
                $mail = new PHPMailer(true);
                try {
                    $mail->SMTPDebug = 0;
                    $mail->isSMTP();

                    // ho usato Mailtrap
                    $mail->Host       = 'sandbox.smtp.mailtrap.io';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'dbe9e1f850ea02';
                    $mail->Password   = '8f000d6fbbb9d6';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port       = 2525;

                    $mail->setFrom('from@example.com', 'Mailer');
                    $mail->addAddress($email);

                    $mail->isHTML(true);
                    $mail->Subject = 'Password Reset';
                    $mail->Body    = 'Clicca su questo link per resettare la tua password: <a href=' . $reset_link . '>qui</a>';

                    $mail->send();
                    echo 'Messaggio inviato con successo. Controlla la tua email.' . '<br>' .
                        '<p><a href="index.php">Vai alla pagina di Login</a></p>';
                } catch (Exception $e) {
                    echo "Errore nell'invio del messaggio: {$mail->ErrorInfo}";
                }
            } else {
                echo "Errore nel salvataggio del token.";
            }
        } else {
            echo "Email non trovata.";
        }
    }
}
mysqli_close($conn);
