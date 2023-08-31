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
     <title>Argan Oil </title>

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

   
    <!-- Link to Bootstrap 4.5.2 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to Bootstrap 4.0.0 CSS -->
    <style>
    
    .footer {
        background-color: #0A2209;
        padding: 50px 0;
        color: #fff;
      }
      
      
    .col-md-4 h4 {
        color: #06FF00;
        margin-bottom: 20px;
      }
      .col-md-4 {
        margin-top: 30px;
      }
    
      
      
      .footer p {
        font-size: 20px;
        color: white;
      }
      
      .newsletter input[type="email"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
      }
      
      .newsletter button {
        margin-top: 10px;
      }
      
      
      
      .location-icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        background: url('path-to-location-icon.png') no-repeat center;
        vertical-align: middle;
      }
      
      .menu-links a {
        font-size: 20px;
        color: #fff;
        text-decoration: none;
        line-height:  1.8;
        margin-bottom: 20px; 
        transition: color 0.3s ease-in-out;
        padding-top: 10px;
      }
      
      
      .menu-links a:hover {
        color: #06FF00;
      }
      
      .brand-logos img {
        max-width: 80px;
        margin: 10px;
      }
      
      hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border-color: #666;
      }
      
      .footer p.copyright {
        font-size: 12px;
        margin-top: 20px;
      }
      input[type=submit] {
        background-color: #20931D;
        color: white; 
        border: none;
        border-radius: 40px;
        cursor: pointer;
        float: right;
        padding: 10px;
        width: 20%;
        flex-shrink: 0;
      
      }
      
      
      @media (max-width: 700px) {
        .footer {
          padding: 30px 0;
        }

        input[type=submit] {
        background-color: #20931D;
        color: white; 
        border: none;
        border-radius: 40px;
        cursor: pointer;
        float: right;
        padding: 10px;
        width: 20%;
        flex-shrink: 0;
        margin-bottom: 3%;
        margin-left: 2%;

      }
      }
     </style>
  
 
    </head>
    <body>
    
    

    <footer class="footer">
        <div class="container">
        <?php require_once("app/models/news.php"); ?>

        
        <div class="row">
            <div class="col-md-6">
            <div class="newsletter">
                <h4 data-i18n="subscribeNewsletter">Subscribe to Our Newsletter</h4>
    
            </div>
            </div>
            <div class="col-md-6">
        <div class="social-links">
            <form class="form-inline justify-content-end" action="" method="post" id="myform">
                <div class="form-group mx-sm-3">
                    <input name="email" type="email" class="form-control" placeholder="Enter your email" value="<?php echo !empty($postData['email'])? htmlspecialchars($postData['email']):''; ?>">
                </div>
                <input type="submit" class="btn btn-primary" value="Send" name="Submit2" data-i18n="Enteryourmailfooter">
                <?php if (!empty($valE['email'])) { ?>
                    <p class="error-msg"><?php echo $valE['email']; ?></p>
                <?php } ?>  
            </form>
        </div>
    </div>
        </div>
        <!-- Rows under the newsletter input -->
        <div class="row">
            <div class="col-md-4">
            <h4 data-i18n="ourOffice">OUR OFFICE</h4>
            <span class="location-icon"></span>
            <pre style="color:#fff;">Lorem ipsum street Block B Number 08,
Jakarta, Indonesia, 12345</pre> 
                <a href="tel:+212 524 335 449 ">+212 524 335 449 </a><br>
                <a href="mailto:contact@argan-oil.ma ">contact@argan-oil.ma </a>
            
            </div>
            <div class="col-md-4">
            <h4>MENU</h4>
            <div class="menu-links">
                <a href="index.php?page=home" data-i18n="home">HOME</a><br>
                <a href="index.php?page=about" data-i18n="about">ABOUT</a><br>
                <a href="index.php?page=product" data-i18n="product">PRODUCTS</a><br>
                <a href="index.php?page=blog" data-i18n="blog">BLOG</a><br>
                <a href="index.php?page=contact" data-i18n="contact">CONTACT</a><br>
            </div>
            </div>
            <div class="col-md-4">
            <h4 data-i18n="ourBrands">OUR BRANDS</h4>
            <div class="brand-logos">
                <img class="brand-logo" src="app\views\assets\images\icon\brand1.png" alt="Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure">
                <img class="brand-logo" src="app\views\assets\images\icon\brand2.png" alt="Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure">
            </div>
           
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <p>&copy; 2023 Your Website. All rights reserved.</p>
            </div>
        </div>
        </div>
    </footer>

    <!-- Link to Bootstrap's JavaScript and jQuery (required for some features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

      
</body>
 </html>

