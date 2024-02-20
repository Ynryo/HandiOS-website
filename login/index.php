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
            $username = strip_tags($_POST["email"]);
            $password = strip_tags($_POST["password"]);
            include(dirname(__FILE__, 2) . "/assets/src/connection.php");

            $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                // Utilisateur trouvé, vérifier le mot de passe
                $row = $result->fetch_assoc();
                if (password_verify($password, $row["password"])) {
                    // Mot de passe correct, connecter l'utilisateur
                    // $_SESSION["session_id"] = bin2hex(random_bytes(32));
                    // $_SESSION["user_id"] = $row["id"];
                    echo "Connected";
                    // header("Location: /");
                } else {
                    // Mot de passe incorrect
                    echo "<p class=\"error\">Informations d'identification incorrectes 2.</p>";
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
        <form action="/login/" method="post">
            <div class="form__group">
                <input type="email" id="email" class="form__field" placeholder="" required>
                <label for="email" class="form__label">E-mail</label>
            </div>
            <div class="form__group">
                <input type="password" id="password" class="form__field" placeholder="" required>
                <label for="password" class="form__label">Mot de passe</label>
            </div>
            <a href="/signup/" class="button">Je n'ai pas de compte</a>
            <input type="submit" value="Continuer" class="button">
        </form>
    </div>
</body>

</html>