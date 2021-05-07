<?php

class BlogerController extends Controller
{





    public function __construct()
    {
        //instanciation du model
        $this->userModel = $this->model('user');
    }



    public function index()
    {
        $users = $this->userModel->getUsers();


        $this->view('BlogerController/index', $users);
    }




    public function insert()
    {

        if (!isset($_POST['submit_add'])) {

            //load the view (insert);

            $this->view('bloger/insert');
        } else {


            // si les données sont envoyés par POST 
            $data = [
                'user_nom' => $_POST['user_nom'],
                'user_prenom' => $_POST['user_prenom'],
                'user_age' => $_POST['user_age']

            ];
            $this->userModel->addUser($data);

            header('location: ' . URLROOT . '/' . 'BlogerController/index'); // au pire ila ghleti kat mchi l page par default
        }
    }
}
