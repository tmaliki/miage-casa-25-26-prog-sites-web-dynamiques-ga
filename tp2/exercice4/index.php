<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Exercice 4</h1>
    <?php
        require_once("../exercice1/Utilisateur");

        // création d'un objet de la classe Utilisateur
        $objet1 = new Utilisateur("Maliki", "maliki@example.com");
        

        // clonage de l'objet
        $objet2 = clone $objet1; // variable objet2 va stocker le clone de l'objet1

        // affichage des informations des deux objets
        echo "<h4>Informations de l'objet 1 :</h4>";
        $objet1->afficherInfos();

        echo "<h4>Informations de l'objet 2 :</h4>";
        $objet2->afficherInfos();
    ?>
</body>
</html>