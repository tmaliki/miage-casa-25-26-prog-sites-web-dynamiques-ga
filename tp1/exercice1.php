<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Exercice 1</h1>

    <?php
        $nom = "Maliki";
        $age = 30;

        if ($age >= 18) {
            echo "<p>Bonjour $nom, vous êtes majeur.</p>";
        } else {
            echo "<p>Bonjour $nom, vous êtes mineur.</p>";
        }
    ?>
</body>
</html>