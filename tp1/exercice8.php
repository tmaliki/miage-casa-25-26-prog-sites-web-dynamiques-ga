<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
    <h1>Exercice 8</h1>

    <?php
        // strtotime : Convertit une chaîne de caractères en timestamp
        echo "<p>Timestamp de '2024-01-01 12:00:00' : " . strtotime("2024-01-01 12:00:00") . "</p>";

        // Exercice 8
        $aujourdhui = date("Y-m-d"); // date("d/m/Y)
        echo "<p>Date d'aujourd'hui : " . $aujourdhui . "</p>";

        echo "<p>Date dans 10 jours : ". date("Y-m-d", strtotime("+10 days")) ."</p>";

        echo "<p>Date dans 1 mois : " . date("Y-m-d", strtotime("+1 month")) . "</p>";

        # Calcule de l'âge à partir d'une date de naissance
        $date_naissance = "1990-05-15";

        # Méthode 1
        $age = date('Y') - date('Y', strtotime($date_naissance));
        echo "<p>Age : $age ans</p>";

        # Méthode 2
        /**
         * date_diff : Calcule la différence entre deux dates
         * date_create : Crée un objet DateTime à partir d'une chaîne de caractères
         * format('%y') : Retourne le nombre d'années compètes dans la différence
         */
        $age2 = date_diff(date_create($date_naissance), date_create($aujourdhui))->format('%y');
        echo "<p>Age méthode 2 : $age2 ans</p>";
    ?>
</body>
</html>