<?php
// app/controllers/ProductController.php

class ProductController {
    public function show() {
        // Récupérer tous les produits depuis le modèle Product
        //$products = Product::getAllProducts();

        // Charger la vue product.php avec les produits récupérés
        require 'app/views/product.php';
    }

    public function showSingle($productId) {
        // Récupérer un produit spécifique par son ID depuis le modèle Product
        //$product = Product::getProductById($productId);

        // Charger la vue single_product.php avec le produit récupéré
        require 'app/views/single_product.php';
    }
}
?>
