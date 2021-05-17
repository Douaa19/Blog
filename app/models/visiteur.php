<?php 

class Visiteur

{
    private $database;
    public function __construct()
    {
        $this->database = new Database;
    }

    public function show() {
        $this->database->query('SELECT * FROM postes');
        $result = $this->database->resultSet();

        return $result;
    }

    public function search($data) {
        $this->database->query('SELECT * FROM postes WHERE titre_poste = :titre ');
        $this->database->bind(':titre', $data['search']);

        $result = $this->database->resultSet();

        if (!$result) {
            return false;
        } else {
            return $result;
        }
    }

}