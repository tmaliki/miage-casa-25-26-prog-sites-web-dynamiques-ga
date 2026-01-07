<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Exercice 4</h1>
    <h3>Utilisation de foreach et count()</h3>
    <?php
        $jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
        foreach ($jours as $item) {
            echo $item . "<br />";
        }

        echo "<br />Nombre de jours dans la semaine : " . count($jours);
    ?>
</body>
</html>