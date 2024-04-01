<?php
include(dirname(__FILE__, 2) . "/assets/src/session.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Handi'OS</title>
    <meta property="og:site_name" content="Handi'OS">
    <?php include(dirname(__FILE__, 2) . "/assets/src/header.php") ?>
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/buttons.css">
</head>

<body>
    <div class="main">
        <div class="header">
            <img src="/assets/logo/handios-main.png" alt="Logo de Handi'OS">
            <nav>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/about/">À propos</a></li>
                    <li><a href="/download/">Télécharger</a></li>
                </ul>
            </nav>
        </div>
        <p>Le site est actuellement en développement.</p>
        <a class="button" href="/assets/src/logout.php">Déconnexion</a>
    </div>
</body>

</html>