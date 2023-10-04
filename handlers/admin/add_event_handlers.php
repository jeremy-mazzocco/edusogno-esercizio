<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


include '../../includes/db_connection.php';
include '../../includes/event_controller.php';

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
