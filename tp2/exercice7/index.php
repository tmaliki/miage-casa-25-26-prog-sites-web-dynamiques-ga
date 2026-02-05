<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 - Validation des formulaires</title>
</head>

<body>
    <h1>Exercice 7 - Validation des formulaires</h1>

    <form action="validation.php" method="post">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <br /><br />
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
        </div>

        <br /><br />
        <button type="submit">Valider</button>
        <!-- <button type="refresh">Réinitialiser</button> -->
    </form>
</body>

</html>