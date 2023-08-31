<!-- app/views/home.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vente d'huile d'argan et huile de pépins</title>
     <!-- favicon-->
     <link rel="icon" href="app/views/assets/images/image-nav/logo.ico" type="image/x-icon">
    <!-- Lien vers le fichier CSS spécifique à la page "Accueil" -->
      <!-- Meta Description Tag:   -->
      <meta name="description" content="Discover the essence of beauty with our Moroccan Wholesale Argan Oil and organic cosmetics products. Embrace tradition and nature as we harness the power of natural ingredients for skincare and haircare. Shop now for radiant beauty!">
    <!--   Meta Keywords Tag: -->
    <meta name="keywords" content="Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure"/>
<!--  <meta name="robots" content="index, follow">  -->
<meta name="robots" content="index, follow">
  <!--  Meta Description  -->
   <!--   
        -for social media you can add 
        <meta property="og:title" content="Buy Moroccan Wholesale Argan Oil and Organic Cosmetics">
        <meta property="og:description" content="Discover the essence of beauty with our premium Moroccan Wholesale Argan Oil and organic cosmetics products. Embrace tradition and nature for radiant skincare and haircare.">
        <meta property="og:image" content="url-to-image">
          <meta property="og:url" content="http://localhost/arganoil-v2/index.php?page=home"> 
      -->
               <!-- Meta SEO-->
  <meta name="author" content="Oriental group">
    <link rel="stylesheet" href="app/views/assets/css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/path/to/cdn/jquery.min.js"></script>
<link rel="stylesheet" href="venom-button.min.css" />
<script src="venom-button.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    <style>
        *{
    padding: 0;
    margin: 0;
    
}
     @import url('https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@300&display=swap');
     
  @import url('https://fonts.googleapis.com/css2?family=Arimo&family=Ubuntu&display=swap');
    .custom-font {
        font-family: 'lexend Giga', sans-serif;
        }
    section h1{
    margin-top: 4%;
    margin-bottom: 4%;
 }
.image {
opacity: 1;
display: block;
width: 100%;
height: auto;
transition: .5s ease;
backface-visibility: hidden;
}
.middle {
transition: .5s ease;
opacity: 0;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
text-align: center;
}
.col-md-4:hover .image{
opacity: 0.3;
}
.col-md-4:hover .middle{
opacity: 1;
}
.text {
color: black;
font-size: 30px;
padding: 16px 32px;
font-family: 'Arimo', sans-serif;
}
h1:hover{
    text-decoration: underline overline;
}
  .container .row .col-md-3{
    background-color:  rgb(0, 128, 0);
  }
  .container .row .col-md-3 img{
    width: 10%;
    height: 60%;
    padding-top: 13%;
    padding-bottom: 13%;
  }
  .container .row .col-md-3 h5{
    text-align: center;
    font-family: 'lexend Giga', sans-serif;
    color: white;
  }
  .container .row .col-md-3 p{
    text-align: center;
    color: white;
  }
  #col4  .img-fluid{
    width: 99%;
    padding: 2%;
    border-radius:18% ;
    background-color: rgb(0, 128, 0);
 }
  #col4  h3{
    text-align: center;
    font-family: 'lexend Giga', sans-serif;
    color: white;
}
#col4 p{
    color: white;
}
#col4 .btn {
   margin-left: 60%;
   border-radius: 20px;
   color:  rgb(0, 128, 0);
   background-color: #fff;
 }
 .video_container {
    display: inline-block;
    position: relative;
    width: 43%;
    overflow: hidden;
    margin-right: 3%;
    margin-left: 3%;
    margin-bottom: 100px;
    padding-top: 24.2%;
}
.video {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
    border-radius: 10px;
   
}

@media (max-width : 767px) {
.figureeeee{
    display : inline-block;
    width: 75%;
    margin-right: 12%;
    margin-left: 12%;
    text-align: center;
    margin-top: 40px;
}
#col4 {
    width: 87%;
    margin-left: -7%;
}
}
@media (max-width : 950px) {
    .container .row {
        align-items: center;
        margin-bottom:12px ;
        text-align: center;
    }
.video_container {
    display: inline-block;
    position: relative;
    width: 83%;
    overflow: hidden;
    margin-right: 8%;
    margin-left: 8%;
    margin-bottom: 100px;
    padding-top: 46%;
}
.video {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
    border-radius: 10px; 
}
#row1{
background-color:rgb(0, 128, 0) ;
}
h1:hover{
    text-decoration: underline;
}
}
    </style>
</head>
<body>

<nav>
<?php require 'nav.php'?>
</nav>
<div style=" width: 100%; height: 100%; background: white;">
<section>
    <h1 class="custom-font text-center text-uppercase" data-i18n="bestoffer">Best Offer</h1>
    <div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="app/views/assets/images/img-product/bulk.jpg" alt="BULK ARGAN OIL,Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure"class="image" >           
  <div class="middle">
<div class="text" data-i18n="bulk">BULK ARGAN OIL</div>
</div>
        </div>
        <div class="col-md-4">
            <img src="app/views/assets/images/img-product/label.jpg" alt="PRIVATE LABEL ARGAN OIL,Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure" class="image">
            <div class="middle">
<div class="text" data-i18n="private">PRIVATE LABEL ARGAN OIL</div>
</div>
        </div>
        <div class="col-md-4">
            <img src="app/views/assets/images/img-product/wholesale.jpg" alt="WHOLESALE ARGAN OIL,Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure" class="image">
            <div class="middle">
<div class="text" data-i18n="WHOLESALE">WHOLESALE ARGAN OIL</div>
</div>
        </div>
    </div>

<div class="container" >
<h1 class="custom-font text-center text-uppercase" data-i18n="whychooseourcompany">why choose our company</h1><hr>
<p class=" card-text text-center font-weight-bold " data-i18n="offers">We offer a variety of products and services to help you succeed</p>
    <div class="row" id="row1">
        <div class="col-md-3">
        <img src="app/views/assets/images/img-home/drop.png" alt="Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure" class="img-fluid w-100">
            <h5 >7000</h5>
            <p data-i18n="COLDPRESSEDARGANOIL">7000 LITRES OF COLD PRESSED ARGAN OIL SOLD AND DISTRIBUTED IN THE WORLDWIDE BY THE ARGAN OIL MOROCCO.</p>
        </div>
        <div class="col-md-3">
        <img src="app/views/assets/images/img-home/heart.png" alt="Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure" class="img-fluid w-100">
            <h5>100</h5>
            <p data-i18n="SATISFACTIONGUARANTEED">100% SATISFACTION GUARANTEED, EVERY SINGLE CUSTOMER WAS PLEASED.</p>
        </div>
        <div class="col-md-3">
        <img src="app/views/assets/images/img-home/check.png" alt="Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure" class="img-fluid w-100">
            <h5>80</h5>
            <p data-i18n="OURCUSTOMERS">80% OF OUR CUSTOMERS RETURN FOR MORE ORDERS, THE OTHER 20% WILL RE ORDER</p>
        </div>
        <div class="col-md-3">
        <img src="app/views/assets/images/img-home/gift.png" alt="Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure" class="img-fluid w-100">
            <h5>170</h5>
            <p data-i18n="FAMILIES">OVER 170 WOMEN & FAMILIES HELPED AND ASSISTED BY OUR COOPERATIVE IN MORROCCO</p>
        </div>
    </div>
</div>
<h1 class="custom-font text-center text-uppercase" data-i18n="latestblogaboutarganoil">latest blog about argan oil</h1>
<div class="container" id="col4"style="margin:auto;width:100%;">
    <div class="row " style="margin:auto;width:100%;">
    
        <?php
        require_once("app/models/blog.php");
        $req = Blog::getlatestBlog();
        if ($req->execute()) {
            while ($reponse = $req->fetch(PDO::FETCH_OBJ)) {
                ?>
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <div class="card border-0" style="background-color: rgb(0, 128, 0); border-radius: 10%;">
                        <img src="app/views/assets/images/images-blog/<?php echo $reponse->images_name; ?>" alt="Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure" class="card-img-top img-fluid">
                        <div class="card-body text-center">
                            <h3 class="card-title"><?php echo $reponse->titre; ?></h3>
                            <p class="card-text">
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
                        <div class="card-footer" style="border:none;background-color: #fffafa00;"> <a href="index.php?page=single_blog&id=<?php echo $reponse->id; ?>" class="btn btn-primary" data-i18n="readmore">Read More</a></div>
                        
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

<h1 class="custom-font text-center text-uppercase" data-i18n="whychooseourcompany">why choose our company</h1>
<div class="video_container">
        <iframe  class="video"  src="https://www.youtube.com/embed/CPrrWKGsfeQ" title="Oriental Group Factory - Argan Oil Production Process" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div> 

    <div class="video_container">
        <iframe  class="video"  src="https://www.youtube.com/embed/CANH9FedrQk" title="Oriental Group: our products - argan oil -moroccan black soap - rhassoul" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        
    </div> 

    <div class="video_container">
        <iframe  class="video"  src="https://www.youtube.com/embed/b4_nesjSrb0" title="Huile d’argan cosmétique" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video_container">
        <iframe  class="video"  src="https://www.youtube.com/embed/NUIKBfWBw7Q" title="Organic Argan Oil Manufacturer, wholesaler and brand-making industrie" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>  

</div>

      
</section>
  
        
<?php require "footer.php" ?>
    
<?php require 'button.php'?>

</div>
