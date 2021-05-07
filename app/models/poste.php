<?php

class Poste

{
    private $database;
    public function __construct()
    {
        $this->database = new Database;
    }

    public function getPoste()
    {
        $this->database->query("SELECT * FROM postes");
        $result = $this->database->resultSet();

        return $result;
    }

    
    public function addPoste($data)
    {
        $this->database->query("INSERT INTO `postes`(`titre_poste`, `contenu_poste`) VALUES (:titre, :contenu)");

        $this->database->bind(':titre', $data['titre']);
        $this->database->bind(':contenu', $data['contenu']);

        if ($this->database->execute()) {
            return true;
        } else {
           return false;
        }
    }


    public function updatePoste($data)
    {
        $this->database->query("UPDATE postes SET `titre_poste` = :titre, `contenu_poste` = :contenu WHERE id_poste = :id");
        $this->database->bind(':id', $data['id']);
        $this->database->bind(':titre', $data['titre']);
        $this->database->bind(':contenu', $data['contenu']);

        if ($this->database->execute()) {
            return true;
        } else {
           return false;
        }
    }

    public function onePoste($data) 
    {
        $this->database->query("SELECT * FROM postes WHERE id_poste = :id");
        $this->database->bind(':id', $data['id']);
        $result = $this->database->single();

        return $result;
    }

    public function deletePoste($data)
    {   
        $this->database->query("DELETE FROM `postes` WHERE id_poste = :id");
        $this->database->bind(':id', $data['id']);

        if ($this->database->execute()) {
            return true;
        } else {
           return false;
        }
    }
}
