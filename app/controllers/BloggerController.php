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

        $this->view('blogger/login');

        // $blogger = $this->bloggerModel->getBlogger($data);

        // $this->view('blogger/login', $blogger);
    }


    public function login() {

        if (isset($_POST['submit-login'])) {
            if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
                
                $data = [
                    'email' => trim($_POST['email']),
                    'mdp' => trim($_POST['mdp'])
                ];
                
                $logged = $this->bloggerModel->login($data);
                if (!$logged) {
                    $this->view('blogger/login');
                } else {
                    $this->view('blogger/accueilBlogger');
                }
            }

        } else {
                $this->view('blogger/login');
            
        }
    }
}

