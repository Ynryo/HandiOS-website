<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Handi'OS - Connexion</title>
    <?php include(dirname(__FILE__, 2) . "/assets/src/header.php") ?>
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
            $email_input = strip_tags($_POST["email"]);
            $password_input = strip_tags($_POST["password"]);
            include(dirname(__FILE__, 2) . "/assets/src/connection.php");

            $sql = "SELECT id, password FROM users WHERE email = '$email_input'";
            $result = $conn->query($sql);
            if ($result->num_rows == 1) {
                // Utilisateur trouvé, vérifier le mot de passe
                $row = $result->fetch_assoc();
                if (password_verify($password_input, $row["password"])) {
                    session_start();
                    $_SESSION["session_id"] = bin2hex(random_bytes(32));
                    $_SESSION["user_id"] = $row["id"];
                    echo "<p class=\"success\">Connected</p>";
                    header("Location: /");
                } else {
                    // Mot de passe incorrect
                    echo "<p class=\"error\">Informations d'identification incorrectes.</p>";
                }
            } else {
                // Utilisateur non trouvé
                echo "<p class=\"error\">Informations d'identification incorrectes.</p>";
            }

            $conn->close();
        }
        ?>
        <form action="/login/" method="post">
            <div class="form__group">
                <input type="email" id="email" class="form__field" placeholder="" name="email" required>
                <label for="email" class="form__label">E-mail</label>
            </div>
            <div class="form__group">
                <input type="password" id="password" class="form__field" placeholder="" name="password" required>
                <label for="password" class="form__label">Mot de passe</label>
            </div>
            <div class="bottom-buttons-form">
                <a href="/signup/" class="button secondary-button">Je n'ai pas de compte</a>
                <input type="submit" value="Se connecter" class="button">
            </div>
        </form>
    </div>
</body>

</html>