<?php
/**
 * Déclaration de l'interface Authentifiable
 * 
 * Interface pour les objets pouvant s'authentifier
 * 
 * Cette inteface définit la méthode seConnecter pour les
 * objets qui peuvent s'authentifier
 * 
 * Une interface permet de  garantir que toutes les classes
 * qui l'implémentent fournissent une méthode d'authentification
 */

interface Authentifiable {
    public function seConnecter(): void;
}