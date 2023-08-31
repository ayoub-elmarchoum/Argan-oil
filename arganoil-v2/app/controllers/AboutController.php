<?php
// app/controllers/AboutController.php

class AboutController {
    public function show() {
        // Vous pouvez éventuellement récupérer des données spécifiques depuis le modèle pour afficher sur la page "À propos"
        // Exemple : $teamMembers = About::getTeamMembers();

        // Charger la vue about.php
        require 'app/views/about.php';
    }
}
?>
