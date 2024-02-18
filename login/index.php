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
    <div class="form-frame">
        <img src="/assets/logo/handios-main.png" alt="Logo" srcset="/assets/logo/handios-main.png">
        <h1>Connexion</h1>
        <h2>Utilisez les services de Handi'OS</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username_input = strip_tags($_POST["username"]);
            $password_input = strip_tags($_POST["password"]);
            include(dirname(__FILE__, 1) . '/assets/src/connection.php');

            // Requête SQL pour vérifier si l'utilisateur existe
            $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
            $stmt->bind_param("s", $username_input);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                // Utilisateur trouvé, vérifier le mot de passe
                $row = $result->fetch_assoc();
                if (password_verify($password_input, $row["password"])) {
                    // Mot de passe correct, connecter l'utilisateur
                    $_SESSION["session_id"] = bin2hex(random_bytes(32));
                    $_SESSION["user_id"] = $row["id"];
                    header("Location: /home/");
                } else {
                    // Mot de passe incorrect
                    echo "<p class=\"error\">Informations d'identification incorrectes.</p>";
                }
            } else {
                // Utilisateur non trouvé
                echo "<p class=\"error\">Informations d'identification incorrectes.</p>";
            }

            // Fermer la connexion à la base de données
            $stmt->close();
            $conn->close();
        }
        ?>
        <div class="form__group">
            <input type="email" id="email" class="form__field" placeholder="">
            <label for="email" class="form__label">E-mail</label>
        </div>
        <div class="form__group">
            <input type="password" id="password" class="form__field" placeholder="">
            <label for="password" class="form__label">Mot de passe</label>
        </div>
        <a href="/signin/" class="button">Continuer</a>
    </div>
</body>

</html>