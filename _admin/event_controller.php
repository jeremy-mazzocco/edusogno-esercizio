<?php

include '../db_connection.php';
include './event.php';

class EventController {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addEvent($attendees, $nome_evento, $data_evento) {

    }

    public function editEvent($id, $attendees, $nome_evento, $data_evento) {
        
    }

    public function deleteEvent($id) {
       
    }

    public function getEvents() {
       
    }

    public function getAllEvents() {
        $events = [];
        $sql = "SELECT * FROM eventi";
        $result = $this->conn->query($sql);
    
        while($row = $result->fetch_assoc()) {
            $event = new Event($row['id'], $row['attendees'], $row['nome_evento'], $row['data_evento']);
            $events[] = $event;
        }
    
        return $events;
    }
    
}
