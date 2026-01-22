<?php
    // Inclure le fichier Utilisateur.php
    require_once "../exercice1/Utilisateur.php";

    // La classe Administrateur Hérite de la classe Utilisateur
    class Administrateur extends Utilisateur {
        private string $role;

        public function __construct(string $nom, string $email, string $role)
        {
            parent::__construct($nom, $email);
            $this->role = $role;
        }

    /**
     * Rédeclaration de la méthode afficherInfos()
     * C'est le Polymorphisme
     */
    public function afficherInfos(): void {
        parent::afficherInfos();
        echo "<br/>Rôle : <strong>{$this->role}</strong>";
    }
}