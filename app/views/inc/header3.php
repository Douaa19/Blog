<?php 
    session_start();
    if (isset($_SESSION['nom'])) {
?>
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
    <link rel="stylesheet" href="../public/css/style_homeB.css">
</head>
<body>
<header>
    <div class="header" style="background-image: url(../public/img/daktilo.jpg); width: 1519px; height: 750px; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
        <div class="navbar m-auto p-2 row" style="background-color:black;">
            <h4 class="col-sm-1"></h4>
            <h4 class="text-light col-sm-5 text-start" >Logo</h4>
            <a href="<?php echo URLROOT ?>/PosteController/index" class="a col-1 text-end text-light" style="text-decoration:none;">Accueil</a>
            <a href="<?php echo URLROOT; ?>/BloggerController/logout" class="a col-1 text-light text-end" style="text-decoration:none;">Déconnecter</a>
            <form action="<?php echo URLROOT; ?>/BloggerController/search" method="POST" class="col-3">
                <input type="text" name="search" id="search" placeholder="Recherche" style="border-radius:5px; padding-left:1rem; outline:none;">
                <button type="submit" name="submit_search" class="btn"><i class="fas fa-search"></i></button>
            </form>
            <!-- <h4 class="col-sm-1"></h4> -->
        </div>
        <div class="container">
            <div class="paragraphe row">
                <p class="col-7" style="position: absolute; top: 50%; left:10%; font-size:3rem; text-transform: uppercase; font-family:'Courier New', Courier, monospace; color: #EDE3A1;
	            background-image: -webkit-linear-gradient(180deg, #EDE3A1, #E7E3CE);
	            -webkit-background-clip: text;
	            -webkit-text-fill-color: transparent;">bienvenue cher <?php echo $_SESSION['nom']; ?></p>
            </div>
        </div>
    </div>
</header>

<?php } else {
    header('Location: ' . URLROOT . '/' . 'VisiteurController/index');
}
?>