<?php

include '../db_connection.php';
include './event.php';

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
    }

    // edit
    public function editEvent($id, $attendees, $nome_evento, $data_evento)
    {
        $sql = "UPDATE eventi SET attendees = ?, nome_evento = ?, data_evento = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('sssi', $attendees, $nome_evento, $data_evento, $id);

        return $stmt->execute();
    }
}
