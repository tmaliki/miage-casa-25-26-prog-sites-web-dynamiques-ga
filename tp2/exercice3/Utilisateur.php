<?php
    // Inclure le fichier Authentifiable.php
    require_once "Authentifiable.php";

    // Déclaration de la classe Utilisateur
    class Utilisateur implements Authentifiable {
        // Déclaration des attributs de la classe
        private string $nom;
        private string $email;

        // Déclaration du constructeur de la classe
        public function __construct(string $nom, string $email) {
            $this->nom = $nom;
            $this->email = $email;
        }

        // Déclaration de la méthode afficherInfos()
        public function afficherInfos(): void {
            echo "Nom : <strong>{$this->nom}</strong><br/>";
            echo "Email : <strong>{$this->email}</strong>";
        }

        // Déclaration de la méthode seConnecter()
        public function seConnecter(): void {
            echo "<br/>L'utilisateur <strong>{$this->nom}</strong>s'est connecté.";
        }
    }
