-- Création de la base de données
CREATE DATABASE gestion_etudiants;

-- La base de données à utiliser pour les prochaines requêtes SQL
USE gestion_etudiants;

-- Création de la table "etudiants"
CREATE TABLE etudiants (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(200) NOT NULL,
    age INT UNSIGNED NOT NULL,

    CONSTRAINT email_unique UNIQUE (email)
);