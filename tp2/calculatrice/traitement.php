<?php
    require_once("./Calculatrice.php");

    $resultat = null;
    $erreur = null;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        try {
            // Condition en cas de champs vides ou opérateur non sélecteur
            if (
                !isset($_POST["a"], $_POST["b"], $_POST["operateur"]) ||
                $_POST["a"] === "" || $_POST["b"] === "" || $_POST["operateur"] === ""
            ) {
                throw new Exception("Tous les champs doivent être remplis.");
            }

            $a = (float)$_POST["a"];
            $b = (float)$_POST["b"];
            $operateur = $_POST["operateur"];

            $objet_cal = new Calculatrice();
            $resultat = $objet_cal->main($a, $b, $operateur);
        } catch (Exception $e) {
            $erreur = $e->getMessage();
        }
    }