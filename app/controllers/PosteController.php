<?php

class PosteController extends Controller {
    public function __construct(){
      $this->posteModel = $this->model('Poste');
    }


    public function index(){
        $postes = $this->posteModel->getPoste();

        $this->view('blogger/accueil', $postes);
    }


    // Retourner à la page d'ajoute
    public function return() {
      $this->view('blogger/add');
    }


    // Ajouter un poste
    public function add() {
      if (!isset($_POST['submit-add'])) {
        $this->view('blogger/add');
      } else {
        
        $data = [
          'titre' => $_POST['titre'],
          'contenu' => $_POST['contenu']
        ];
        if (!empty($data['titre']) && $data['contenu']) {

          $this->posteModel->addPoste($data);
          // $this->view('blogger/accueil');
          header('location:' . URLROOT . '/' . 'PosteController/index');

        } else {
          $this->view('blogger/add');
        }
        
      }
    }


    // Modifier un poste
    public function edit() {
      if (!isset($_POST['submit-edit'])) {
        $this->view('blogger, edit');
      } else {
        $data = [
          'id' => trim($_GET['id']),
          'titre' => trim($_POST['titre']),
          'contenu' => trim($_POST['contenu'])
        ];

        $this->posteModel->updatePoste($data);
        // $this->view('blogger/accueil');
        header('location:' . URLROOT . '/' . 'PosteController/index');
      }
    }


    // Trouver un poste
    public function unPoste() {
      $data = [
        'id' => $_GET['id']
      ];
      $poste = $this->posteModel->onePoste($data);
      $this->view('blogger/edit', $poste);
    }

    
    // Supprimer un poste
    public function delete() {
      $data = [
        'id' => $_GET['id']
      ];
      $this->posteModel->deletePoste($data);
      header('location:' . URLROOT . '/' . 'PosteController/index');
      // $this->view('blogger/accueil');
    }

    public function header() {
      $this->view('inc/header');
    }
}