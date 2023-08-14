<?php
// index.php (Point d'entrée de l'application)

// Inclure le fichier de configuration
require 'app/models/config.php';
  
// Démarrer la session
session_start();

// Inclure les fichiers des contrôleurs
//home
require 'app/controllers/HomeController.php';
//about
require 'app/controllers/AboutController.php';
//contact
require 'app/controllers/ContactController.php';
//product
require 'app/controllers/ProductController.php';
//blog
require 'app/controllers/BlogController.php'; // Ajoutez le contrôleur LoginController.php
//Single blog
require 'app/controllers/SingleBlogController.php';
// Charger le contrôleur approprié en fonction de l'URL
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'about':
            $controller = new AboutController();
            break;
        case 'blog':
            $controller = new BlogController();
            break;
        case 'contact':
            $controller = new ContactController();
            break;
        case 'product':
            $controller = new ProductController();
            break;
        case 'single_blog':
                $controller = new SingleBlogController();
                break;
        // Ajoutez ici d'autres pages si nécessaire
        default:
            $controller = new HomeController();
    }
} else {
    // Si aucune page spécifiée, afficher la page d'accueil par défaut
    $controller = new HomeController();
}

// Appeler la méthode "show()" du contrôleur approprié pour afficher la page correspondante
$controller->show();
?>