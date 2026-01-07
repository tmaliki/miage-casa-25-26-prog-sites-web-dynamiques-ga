<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Exercice 5</h1>

    <?php
        // array : type tableau 
        function calculerMoyenne(array $notes) {
            $somme = array_sum($notes);
            $nbr_element = count($notes);
            return  $somme / $nbr_element; // moyenne
        }

        // test de la fonction
        $notes = [15, 16.5, 17, 9, 13.75, 7];
        $moyenne = calculerMoyenne($notes);
        echo "La moyenne des notes est : " . $moyenne;

        // Utilisation de la boucle pour calculer la moyenne
        function calculerMoyenneBoucle($tableau) {
            $nbr_elt = count($tableau);
            
            $somme = 0;
            for($i = 0; $i < count($tableau); $i++) {
                $somme += $tableau[$i];
            }

            return $somme / $nbr_elt;
        }

        $moy = calculerMoyenneBoucle($notes);
        echo "<br/>Utilisation boucle - La moyenne des notes est : " . $moy;
    ?>
</body>
</html>