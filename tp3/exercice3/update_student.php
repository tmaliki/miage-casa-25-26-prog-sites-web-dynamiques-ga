<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de l'age d'un étudiant</title>
</head>

<body>
    <?php
        require_once "./config/database.php";

        // Récupération de la liste des étudiants
        $list_query = "SELECT * FROM etudiants";
        $list_stmt = $pdo->query($list_query);
        $etudiants = $list_stmt->fetchAll(PDO::FETCH_ASSOC);

        // Modification
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            $age = $_POST['age'];

            // Requêt SQL explicite de mise à jour
            $sql = "UPDATE etudiants SET age = ? WHERE id = ?";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([$age, $id]);

            echo "Âge de l'étudiant modifié avec succès !";
        }
    ?>

    <h1>Modifier l'âge d'un étudiant</h1>
    <form method="POST">
        <!-- Statique -->
        <!-- <input type="number" name="id" , placeholder="ID étudiant" required> -->

        <!-- Dynamique -->
        <select name="id" required>
            <option value="">Sélectionner un étudiant</option>
            <?php foreach ($etudiants as $etd): ?>
                <option value="<?= $etd['id'] ?>"><?= $etd['id'] . " - " . $etd['nom'] . " " . $etd['prenom'] ?></option>
            <?php endforeach; ?>
        </select>

        <input type="number" name="age" placeholder="Nouvel âge" required>

        <button type="submit">Modifier</button>
    </form>

    <br />
    <a href="index.php">Retour au menu de navigation</a>
</body>

</html>