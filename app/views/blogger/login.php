<?php include_once APPROOT . '../views/inc/header2.php'; ?>
<?php session_start(); 

  if (isset($_SESSION['nom'])) {
    header('Location:' . URLROOT . '/' . 'PosteController/index');
  }
?>
<div class="container shadow">
  <div class="container-fluid row mt-5">
      <div class="image text-center col-6">
          <img src="../public/img/login.jpg" alt="image">
      </div>
      <div class="form  col-6">
          <h2 class="border-bottom border-light border-3 pb-3 mb-3">LOGIN</h2>
          <form action="<?php echo URLROOT; ?>/BloggerController/login" method="POST" class="row p-3">
            <div class="mb-3">
              <label for="titre" class="form-label fs-5" style="color:white; padding:0 0 0.5rem 1.5rem;">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="admin@gmail.com">
            </div>
            <div class="mb-3">
              <label for="mdp" class="form-label mb fs-5"  style="color:white; padding:0 0 0.5rem 1.5rem;">Mot de passe</label>
              <input type="password" name="mdp" class="form-control" id="mdp" placeholder="**********">
            </div>
            <div class="d-flex justify-content-center mt-4">
                <button type="submit" name="submit-login" class="custom-btn btn-3"><span>Entrer</span></button>
            </div>
          </form>
      </div>
  </div>
</div>