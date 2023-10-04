<?php
include '../db_connection.php';
include './event_controller.php';

$eventController = new EventController($conn);
$events = $eventController->getAllEvents();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>

    <h1>Eventi</h1>
    <div>
        <a href="../index.php">Torna al Login</a>
    </div>
    <a href="add_event.php">Aggiungi evento</a>

    <div>
        <?php foreach ($events as $event) : ?>
            <div>
                <div>ID: <?php echo $event->getId(); ?></div>
                <div>Nome evento: <?php echo $event->getNomeEvento(); ?></div>
                <div>Data evento: <?php echo $event->getDataEvento(); ?></div>
                <div>Partecipanti: <?php echo $event->getAttendees(); ?></div>
                <div><a href="edit_event.php?id=<?php echo $event->getId(); ?>">Modifica</a></div>
                <div><a href="delete_event.php?id=<?php echo $event->getId(); ?>">Elimina</a></div>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>