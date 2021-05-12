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
        $result = $this->resultSet();

        return $result;
    }

}