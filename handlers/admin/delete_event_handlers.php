<?php

include '../../vendor/autoload.php';
include '../../includes/event_controller.php';

if (isset($_GET['id'])) {
    $eventId = $_GET['id'];

    $eventController = new EventController($conn);
    if ($eventController->deleteEvent($eventId)) {
        header("Location: ../../views/admin/admin_dashboard.php");
        exit;
    } else {
        echo "Errore durante l'eliminazione dell'evento.";
    }
} else {
    header("Location: ../../views/admin/admin_dashboard.php");
    exit;
}
