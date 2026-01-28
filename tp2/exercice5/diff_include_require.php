<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 - Différence entre include et require</title>
</head>

<body>
    <h1>Exercice 5 - Différence entre include et require</h1>

    <h3>1 - include</h3>
    <ul>
        <li>Sert à inclure un fichier PHP dan sun autre fichier</li>
        <li>Le script continue même si le fichier n'est pas trouvé</li>
    </ul>
    <?php
    // Exemple :
    include "header.php";
    echo "<p>Contenu principal de la page.</p>";
    ?>
    <p>Si <b>header.php</b> n'existe pas, PHP affiche une avertissement mais exécute le reste du code.</p>

    <h3>2 - include_once</h3>
    <ul>
        <li>Indentique à include</li>
        <li>Mais le fichier n'est inclus qu'une seule fois, mêlme s'il est appelé plusieurs fois.</li>
    </ul>
    <?php
    // Exemple :
    include_once "config.php";
    include_once "header.php"; // sera ignoré
    ?>

    <h3>3 - require</h3>
    <ul>
        <li>Inclut un <strong>fichier indispensable</strong> au fontionnement du script</li>
        <li>Si le fichier est absent cela entraine un arrêt immédiat du script</li>
    </ul>
    <?php
    // Exemple :
    require "database.php";
    echo "<p>Connexion à la base de données réussie.</p>";
    ?>
    <p>Si <b>database.php</b> n'existe pas, le script ne s'exécute pas</p>

    <h3>4 - require_once</h3>
    <ul>
        <li>
            Combine les avantages de :
            <ul>
                <li>require</li>
                <li>include_once</li>
            </ul>
        </li>
        <li>Le fichier est obligatoire et n'est inclus qu'une seule fois</li>
        <?php
            // Exemple :
            require_once "autoload.php";
            echo "<p>Chargement des données importantes.</p>";
        ?>
    </ul>
    <p>Si <b>autoload.php</b> n'existe pas, le script ne s'exécute pas</p>
</body>

</html>