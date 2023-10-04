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
        header("Location: ../../views/admin/admin_dashboard.php");
        exit;
    } else {
        echo "Errore nella modifica dell'evento.";
    }
}
