<?php
include '../../includes/db_connection.php';
include '../../includes/event_controller.php';

$conn = new mysqli($servername, $username, $password, $dbname);
$eventController = new EventController($conn);
$event = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $event = $eventController->getEventById($id);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $attendees = $_POST['attendees'];
    $nome_evento = $_POST['nome_evento'];
    $data_evento = $_POST['data_evento'];

    if ($eventController->editEvent($id, $attendees, $nome_evento, $data_evento)) {
        header("Location: admin_dashboard.php");
        exit;
    } else {
        echo "Errore nella modifica dell'evento.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Evento</title>
</head>

<body>

    <?php if ($event) : ?>
        <form action="edit_event.php" method="post">

            <input type="hidden" name="id" value="<?php echo $event->getId(); ?>">
            Nome evento: <input type="text" name="nome_evento" value="<?php echo $event->getNomeEvento(); ?>" required><br>
            Data evento: <input type="date" name="data_evento" value="<?php echo $event->getDataEvento(); ?>" required><br>
            Partecipanti: <input type="text" name="attendees" value="<?php echo $event->getAttendees(); ?>" required><br>
            <input type="submit" value="Modifica Evento">

        </form>
    <?php else : ?>
        <p>Evento non trovato!</p>
    <?php endif; ?>

</body>

</html>