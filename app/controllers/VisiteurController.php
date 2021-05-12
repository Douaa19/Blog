<?php

class VisiteurController extends Controller {
    public function __construct() {
        $this->bloggerModel = $this->model('Blogger');
    }

    public function index() {
        $this->view('visiteur/index');
    }
}