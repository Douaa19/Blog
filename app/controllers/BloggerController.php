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
                    if ($this->creatSession($logged)) {
                        echo "Session created";
                        // header('Location: ' . URLROOT . '/' . 'PosteController/index');
                    } else {
                        echo "Session not created";
                    }
                    
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
        $_SESSION['id'] = $blogger->id_blogger;
        $_SESSION['nom'] = $blogger->nom_blogger;
        $_SESSION['email'] = $blogger->email_blogger;
        $_SESSION['mdp'] = $blogger->mdp_blogger;
        // header('Location: ' . URLROOT . '/' . 'PosteController/index');
        // redirect('blogger/accueilBlogger');
    }


    public function logout(){
        // unset($_SESSION['id_blogger']);
        // unset($_SESSION['nom_blogger']);
        // unset($_SESSION['email_blogger']);
        // session_destroy();
        echo "Vous êtes déconnectés";
        header('Location: ' . URLROOT . '/' . 'VisiteurController/index');
      }

    public function search() {
        if (isset($_POST['search'])) {
            $data = [
                'search' => $_POST['search']
            ];
            $result = $this->bloggerModel->search($data);

            if ($result) {
                $this->view('blogger/result', $result);
            }else {
                echo "La partie cherché n'exixte pas";
            }

            
        }
    }

}

