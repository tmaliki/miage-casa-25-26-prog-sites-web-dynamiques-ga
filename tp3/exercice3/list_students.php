<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
</head>

<body>
    <?php
        // Inclure le fichier de connexion à la base
        require_once 'config/database.php';

        // Requete pour récupérer tous les étudiants
        $sql = "SELECT * FROM etudiants";

        // Exécution directe
        $stmt = $pdo->query($sql);

        // Récupération des résultats sous forme de tableau associatif
        $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <h1>Liste des étudiants</h1>
    <!-- <?php //foreach ($etudiants as $etd): ?> -->
    <?php foreach ($etudiants as $etd) { ?>
        <p>
            <strong>ID:</strong> <?= $etd['id'] ?>,
            <strong>Nom:</strong> <?= $etd['nom'] ?>,
            <strong>Prénom:</strong> <?= $etd['prenom'] ?>,
            <strong>Email:</strong> <?= $etd['email'] ?>,
            <strong>Âge:</strong> <?= $etd['age'] ?>
        </p>
    <?php } ?>
    <!-- <?php //endforeach; ?> -->

    <br />
    <a href="index.php">Retour au menu de navigation</a>
</body>

</html>