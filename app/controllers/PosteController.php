<?php

class PosteController extends Controller {
    public function __construct(){
      $this->posteModel = $this->model('Poste');
    }

    public function index(){
        $this->view('visiteur/index');
      }
}