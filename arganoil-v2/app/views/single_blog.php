<!DOCTYPE html>
<html>
<head>
     <!-- Meta SEO-->

        <!-- favicon-->
        <link rel="icon" href="app/views/assets/images/image-nav/logo.ico" type="image/x-icon">
       <!--  bootstrapp  -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <!--  javascript bootstrap  -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!--  bootstrapp  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <!--  Meta  Title Tag -->
    
     <title>Wholesale  Argan Oil Product</title>
      <!-- Meta Description Tag:   -->
      <meta name="description" content="Discover the essence of beauty with our Moroccan Wholesale Argan Oil and organic cosmetics products. Embrace tradition and nature as we harness the power of natural ingredients for skincare and haircare. Shop now for radiant beauty!">
     <!--   Meta Keywords Tag: -->
     <meta name="keywords" content="Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure"/>

     <!--  Canonical Tag:   -->
     <link rel="canonical" href="http://localhost/arganoil-v2/index.php?page=contact">
     <!--  <meta name="robots" content="index, follow">  -->
     <meta name="robots" content="index, follow">
     <!--  Meta Description  -->
     <meta name="description" content="Buy Moroccan Wholesale argan oil and organic cosmetics products company. Using traditional ingredients and natural products for beauty skincare haircare." />
     <meta name="author" content="Oriental group">
     <!--   
        -for social media you can add 
        <meta property="og:title" content="Buy Moroccan Wholesale Argan Oil and Organic Cosmetics">
        <meta property="og:description" content="Discover the essence of beauty with our premium Moroccan Wholesale Argan Oil and organic cosmetics products. Embrace tradition and nature for radiant skincare and haircare.">
        <meta property="og:image" content="url-to-image">
          <meta property="og:url" content="http://localhost/arganoil-v2/index.php?page=home"> 
      -->
    <link rel="stylesheet" href="app/views/assets/css/single_blog.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@300&display=swap');
    
</style>
</head>


<body>
  
<nav>

<?php require 'nav.php'?>
  
 
</nav>
<br>
<section style="width: 90%; height: 100%; background: white;margin: auto;">
<?php

    
    // Inclure la connexion à la base de données
    require_once("app/models/config.php");
    require_once("app/models/blog.php");
    $req = Blog::getSingleBlogs();
    
    // Vérifier si l'ID de l'article est passé dans l'URL
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $articleId = $_GET['id'];
        // Requête SQL pour récupérer les détails de l'article
      
        $req->execute([$articleId]);
        $articleDetails = $req->fetch(PDO::FETCH_OBJ);
        // Vérifier si l'article existe
        if ($articleDetails) {
            echo '<div class="d-flex flex-column" style="width:100%;align-items: center;text-align: center;">';
            echo '<img src="app/views/assets/images/images-blog/' . $articleDetails->images_name . '" alt="seokeyword" class="img-fluid" style="width: auto;">';
         
            echo '  <p class="title">' . $articleDetails->titre . '</p>';
            echo '</div>';
            echo ' <p class="info">' . $articleDetails->contenu . '</p>';
            
        } else {
            echo "Article introuvable.";
        }
    } else {
        echo "ID d'article non valide.";
    }
?>
<br>
<div class="d-flex justify-content-end" style="width: 90%;margin: auto;">
    <a class="btn btn-success" href="index.php?page=contact" role="button" data-i18n="contactussingle">contact us</a>
</div>
</section>
<br>
<?php require 'footer.php'?>


