<?php

class VisiteurController extends Controller {
    public function __construct() {
        $this->visiteurModel = $this->model('Visiteur');
    }

    public function index() {
        $show = $this->visiteurModel->show();

        $this->view('visiteur/index', $data);
    }
}