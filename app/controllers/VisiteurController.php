<?php

class VisiteurController extends Controller {
    public function __construct() {
        $this->visiteurModel = $this->model('Visiteur');
    }

    public function index() {
        $show = $this->visiteurModel->show();

        $this->view('visiteur/index', $show);

    }

    public function result() {
        // $this->view('visiteur/result');

        
    }

    public function search() {
        if (isset($_POST['submit_search'])) {
            if (!empty($_POST['search'])) {
                $data = [
                    'search' => $_POST['search']
                ];
    
                $result = $this->visiteurModel->search($data);
    
                if ($result) {
                    $this->view('visiteur/index', $result);
                }else {
                    $data = [
                        'error_search' => "Le resultat ne trouve pas"
                    ];
                    $this->view('visiteur/result', [], $data);
                }
            } else {
                header('Location:' . URLROOT . '/' . 'VisiteurController/index');
            }
        }
    }
}