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

    public function addEvent($attendees, $nome_evento, $data_evento)
    {
        $sql = "INSERT INTO eventi (attendees, nome_evento, data_evento) VALUES ('$attendees', '$nome_evento', '$data_evento')";
        return $this->conn->query($sql);
    }
}
