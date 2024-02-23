<?php
include(dirname(__FILE__, 1) . "/assets/src/session.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Handi'OS</title>
    <meta property="og:site_name" content="Handi'OS">
    <?php include(dirname(__FILE__, 1) . "/assets/src/header.php") ?>
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
        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=gshfnJhNQL7w1viP&amp;autoplay=1;start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <a class="button" href="/assets/src/logout.php">Déconnexion</a>
    </div>
</body>

</html>