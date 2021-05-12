<?php include_once APPROOT . '../views/inc/header2.php'; ?>
<div class="container row mt-5" style="dispaly:flex; flex-wrap: wrap;">
    <div class="col-2"></div>
    <div class="image col-5">
        <img src="../public/img/login.jpg" alt="image" style="width:400px; height:550px;">
    </div>
    <div class="form col-4 mt-4" style="background-color:black; display:flex; flex-direction:column; justify-content: center; width:480px; height:500px;">
        <h2 class="mb-5" style="color:white; text-align:center;">LOGIN</h2>
        <form action="<?php echo URLROOT; ?>/BloggerController/login" method="POST" class="mt-3 row" style="padding: 0 4rem 0 4rem;">
        <div class="mb-3">
          <label for="titre" class="form-label mb-3" style="color:white;">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Entre votre email">
        </div>
        <div class="mb-3">
          <label for="mdp" class="form-label mb-3"  style="color:white;">Mot de passe</label>
          <input type="password" name="mdp" class="form-control" id="mdp" placeholder="Entre votre mot de passe">
        </div>
        <div class="button d-flex justify-content-center mt-4">
            <button type="submit" name="submit-login" class="btn mt-3 col-2" style="background-color: white; color:black;">Entrer</button>
        </div>
        </form>
    </div>
    <div class="col-1"></div>
</div>


