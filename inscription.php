<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journée Tournoi LAN jeux-vidéo</title>
    <link rel="stylesheet" href="css/Style.css">
</head>

<body>
   <?php
    require_once "header.php";
   ?>
    <main>
        <form action="connexion" method="post">
            <fieldset>
                <h2>inscription</h2>

                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name" placeholder="Votre nom..." required>


                <label for="surname">Prénom :</label>
                <input type="text" id="surname" name="user_surname" placeholder="Votre prénom..." required>


                <label for="email">E-mail :</label>
                <input type="email" id="email" name="user_email" placeholder="Votre adresse mail" required>


                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="user_password" placeholder="Votre mot de passe">


                <label for="passwordconfirm">Confirmation du mot de passe :</label>
                <input type="password" id="passwordconfirm" name="user_password_confirm" placeholder="Confirmation">

                <button type="submit">Envoyer</button>
            </fieldset>
        </form>
    </main>
    <?php
    require_once "header.php";
    ?>
</body>

</html>