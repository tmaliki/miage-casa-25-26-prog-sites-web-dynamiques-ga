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
    // 1. Initialisation des variables
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
            /**
             * Sécurisation des données contre XSS
             * en utilisant htmlspecialchars()
             */
            $nom = htmlspecialchars($nom);
            $message = htmlspecialchars($message);

            // Date actuelle
            $date = date("d/m/Y H:i");

            // Format de message à enregistrer
            $contenu = "Nom : $nom\n"; // Iniatialisation de la variable
            $contenu .= "Message : $message\n"; // concaténation
            $contenu .= "Date d'ajout : $date\n";
            $contenu .= "-------------------------\n";

            // Enregistrement dans le fichier
            $handle = fopen($fichier, "a");
            if ($handle) {
                fwrite($handle, $contenu);
                fclose($handle);
                $success_msg = "Message enregistré avec succès.";
            } else {
                $error_msg = "Erreur lors de l'ouverture du fichier";
            }
        }
    }

    // 3. Lecture des messages
    if (file_exists($fichier)) {
        // récupération du contenu des messages
        $messages = file_get_contents($fichier);
    }
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

            <button type="submit" class="btn">Envoyer votre message</button>
        </form>

        <!-- Affichage des messages -->
        <h2>Messages enregistrés</h2>
        <?php if (!empty($messages)): ?>
            <pre><?= $messages ?></pre>
        <?php else: ?>
            <p>Aucun message enregistré pour le moment</p>
        <?php endif ?>
    </div>
</body>

</html>