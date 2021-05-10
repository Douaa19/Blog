<?php
class BloggerController extends Controller {
    public function __construct() {
        $this->bloggerModel = $this->model('Blogger');
    }

    public function index() {
        $data = [
            'email' => '',
            'mdp' => '',
            'nom' => ''
        ];

        $blogger = $this->bloggerModel->getBlogger($data);

        $this->view('blogger/index', $blogger);
    }


    public function login() {
        if (!isset($_POST['submit-login'])) {
            $this->view('blogger/index');
        } else {
            if (empty($_POST['email']) && empty($_POST['mdp'])) {
                $this->view('blogger/index');
            } else {
                $data = [
                    'email' => trim($_POST['email']),
                    'mdp' => trim($_POST['mdp'])
                ];


                $logged = $this->bloggerModel->getBlogger($data);

                redirect('blogger/accueil');
            


                
            }
        }
    }
}

















