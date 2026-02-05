<?php
    $email = $_POST['email'] ?? '';
    $age = $_POST['age'] ?? '';

    /**
     * Validation des données du formulaire
     * Vérifie si l'email et l'âge sont valides
     * filter_var : filtre et valide les données
     * FILTER_VALIDATE_EMAIL : valide l'adresse email
     * FILTER_VALIDATE_INT : valide l'âge (doit être un entier)
     */
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($age, FILTER_VALIDATE_INT)) {
        echo "Les données sont valides.";
    } else {
        echo "Les données sont invalides.";
    }