<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un étudiant</title>
</head>
<body>
    <?php
        // Inclure le fichier de connexion à la base
        require_once 'config/database.php';

        // Vérifier si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            // Récupérer les données du formulaire
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $age = $_POST['age'];

            // Requete SQL explicite avec noms de colonnes
            $sql = "INSERT INTO etudiants (nom, prenom, email, age) VALUES (?, ?, ?, ?)";

            // Préparation de la requete SQL (sécurisé)
            $stmt = $pdo->prepare($sql);

            // Exécution de la requete SQL avec les données du formulaire
            $stmt->execute([$nom, $prenom, $email, $age]);

            echo "Étudiant ajouté avec succès !";
        }
        
    ?>

    <h1>Formulaire d'ajout d'un étudiant</h1>
    <form action="" method="POST">
        <input type="text" name="nom" placeholder="Nom de l'étudiant" required>
        <input type="text" name="prenom" placeholder="Prénom de l'étudiant" required>
        <input type="email" name="email" placeholder="Email de l'étudiant" required>
        <input type="number" name="age" placeholder="Âge de l'étudiant" required>
        <button type="submit">Ajouter</button>
    </form>

    <br />
    <a href="index.php">Retour au menu de navigation</a>
</body>
</html>