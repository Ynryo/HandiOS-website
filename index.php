<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Handi'OS</title>
    <?php include(dirname(__FILE__, 1) . "/assets/src/header.php") ?>
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/buttons.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/public_indexes.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="main">
        <header>
            <img src="/assets/logo/handios-main.png" alt="Logo de Handi'OS">
            <nav>
                <ul>
                    <!-- <li><a href="/" class="button secondary-button">Accueil</a></li>
                    <li><a href="/" class="button secondary-button">À propos</a></li>
                    <li><a href="/" class="button">Télécharger</a></li> -->
                    <li><a href="/signup/" class="button secondary-button">Créer un compte</a></li>
                    <li><a href="/login/" class="button">Se connecter</a></li>
                </ul>
            </nav>
        </header>
        <section class="top">
            <img src="/assets/favicon/handios-favicon.png" alt="Mini logo Handi'OS">
            <h1>
                Le service d'aide<br>
                <span id="help_people_anim">
                    <div>
                        <span class="material-symbols-rounded anim_icon">elderly</span>
                        <span class="material-symbols-rounded anim_icon">accessible</span>
                        <span class="material-symbols-rounded anim_icon">clinical_notes</span>
                        <span class="material-symbols-rounded anim_icon">family_home</span>
                    </div>
                </span>
            </h1>
            <a href="/downloads/handios-lastest.apk" download class="button">
                <span class="material-symbols-rounded">download</span>
                Télécharger Handi'OS
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2020 160">
                <path fill="#2f7cd3" fill-opacity="1" d="M2020-0.19V161H0V64.64c0,0,402.63-128.22,1062-19.14C1721.37,154.59,2020-0.19,2020-0.19z"></path>
            </svg>

        </section>
        <section class="about">

        </section>
        <footer>
            <p>&copy;<?php echo date("Y") ?> - Handi'OS</p>
        </footer>
    </div>
</body>

</html>