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
            $data = [
                'search' => $_POST['search']
            ];

            $result = $this->visiteurModel->search($data);

            if ($result) {
                $this->view('visiteur/result', $result);
            }else {
                // header('Location: ' . URLROOT . '/' . 'VisiteurController/index');
                echo "Not found";
            }

            
        }
    }
}