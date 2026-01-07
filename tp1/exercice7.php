<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
    <h1>Exercice 7</h1>

    <?php
    // tableau associatif
        $user = [
            "nom" => "TCHEROU",
            "prenom" => "Maliki",
            "email" => "maliki@example.com",
            "age" => 30
        ];

        // ucfirst : Met la 1ère lette de chaque chaîne majuscule
        foreach($user as $key => $value) {
            echo "<p>" . ucfirst($key) . " : " . $value . "</p>";
        }
    ?>
</body>
</html>