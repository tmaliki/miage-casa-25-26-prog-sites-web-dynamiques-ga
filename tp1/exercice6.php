<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
    <h1>Exercice 6</h1>

    <?php
        $phrase = "PHP est un langage puissant";

        /**
         * strlen : Renvoie la longueur d'une chaîne de caractères
         * strtoupper : Renvoie la chaîne de caractères en majuscules
         * strtolower : Renvoie la chaîne de caractères en minuscules
         * str_replace : Remplace toutes les occurrences d'une chaîne par une autre
         */
        echo "<p>Phrase : ". $phrase ."</p>";
        echo "<p>Longueur : ". strlen($phrase) ."</p>";
        echo "<p>Majuscule : " . strtoupper($phrase) . "</p>";
        echo "<p>Minuscule : " . strtolower($phrase) . "</p>";
        echo "<p>Remplacement : " . str_replace("puissant", "formidable", $phrase) . "</p>";
    ?>
</body>
</html>