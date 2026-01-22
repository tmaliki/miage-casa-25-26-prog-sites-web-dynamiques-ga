<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Exercice 1 - Création de classes et objets</h1>

    <?php
        // Inclusion du fichier Utilisateur.php
        require_once 'Utilisateur.php';

        // Création d'un objet de la classe Utilisateur
        $user = new Utilisateur("John Doe", "john@example.com");
        $user->afficherInfos();
    ?>
</body>
</html>