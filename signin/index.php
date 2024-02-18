<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Handi'OS</title>
    <meta property="og:site_name" content="Handi'OS">
    <meta name="theme-color" content="#fff">
    <link rel="manifest" href="/app.webmanifest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/assets/favicon/handios-favicon.png">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/inputs.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/buttons.css">
</head>

<body>
    <?php
    include(dirname(__FILE__, 2) . "/assets/src/connection.php");
    ?>
    <div class="form-frame">
        <img src="/assets/logo/handios-main.png" alt="Logo" srcset="/assets/logo/handios-main.png">
        <h1>Inscription</h1>
        <h2>Saisissez vos informations pour utiliser Handi'OS</h2>
        <form action="/signin/" method="post">
            <div class="form__group">
                <input type="text" id="firstname" class="form__field" placeholder="">
                <label for="firstname" class="form__label">Prénom</label>
            </div>
            <div class="form__group">
                <input type="text" id="name" class="form__field" placeholder="">
                <label for="name" class="form__label">Nom</label>
            </div>
            <div class="form__group">
                <input type="date" id="birthdate" class="form__field" placeholder="">
                <label for="birthdate" class="form__label">Date de naissance</label>
            </div>
            <div class="form__group">
                <input type="password" id="email" class="form__field" placeholder="">
                <label for="email" class="form__label">E-mail</label>
            </div>
            <div class="form__group">
                <input type="password" id="password" class="form__field" placeholder="">
                <label for="password" class="form__label">Mot de passe</label>
            </div>
            <div class="form__group">
                <input type="password" id="confirm-password" class="form__field" placeholder="">
                <label for="confirm-password" class="form__label">Confirmez le mot de passe</label>
            </div>
            <input type="submit" value="Continuer" class="button">
        </form>
    </div>
</body>

</html>