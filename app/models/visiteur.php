<?php 

class Visiteur

{
    private $database;
    public function __construct()
    {
        $this->database = new Database;
    }

    public function return() {
        echo "Hello from modet visiteur";
    }

}