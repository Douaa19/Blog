<?php

class user

{
    private $database;
    public function __construct()
    {
        $this->database = new Database;
    }

    public function getPoste()
    {
        echo "Select";
    }

    
    public function addPoste()
    {
        echo "Add";
    }


    public function updatePoste()
    {
        echo "Update";
    }

    public function deletePoste()
    {
        echo "Update";
    }
}
