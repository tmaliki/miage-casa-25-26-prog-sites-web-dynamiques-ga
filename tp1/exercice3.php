<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Exercice 3</h1>
    <h3>Les nombres de 1 à 100 (boucle for)</h3>
    <?php
        for ($i = 1; $i <= 100; $i++) {
            echo $i . "<br />";
        }
    ?>

    <h3>Les nombre pairs de 1 à 100 (boucle while)</h3>
    <?php
        $j = 1;
        while ($j <= 100) {
            if ($j % 2 == 0) echo $j . "<br />";
            $j++;
        }
    ?>
</body>
</html>