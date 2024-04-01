<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Handi'OS - Inscription</title>
    <?php include(dirname(__FILE__, 2) . "/assets/src/header.php") ?>
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/inputs.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/buttons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="form-frame">
        <img src="/assets/logo/handios-main.png" alt="Logo" srcset="/assets/logo/handios-main.png">
        <h1>Inscription</h1>
        <h2>Saisissez vos informations pour utiliser Handi'OS</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = strip_tags($_POST["firstname"]);
            $name = strip_tags($_POST["name"]);
            $birthdate = strip_tags($_POST["birthdate"]);
            $email = strip_tags($_POST["email"]);
            $password = strip_tags($_POST["password"]);
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $confirm_password = strip_tags($_POST["confirm_password"]);
            $sql = "SELECT id FROM users WHERE email = '$email'";
            include(dirname(__FILE__, 2) . "/assets/src/connection.php");
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<p class=\"error\">Cet email est déjà utilisé.</p>";
            } else {
                if (isset($_POST["usertype"])) {
                    $usertype = strip_tags($_POST['usertype']);
                    echo $password . " - " . $hashed_password . " - " . $confirm_password;

                    if ($confirm_password == strip_tags($_POST["password"])) {
                        $ip_adress = get_client_ip();
                        $sql = "INSERT INTO users (firstname, name, birthdate, email, password, user_type, ip_adress) VALUES ('$firstname', '$name', '$birthdate', '$email', '$hashed_password', '$usertype', '$ip_adress')";
                        if (!mysqli_query($conn, $sql)) {
                            echo "<p class=\"error\">Erreur : " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                        } else {
                            header("Location: /login/");
                        }
                    } else {
                        echo "<p class=\"error\">Les mots de passe ne sont pas identiques.</p>";
                    }
                } else {
                    echo "<p class=\"error\">Veuillez sélectionner un type de compte</p>";
                }
            }
            $conn->close();
        }
        ?>
        <form action="/signup/" method="post">
            <div class="account-type">
                <label for="elderly" class="large-button">
                    <input type="radio" name="usertype" id="elderly" value="1" required>
                    <span class="material-symbols-rounded">
                        elderly
                    </span>
                    Senior
                </label>
                <label for="accessible" class="large-button">
                    <input type="radio" name="usertype" id="accessible" value="2" required>
                    <span class="material-symbols-rounded">
                        accessible
                    </span>
                    En situation de handicap
                </label>
                <label for="clinical_notes" class="large-button">
                    <input type="radio" name="usertype" id="clinical_notes" value="3" required>
                    <span class="material-symbols-rounded">
                        clinical_notes
                    </span>
                    Personnel soignant
                </label>
                <label for="family_home" class="large-button">
                    <input type="radio" name="usertype" id="family_home" value="4" required>
                    <span class="material-symbols-rounded">
                        family_home
                    </span>
                    Membre d'une famille
                </label>
            </div>
            <div class="form__group">
                <input type="text" id="firstname" class="form__field" placeholder="" name="firstname" required autocomplete="give-name">
                <label for="firstname" class="form__label">Prénom</label>
            </div>
            <div class="form__group">
                <input type="text" id="name" class="form__field" placeholder="" name="name" required autocomplete="family-name">
                <label for="name" class="form__label">Nom</label>
            </div>
            <div class="form__group">
                <input type="date" id="birthdate" class="form__field" placeholder="" name="birthdate" required autocomplete="bday">
                <label for="birthdate" class="form__label">Date de naissance</label>
            </div>
            <div class="form__group">
                <input type="text" id="email" class="form__field" placeholder="" name="email" required autocomplete="email">
                <label for="email" class="form__label">E-mail</label>
            </div>
            <div class="form__group">
                <input type="password" id="password" class="form__field" placeholder="" name="password" required autocomplete="new-password">
                <label for="password" class="form__label">Mot de passe</label>
            </div>
            <div class="form__group">
                <input type="password" id="confirm_password" class="form__field" placeholder="" name="confirm_password" required autocomplete="new-password">
                <label for="confirm_password" class="form__label">Confirmez le mot de passe</label>
            </div>
            <div class="bottom-buttons-form">
                <a href="/login/" class="button secondary-button">J'ai déjà un compte</a>
                <input type="submit" value="S'inscrire" class="button">
            </div>
        </form>
    </div>
</body>

</html>