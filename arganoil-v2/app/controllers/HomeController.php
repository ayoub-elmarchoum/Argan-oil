<?php
// app/controllers/HomeController.php

class HomeController {
    public function show() {
        // Vous pouvez éventuellement récupérer des données spécifiques depuis le modèle pour afficher sur la page d'accueil
        // Exemple : $featuredProducts = Product::getFeaturedProducts();
        
           // Rediriger vers la page de connexion
        // Charger la vue home.php
        require 'app/views/home.php';
    }
}
?>
