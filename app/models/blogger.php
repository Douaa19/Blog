<?php
class Blogger {
    private $database;
    public function __construct() {

        $this->database = new Database;
    }

    public function getBlogger($data) {

        $this->database->query("SELECT * FROM blogger WHERE email_blogger = :email AND mdp_blogger = :mdp");
        $this->database->bind(':email', $data['email']);
        $this->database->bind(':mdp', $data['mdp']);

        $result = $this->database->single();

        return $result;
    }

    // Session
    public function creatSession($blogger) {
        $_SESSION['id_blogger'] = $blogger->id;
        $_SESSION['nom_blogger'] = $blogger->nom;
        $_SESSION['email_blogger'] = $blogger->email;
        $_SESSION['mdp_blogger'] = $blogger->mdp;
    }


}