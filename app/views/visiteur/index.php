<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap files -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>

    <!-- My CSS -->
    <title>Blog</title>
</head>
<body>
    <div class="header">
            <div class="m-auto p-2 row">
                <h4 class="col-sm-1"></h4>
                <h4 class="text-light col-sm-7 text-start" >Logo</h4>
                <a href="" class="text-light col-sm-1 text-center text-decoration-none p-1">Connexion</a>
                <p class="col-1 text-light text-center pt-1">Fouad Laroui</p>
                <h4 class="col-sm-1"></h4>
            </div>
    </div>
    <main class="container mt-5">
        <div class="row">
            <img src="./public/img/fouad-laraoui-portrait.jpg" alt="FL" class="col-6">
            <p class="col-5">Fouad Laroui est un économiste et écrivain marocain.

            Après des études au Lycée Lyautey à Casablanca, il passe par l'Ecole Nationale des Ponts et Chaussées en France, dont il sort ingénieur. Après          avoir travaillé dans une usine de phosphates à Khouribga (Maroc), Il retourne en France et obtient un doctorat en sciences économiques. Il part         pour le Royaume-Uni, où il passe quelques années à Cambridge et à York et part vivre à Amsterdam où il enseigne l'économétrie puis les sciences de      l'environnement à l'Université. Parallèlement, il se consacre à l'écriture.

            Ses romans écrits en français connaissent un grand succès au Maroc pour sa façon de se moquer des blocages et aussi des pesanteurs de la société            marocaine. Il le fait avec humour et sans discours politique trop explicite."J’écris pour dénoncer des situations qui me choquent. Pour dénicher        la bêtise sous toutes ses formes. La méchanceté, la cruauté, le fanatisme, la sottise me révulsent". Identité, tolérance, respect de l’individu :           ce sont les trois valeurs qui l’intéressent parce que pour lui, « elles sont malmenées ou mal comprises dans nos pays du Maghreb et peut-être          aussi ailleurs en Afrique et dans les pays arabe ». Poète, il a composé en néerlandais un recueil qu'il juge "trop intime" pour être traduit en     français.</p>
        </div>
        <h2 class="mt-5">Articles</h2>
        <div class="row">
            <div class="card col-4 shadow p-3 mb-5 rounded" style="width: 25rem;">
                <img src="./public/img/livre.gif" class="card-img-top mt-2" alt="Une année chez les français" style="height:28rem;">
                <div class="card-body row">
                    <h5 class="card-title col-6 text-start">Chapitre 1</h5>
                    <h6 class="card-title col-6 text-end">12/05/2021</h6>
                    <p class="card-text col-10">C’est en 1970 que le ciel tombe sur la tête du petit Mehdi. Ébloui par l’intelligence et la boulimide lecture de son jeune élève, son instituteur s’est battu pour lui obtenir une bourse dans le prestigieux lycéLyautey ... </p>
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
        </div>
</main>
<footer>
    <div class="container-fluid bg-dark"></div>
</footer>
</body>
</html>