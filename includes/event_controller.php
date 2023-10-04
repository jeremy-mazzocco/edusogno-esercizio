<?php

include 'db_connection.php';
include 'event.php';
include(__DIR__ . '/../handlers/admin/send_email.php');


class EventController
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAllEvents()
    {
        $events = [];
        $sql = "SELECT * FROM eventi";
        $result = $this->conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $event = new Event($row['id'], $row['attendees'], $row['nome_evento'], $row['data_evento']);
            $events[] = $event;
        }
        return $events;
    }

    public function getEventById($id)
    {
        $sql = "SELECT * FROM eventi WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            return new Event($row['id'], $row['attendees'], $row['nome_evento'], $row['data_evento']);
        }
        return null;
    }

    // add
    public function addEvent($attendees, $nome_evento, $data_evento)
    {
        $sql = "INSERT INTO eventi (attendees, nome_evento, data_evento) VALUES ('$attendees', '$nome_evento', '$data_evento')";
        return $this->conn->query($sql);
        if ($this->conn->query($sql)) {
            $subject = "Sei stato invitato a un evento!";
            $body = "Sei stato aggiunto a " .  $nome_evento . " che avverrá il " . $data_evento;
            sendEmail($attendees, $subject, $body);
            return true;
        } else {
            return false;
        }
    }

    // edit
    public function editEvent($id, $attendees, $nome_evento, $data_evento)
    {
        $sql = "UPDATE eventi SET attendees = ?, nome_evento = ?, data_evento = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('sssi', $attendees, $nome_evento, $data_evento, $id);

        if ($stmt->execute()) {
            $subject = "Un aggiornamento a un tuo evento";
            $body = "L'evento " . $nome_evento . " ha subito una modifica.";
            sendEmail($attendees, $subject, $body);
            return true;
        } else {
            return false;
        }
    }

    // delete
    public function deleteEvent($id)
    {
        $sql = "DELETE FROM eventi WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
