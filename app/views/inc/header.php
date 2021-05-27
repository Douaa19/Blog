<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/v_style.css">
</head>
<body>
<header>
    <div class="header" style="background-image: url(../public/img/daktilo.jpg);">
        <div class="navbar m-auto p-2 row" style="background-color:black;">
            <h4 class="col-sm-1"></h4>
            <h4 class="text-light col-sm-6 text-start" >Logo</h4>
            <a href="<?php echo URLROOT ?>/VisiteurController/index" class="col-1 text-end text-light">Accueil</a>
            <a href="<?php echo URLROOT; ?>/BloggerController/index" class="col-1 text-light text-end">Connecter</a>
            <form action="<?php echo URLROOT; ?>/VisiteurController/search" method="POST" class="col-3">
                <input type="text" name="search" id="search" placeholder="Recherche par titre">
                <button type="submit" name="submit_search" class="btn"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="container">
            <div class="paragraphe row">
                <p class="col-6">bienvenue chers lecteurs</p>
            </div>
        </div>
    </div>
</header>

