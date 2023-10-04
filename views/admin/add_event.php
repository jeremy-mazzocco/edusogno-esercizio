<?php

include '../../includes/db_connection.php';
include '../../includes/event_controller.php';
// include '../../views/admin/add_event.php';

$conn = new mysqli($servername, $username, $password, $dbname);
$eventController = new EventController($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $attendees = $_POST['attendees'];
    $nome_evento = $_POST['nome_evento'];
    $data_evento = $_POST['data_evento'];

    if ($eventController->addEvent($attendees, $nome_evento, $data_evento)) {
        header("Location: ../../views/admin/admin_dashboard.php");
        exit;
    } else {
        echo "Errore nell'aggiunta dell'evento." . '<br>' . '<a href="
        ../../views/admin/add_event.php">Torna al form</a>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi Evento</title>
</head>

<body>

    <form action="../../views/admin/add_event.php" method="post">
        Attendees: <input type="text" name="attendees" required><br>
        Nome Evento: <input type="text" name="nome_evento" required><br>
        Data Evento: <input type="date" name="data_evento" required><br>
        <input type="submit" value="Aggiungi Evento">
    </form>

</body>

</html>