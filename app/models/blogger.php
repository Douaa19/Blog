<?php
class Blogger {
    private $database;
    public function __construct() {

        $this->database = new Database;
    }

    public function login($data) {

        $this->database->query("SELECT * FROM blogger WHERE email_blogger = :email AND mdp_blogger = :mdp");
        $this->database->bind(':email', $data['email']);
        $this->database->bind(':mdp', $data['mdp']);

        $result = $this->database->single();
        if (!$result) {
            return false;
        } else {
            return true;
        }
        
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