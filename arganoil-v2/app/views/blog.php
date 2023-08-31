

<!-- app/views/blog.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
     <title>Argan Oil Blogs</title>

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

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="app/views/assets/css/Blog.css">
    <style>
  

    </style>
</head>
<body>
 <!--navbar--> 
<nav>
<?php require 'nav.php'?>
</nav>
<section style="width:95%;margin: auto;">
        <br>
        <div style="width:100%;align-items: center;text-align: center;">
         
        <h1 class="text text-center" data-i18n="NOSBLOGS">NOS BLOGS</h1>

            <hr style="width: 50%;height: 3px;background: #e6e6e6;border: none;margin: auto;">
            <br>

            <p><span data-i18n="at">At</span>&ensp;<strong ><a href="https://group-oriental.com/fr/" style="color: black;" data-i18n="arganoil">Argan Oil Morocco</a></strong><span data-i18n="weoffer"> , we offer cosmetic Argan oil and Argan food that can be purchased individually, through bulk orders,and <br>
                wholesales. We also offer our products with private labels.
                <br>
                <br>
                We supply major retailers around the world, including Europe, USA,
                Canada,<br> Japan, South Korea, Australia, and more.</span>
            </p>
        </div>
      
      <br>
       
         <hr>
      
      <br>


<div class="container">
<div class="row">
    <?php
    require_once("app/models/blog.php");
    $req = Blog::getAllBlogs();
    
    if ($req->execute()) {
        while ($reponse = $req->fetch(PDO::FETCH_OBJ)) {
    ?>
        <div class="col-md-4 mb-4 d-flex align-items-stretch">
            <div class="card shadow">
                <img src="app/views/assets/images/images-blog/<?php echo $reponse->images_name; ?>" alt="<?php echo $reponse->keywords; ?>" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title" style="color: rgb(125, 86, 40);"><?php echo $reponse->titre; ?></h3>
                    <p class="card-text" style="font-size: 150%;">
                        <?php
                        $contenuAbrege = substr($reponse->contenu, 0, 50);
                        if (strlen($reponse->contenu) > 50) {
                            echo $contenuAbrege . "...";
                        } else {
                            echo $contenuAbrege;
                        }
                        ?>
                    </p>
                    </div>
                <p style="margin-bottom:0% ;"><a href="index.php?page=single_blog&id=<?php echo $reponse->id; ?>" class="btn btn-success" style="width:100%;height:100%;border-radius: 0%;" role="button">Read More</a></p>
            </div>
        </div>
    <?php
        }
    } else {
        var_dump($req->errorInfo()); // Debugging for query execution errors
    }
    ?>
</div>


</div>
    
<?php require 'footer.php'?>
