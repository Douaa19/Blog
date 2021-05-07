<?php include_once APPROOT . '../views/inc/header1.php'; ?>
    <div class="container">
        <h2 class="mt-5">Ajouter Poste</h2>
        <form action="<?php echo URLROOT; ?>/PosteController/add" method="POST" class="mt-3 row">
            <div class="card p-5">
                <div class="mb-3">
                  <label for="titre" class="form-label">Titre</label>
                  <input type="text" name="titre" class="form-control" id="titre" placeholder="Titre du chapitre">
                </div>
                <div class="mb-3">
                  <label for="texte" class="form-label">Texte</label>
                  <textarea name="contenu" class="form-control" id="texte" placeholder="Chapitre"></textarea>
                </div>
            </div>
            <p class="col-5"></p>
            <button type="submit" name="submit-add" class="btn mt-3 text-light col-2">Ajouter</button>
            <p class="col-5"></p>
        </form>
    </div>
</body>
</html>