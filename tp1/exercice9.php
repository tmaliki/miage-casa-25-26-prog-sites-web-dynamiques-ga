<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerice 9</title>
</head>

<body>
    <h1>Exercice 9</h1>

    <form action="" method="post">
        <input type="text" name="nom" placeholder="Entrez votre nom">
        <input type="email" name="email" placeholder="Entrez votre email">
        <button type="submit">Envoyer</button>
    </form>

    <?php
        /**
         * Traitement du formulaire
         * vérification des champs
         * isset : Vérifie si une variable est définie et n'est pas nulle
         */
        if(isset($_POST['nom']) && isset($_POST['email'])) {
            $nom = $_POST['nom'];
            $email = $_POST['email'];

            echo "<p>Nom : $nom</p>";
            echo "<p>Email : $email</p>";
            echo "<p>Bonjour, $nom</p>";
        }
    ?>
</body>

</html>