<?php
class Event {
    private $id;
    private $attendees;
    private $nome_evento;
    private $data_evento;

    public function __construct($id, $attendees, $nome_evento, $data_evento) {
        $this->id = $id;
        $this->attendees = $attendees;
        $this->nome_evento = $nome_evento;
        $this->data_evento = $data_evento;
    }

    public function getId() {
        return $this->id;
    }

    public function getAttendees() {
        return $this->attendees;
    }

    public function getNomeEvento() {
        return $this->nome_evento;
    }

    public function getDataEvento() {
        return $this->data_evento;
    }
}

?>
