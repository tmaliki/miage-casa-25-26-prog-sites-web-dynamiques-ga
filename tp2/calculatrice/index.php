<?php require_once("./traitement.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice Simple</title>
</head>

<body>
    <h1>Calculatrice Simple (Opérateur +, -, *, /)</h1>

    <form method="post">
        <input type="number" step="any" name="a" id="a" placeholder="Nombre 1" required>

        <select name="operateur" id="operateur" required>
            <option value="">Sélectionner un opérateur</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <input type="number" step="any" name="b" id="b" placeholder="Nombre 2" required>

        <button type="submit">Calculer</button>
    </form>

    <?php if ($resultat !== null): ?>
        <p style="color: green;">
            <strong>Résultat : </strong> <?= $resultat; ?>
        </p>
    <?php endif; ?>

    <?php if ($erreur !== null): ?>
        <p style="color: red;">
            <strong>Erreur : </strong> <?= $erreur; ?>
        </p>
    <?php endif; ?>
</body>

</html>