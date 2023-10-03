<?php
include '../db_connection.php';
include './event_controller.php';

if (isset($_GET['id'])) {
    $eventId = $_GET['id'];

    $eventController = new EventController($conn);
    if($eventController->deleteEvent($eventId)) {
        header("Location: admin_dashboard.php");
        exit;
    } else {
        echo "Errore durante l'eliminazione dell'evento.";
    }
} else {
    header("Location: admin_dashboard.php");
    exit;
}
