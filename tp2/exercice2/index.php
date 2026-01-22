<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Exercice 2 - Héritage en PHP</h1>

    <?php
        // Inclure le fichier Administrateur.php
        require_once "Administrateur.php";

        $admin = new Administrateur("Maliki", "maliki@example.com", "Super Admin");
        $admin->afficherInfos();
    ?>
</body>
</html>