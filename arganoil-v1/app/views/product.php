<!-- app/views/product.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Produits - Vente d'huile d'argan et huile de pépins</title>
    <!-- Lien vers le fichier CSS spécifique à la page "Produits" -->
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="app/views/assets/css/contact.css">


</head>
<body>
    <!--navbar--> 
<nav>

<p>add nav bar </p>
<?php require 'nav.php'?>
  
<div>
</nav>
    <h1>Nos Produits</h1>
    <!-- Le contenu de la page sera inclus ici en utilisant les contrôleurs -->
    <!-- Afficher la liste des produits récupérés depuis le contrôleur ProductController.php -->
    <?php /*foreach ($products as $product): */?>
        <div>
            <p>code du product </p>
        </div>
    <?php /*endforeach;*/ ?>






    <?php require 'footer.php'?>

