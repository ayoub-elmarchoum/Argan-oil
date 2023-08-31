<?php
// app/controllers/ProductController.php

class Product1Controller {
    public function show() {
        // Récupérer tous les produits depuis le modèle Product
        //$products = Product::getAllProducts();

        // Charger la vue product.php avec les produits récupérés
        require 'app/views/product1.php';
    }

 
}
?>
