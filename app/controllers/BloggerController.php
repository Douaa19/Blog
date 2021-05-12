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
                    header('Location: ' . URLROOT . '/' . 'PosteController/index');
                }
            } else {
                // Inputs are empty
                $this->view('blogger/login');
            }

        } else {
                $this->view('blogger/login');
            
        }
    }


    // Session
    public function creatSession($blogger) {
        $_SESSION['id_blogger'] = $blogger->id;
        $_SESSION['nom_blogger'] = $blogger->nom;
        $_SESSION['email_blogger'] = $blogger->email;
        $_SESSION['mdp_blogger'] = $blogger->mdp;
        redirect('blogger/accueilBlogger');
    }


    public function logout(){
        // unset($_SESSION['id_blogger']);
        // unset($_SESSION['nom_blogger']);
        // unset($_SESSION['email_blogger']);
        // session_destroy();
        echo "Vous êtes déconnectés";
        redirect('visiteur/index');
      }

}

