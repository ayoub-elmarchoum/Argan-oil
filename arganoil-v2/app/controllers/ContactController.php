<?php
// app/controllers/ContactController.php

class ContactController {
    public function show() {
        
        // Charger la vue contact.php
        require 'app/views/contact.php';
    }

    public function sendMail() {
        // Ici, vous pouvez implémenter la logique pour envoyer l'e-mail en utilisant les informations soumises par le formulaire de contact
        // Vous pouvez utiliser la fonction mail() de PHP ou une bibliothèque d'e-mail pour cela.
        // Assurez-vous de valider les données du formulaire avant de les utiliser pour éviter les attaques de sécurité.

        // Rediriger l'utilisateur vers la page de confirmation après l'envoi de l'e-mail
        header('Location: index.php?page=contact&success=true');
        exit;
    }
}
?>
