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
            <img class="logo" src="/assets/logo/handios-main.png" alt="Logo de Handi'OS">
            <img class="favicon" src="/assets/favicon/handios-favicon.png" alt="Mini logo Handi'OS">
            <nav>
                <ul>
                    <!-- <li><a href="/" class="button secondary-button">Accueil</a></li>
                    <li><a href="/" class="button secondary-button">À propos</a></li>
                    <li><a href="/" class="button">Télécharger</a></li> -->
                    <li><a href="https://handios-app.specstech.fr/signup/" class="button secondary-button">Créer un compte</a></li>
                    <li><a href="https://handios-app.specstech.fr/login/" class="button">Se connecter</a></li>
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
            <a href="/assets/downloads/handios-lastest.apk" download class="button">
                <span class="material-symbols-rounded">download</span>
                Télécharger Handi'OS
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2020 160">
                <path fill="#2f7cd3" fill-opacity="1" d="M2020-0.19V161H0V64.64c0,0,402.63-128.22,1062-19.14C1721.37,154.59,2020-0.19,2020-0.19z"></path>
            </svg>
        </section>
        <section class="presentation">
            <div class="content">
                <h1>Un système, plusieurs aides</h1>
                <div>
                    <img src="/assets/img/handihub-3d.png" alt="Image de la tablette Handi'Hub" srcset="/assets/img/handihub-3d.png">
                    <div class="description">
                        <h2>Un logement, une tablette</h2>
                        <p>
                            Une tablette connectée Handi'Hub<sup>&copy;</sup> est installée dans chaque maison.<br>
                            La tablette gère le bracelet Handi'Wrist<sup>&copy;</sup>, vos caméras, vos volets, votre porte, et bien plus encore...
                        </p>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2020 160">
                <path fill="#fff" fill-opacity="1" d="M2020-0.19V161H0V64.64c0,0,402.63-128.22,1062-19.14C1721.37,154.59,2020-0.19,2020-0.19z"></path>
            </svg>
        </section>
        <section class="about-project">
            <div class="content">
                <h1>Un projet mené par des lycéens</h1>
                <div>
                    <img src="/assets/img/students-thinking.jpg" alt="" srcset="/assets/img/students-thinking.jpg">
                    <div class="description">
                        <h2>2 lycéens, <br>1 système incroyable ✨</h2>
                        <p>
                            Ce système a été créé dans le cadre d'un projet de fin d'année.
                        </p>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2020 160">
                <path fill="#2f7cd3" fill-opacity="1" d="M2020-0.19V161H0V64.64c0,0,402.63-128.22,1062-19.14C1721.37,154.59,2020-0.19,2020-0.19z"></path>
            </svg>
        </section>
        <section class="about-system">
            <div class="content">
                <h1>Un système intelligent et adaptatif</h1>
                <div>
                    <img src="/assets/img/created-with-old-people.png" alt="" srcset="/assets/img/created-with-old-people.png">
                    <div class="description">
                        <h2>Conçu par avec vous, <br>pour vous</h2>
                        <p>
                            Nous avons conçu Handi'OS avec l'aide personnes agées, personnes handicapées, infirmiers et familles pour que le logiciel soit parfaitement adapté et facile d'utilisation.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <p>&copy;<?php echo date("Y") ?> - Handi'OS</p>
        </footer>
    </div>
</body>

</html>