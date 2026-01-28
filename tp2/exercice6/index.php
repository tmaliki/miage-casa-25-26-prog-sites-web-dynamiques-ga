<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 - Utilisation des namespaces</title>
</head>
<body>
    <h1>Exercice 6 - Utilisation des namespaces</h1>

    <?php

        require_once "App/Models/Utilisateur.php";

        use App\Models\Utilisateur;

        $user = new Utilisateur();
        $user->afficher();
    ?>
</body>
</html>