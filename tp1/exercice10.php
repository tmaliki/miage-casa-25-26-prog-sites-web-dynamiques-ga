<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10</title>
</head>
<body>
    <h1>Exercice 10</h1>

    <?php
        // ouverture en mode d'ajout du fichier
        $fichier = fopen("messages.txt", "a+");

        // Ecriture dans le fichier
        fwrite($fichier, "Bonjour PHP\n");

        // fermeture du fichier
        fclose($fichier);

        // Affichage de contenu du fichier
        // nl2br : Convertit les sauts de ligne en balises <br>
        // file_get_contents : Lit le contenu d'un fichier dans une chaîne
        echo nl2br(file_get_contents("messages.txt"));
    ?>
</body>
</html>