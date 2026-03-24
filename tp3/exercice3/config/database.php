<?php
$hostname = "localhost"; // 127.0.0.1
$username = "root";
$password = "14root73"; // si le mot de passe est configuré, il faut le mettre, sinon laisser vide
$database = "gestion_etudiants";

try {
    // Etablissement de la connexion avec la base de données
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

    // Configurer le mode d'erreur de PDO pour lancer des exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
