<?php
    function diviser(int $a, int $b): float {
        if ($b === 0) {
            // Utilisation de throw pour déclencher une exception
            throw new Exception("Division par zéron impossible !");
        }
        return $a / $b;
    }

    // Utilisation de try..catch
    try {
        echo diviser(10, 2) . "<br>"; // Affiche 5
        echo diviser(30, 0) . "<br>"; // Déclenche une exception
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }