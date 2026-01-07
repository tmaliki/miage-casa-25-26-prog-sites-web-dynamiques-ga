<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Exercice 2</h1>

    <?php
        $note = 15;

        if ($note < 10) {
            echo "<p>Insuffisant</p>";
        } elseif ($note <= 11) {
            echo "<p>Passable</p>";
        } elseif ($note <= 15) {
            echo "<p>Bien</p>";
        } else {
            echo "<p>Très bien</p>";
        }
    ?>
</body>
</html>