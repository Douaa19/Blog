<?php require APPROOT . '/views/inc/header1.php'; ?>
<div class="container">
    <h2 class="mt-5">Modifier le poste</h2>
    <form action="<?php echo URLROOT; ?>/PosteController/edit?id=<?php  echo $data->id_poste; ?>" method="POST" class="mt-3 row">
        <div class="card p-5">
            <div class="mb-3">
              <label for="titre" class="form-label">Titre</label>
              <input type="text" name="titre" class="form-control" id="titre" value="<?php echo $data->titre_poste; ?>">
            </div>
            <div class="mb-3">
              <label for="texte" class="form-label">Texte</label>
              <input type="textarea" name="contenu" class="form-control" id="texte" value="<?php echo $data->contenu_poste; ?>"></textarea>
            </div>
        </div>
        <p class="col-5"></p>
        <button type="submit" name="submit-edit" class="btn mt-3 text-light col-2">Modifier</button>
        <p class="col-5"></p>
    </form>
</div>
</div>
<?php var_dump($data); ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>
