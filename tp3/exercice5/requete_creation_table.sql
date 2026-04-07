-- Utilisation de base
USE gestion_etudiants;

-- Création de la table classes
CREATE TABLE classes (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nom_classe VARCHAR(100) NOT NULL,

    CONSTRAINT nom_classe_unique UNIQUE(nom_classe)
);