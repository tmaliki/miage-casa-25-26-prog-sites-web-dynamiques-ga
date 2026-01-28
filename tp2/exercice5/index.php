<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Exercice 5</h1>

    <?php
        // Avertissement si fichier non trouvé ou absent
        include "../exercice1/Utilisateur.php";

        // Erreur fatale si le fichier n'est pas trouvé ou absent
        require "../exercice2/Administrateur.php";

        // Inclus une seul fois le fichier
        require_once "../exercice3/Authentifiable.php";
    ?>
</body>
</html>