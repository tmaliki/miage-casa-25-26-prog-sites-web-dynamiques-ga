<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini projet PHP - TP1</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
        // 1. Initialisation
        $error_msg = "";
        $success_msg = "";
        $fichier = "messages_data.txt";
        $messages = "";

        // 2. Traitement du formulaire
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Récupération et nettoyage des données
            $nom = trim($_POST['nom'] ?? "");
            $message = trim($_POST['message'] ?? "");

            // Vérification des champs
            if (empty($nom) || empty($message)) {
                $error_msg = "Tous les champs sont obligatoires.";
            } else {
            }
        }

        // 3. Lecture des messages
    ?>

    <div class="container">
        <h1>Gestion de messages visiteurs</h1>

        <!-- Messages d'erreur ou succès -->
        <?php if ($error_msg): ?>
            <p class="error"><?= $error_msg ?></p>
        <?php endif ?>

        <?php if ($success_msg): ?>
            <p class="success"><?= $success_msg ?></p>
        <?php endif ?>

        <!-- Formulaire -->
        <form action="" method="post">
            <label for="nom">Nom du visiteur :</label>
            <input type="text" name="nom" placeholder="Votre nom">

            <label for="message">Message du visiteur</label>
            <textarea name="message" rows="4" placeholder="Votre message"></textarea>

            <button type="submit">Envoyer votre message</button>
        </form>

        <!-- Affichage des messages -->
    </div>
</body>

</html>