<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un étudiant</title>
</head>

<body>
    <?php
        require_once "./config/database.php";

        // Récupération de la liste des étudiants
        $list_query = "SELECT * FROM etudiants";
        $list_stmt = $pdo->query($list_query);
        $etudiants = $list_stmt->fetchAll(PDO::FETCH_ASSOC);

        // Suppression
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];

            // Requêt SQL explicite de suppression
            $sql = "DELETE FROM etudiants WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);

            echo "Étudiant supprimé avec succès !";
        }
    ?>

    <h1>Supprimer un étudiant</h1>
    <form method="POST">
        <select name="id" required>
            <option value="">Sélectionner un étudiant</option>
            <?php foreach ($etudiants as $etd): ?>
                <option value="<?= $etd['id'] ?>"><?= $etd['id'] . " - " . $etd['nom'] . " " . $etd['prenom'] ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Suprimer</button>
    </form>

    <br />
    <a href="index.php">Retour au menu de navigation</a>
</body>

</html>