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
    }

// Login admin
    public function login() {

        if (isset($_POST['submit-login'])) {

            if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
                $data = [
                'email' => trim($_POST['email']),
                'mdp' => trim($_POST['mdp'])
                ];

            } else {
                    $errors = [
                        'error_email' => "S'il vous plaît remplir le champ email",
                        'error_mdp' => "S'il vous plaît remplir le champ mot de passe"
                    ];
                    $this->view('blogger/login', [], $errors);
            }

            if (isset($data)) {
                $logged = $this->bloggerModel->login($data);
                if (!$logged) {
                    $this->view('blogger/login');
                } else {
                    $this->creatSession($logged);
                    header('Location:' . URLROOT . '/' . 'PosteController/index');
                }
            } else {
                // $this->view('blogger/login', [], $errors);
            }
            
        } else {
                $this->view('blogger/login');
        }
    }


    // Creat Session
    public function creatSession($blogger) {
        session_start();
        $_SESSION['id'] = $blogger->id_blogger;
        $_SESSION['nom'] = $blogger->nom_blogger;
        $_SESSION['email'] = $blogger->email_blogger;
        $_SESSION['mdp'] = $blogger->mdp_blogger;
    }

    // Logout
    public function logout(){
        session_start();
        unset($_SESSION['nom']);
        header('Location: ' . URLROOT . '/' . 'VisiteurController/index');
    }

    // Search Bar
    public function search() {
        if (isset($_POST['search'])) {
            $data = [
                'search' => $_POST['search']
            ];
            $result = $this->bloggerModel->search($data);

            if ($result) {
                $this->view('blogger/result', $result);
            }else {
                $data = [
                    'error_search' => "Le resultat ne trouve pas"
                ];
                $this->view('blogger/accueilBlogger', [], $data);
            }
        }
    }



}

