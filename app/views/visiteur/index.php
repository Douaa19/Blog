<?php include_once APPROOT . '../views/inc/header.php'; ?>
    <main class="container mt-5">
        <div class="row">
            <img src="../public/img/fouad-laraoui-portrait.jpg" alt="FL" class="col-6">
            <p class="col-5">Fouad Laroui est un économiste et écrivain marocain.

            Après des études au Lycée Lyautey à Casablanca, il passe par l'Ecole Nationale des Ponts et Chaussées en France, dont il sort ingénieur. Après          avoir travaillé dans une usine de phosphates à Khouribga (Maroc), Il retourne en France et obtient un doctorat en sciences économiques. Il part         pour le Royaume-Uni, où il passe quelques années à Cambridge et à York et part vivre à Amsterdam où il enseigne l'économétrie puis les sciences de      l'environnement à l'Université. Parallèlement, il se consacre à l'écriture.

            Ses romans écrits en français connaissent un grand succès au Maroc pour sa façon de se moquer des blocages et aussi des pesanteurs de la société            marocaine. Il le fait avec humour et sans discours politique trop explicite."J’écris pour dénoncer des situations qui me choquent. Pour dénicher        la bêtise sous toutes ses formes. La méchanceté, la cruauté, le fanatisme, la sottise me révulsent". Identité, tolérance, respect de l’individu :           ce sont les trois valeurs qui l’intéressent parce que pour lui, « elles sont malmenées ou mal comprises dans nos pays du Maghreb et peut-être          aussi ailleurs en Afrique et dans les pays arabe ». Poète, il a composé en néerlandais un recueil qu'il juge "trop intime" pour être traduit en     français.</p>
        </div>
        <h2 class="mt-5">Articles</h2>
        <div class="row">
          <?php foreach ($data as $row) : ?>
            <div class="card text-start shadow m-3 p-3 rounded" style="width: 25rem;">
                <img src="../public/img/livre.gif" class="card-img-top mt-2" alt="Une année chez les français" style="height:28rem;">
                <div class="card-body row">
                    <h5 class="card-title col-6 text-start"><?php echo $row->titre_poste; ?></h5>
                    <p class="card-text col-10"><?php echo "LIMIT 15"; ?></p>
                    <p class="col-3"></p>
                    <button type="button" class="btn btn-dark col-6" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Lire plus
                    </button>

                    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"   aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"><?php echo "Chapitre 1" ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <?php echo "Lire plus"; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="col-3"></p>
                </div>
            </div>
          <?php endforeach; ?>
        </div>
</main>
<footer>
    <div class="container-fluid bg-dark"></div>
</footer>
</body>
</html>