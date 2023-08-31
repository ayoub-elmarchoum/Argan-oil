<?php 
include_once 'sub.php';
?>
<!DOCTYPE html>
<html>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="app/views/assets/css/contact.css">-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="app/views/assets/css/contact2.css">

<title>Contact US</title>

</head> 
<body>
<nav>

<?php require 'nav.php'?>
</nav>
    <section>
<h1 class="text text-center" data-i18n="contactus">Contact Us</h1>
<br><br>
    <?php if(!empty($statusMsg)){ ?>
    <div class="status-msg text-center <?php echo $status; ?>"><?php echo htmlspecialchars($statusMsg);?></div>
 <?php } ?>
 <div class="container">
 <div class="row justify-content-center">
   <div class="col-md-9">
    <form action="" method="post" >
        <div class="mb-3">
            <label for="name" class="ml-4" style="width=100%"data-i18n="name">Name</label><br>
            <div class="col-sm-12">
            <input type="text"  class="form-control " name="name"  placeholder="Enter your name" value="<?php echo !empty($postData['name'])? htmlspecialchars($postData['name']):''; ?>"  autocomplete="off" data-i18n="Enteryourname"><br>
            <?php if (!empty($valE['name'])) { ?>
            <p class="error-msg" data-i18n="errorMsg"><?php echo $valE['name']; ?></p>
        <?php } ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="phone" class="ml-4" data-i18n="phone">Phone number</label><br>
            <div class="col-sm-12">
            <input type="text" class="form-control" name="phone"   placeholder="Enter your phone" value="<?php echo !empty($postData['phone'])? htmlspecialchars($postData['phone']):''; ?>"  autocomplete="off"  data-i18n="Enteryourphone"><br>
            <?php if (!empty($valE['phone'])) { ?>
            <p class="error-msg"><?php echo $valE['phone']; ?></p>
        <?php } ?>
        </div>
        <div class="mb-3">
            <label for="email" class="ml-4" data-i18n="mail">Email</label><br>
            <div class="col-sm-12">
            <input type="email"  class="form-control" name="email"  placeholder="Enter your email" value="<?php echo !empty($postData['email'])? htmlspecialchars($postData['email']):''; ?>"  autocomplete="off"  data-i18n="Enteryourmail"><br>
            <?php if (!empty($valE['email'])) { ?>
            <p class="error-msg" ><?php echo $valE['email']; ?></p>
        <?php } ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="subject" class=" ml-4" data-i18n="subject">Subject</label><br>
            <div class="col-sm-12">
            <input type="text"  class="form-control" name="subject"  placeholder="Enter subject" value="<?php echo !empty($postData['subject'])? htmlspecialchars($postData['subject']):''; ?>"  autocomplete="off"  data-i18n="Enteryoursubject"><br>
            <?php if (!empty($valE['subject'])) { ?>
            <p class="error-msg"><?php echo $valE['subject']; ?></p>
        <?php } ?>  
            </div>  
        </div>
        <div class="mb-3">
            <label for="message" class="ml-4" data-i18n="message">Message</label><br>
            <div class="col-sm-12">
            <textarea name="message" style="height: 100px; max-height:220px;" class="form-control" placeholder="Type your message here"  autocomplete="off"  data-i18n="Enteryourmessage"><?php echo !empty($postData['message'])? htmlspecialchars($postData['message']):''; ?></textarea><br>
            <?php if (!empty($valE['message'])) { ?>
            <p class="error-msg"><?php echo $valE['message']; ?></p>
        <?php } ?>
            </div>
        </div>
        <div class="mb-3">
            <div name="reca" class="g-recaptcha" data-sitekey="<?php echo $siteKey;?>"> </div>
            <?php if (!empty($valE['reca'])) { ?>
            <p class="error-msg" style="color:red;margin-left: 3%;margin-top:1%;"><?php echo $valE['reca']; ?></p>
        <?php } ?>
        </div>
        <button type="Submit" class="btn btn-success rounded-pill btn-lg" name="Submit" data-i18n="send">Send</button>
        </form>
        </div>
        </div>
       </div>
       <div class="mb-3"></div>
       <!-- Contact information section -->

    <!-- Left column: Argan oil Morocco details -->
       <div class="mr-2">
    <div class="container text-center">
  <div class="row">
  <div class="col-md-6 ">
  <div class="row justify-content-center">
  <div class="col-6">
    <h2 data-i18n="arganOilMorocco">Argan oil Morocco</h2>
  <p data-i18n="address">Oriental group N°200 Lot Elmassar,Sidi Ghanem Industrial Estate Route de Safi, 40 000 Marrakech, MOROCCO</p>
  <span data-i18n="email">Email: </span><a href="mailto:contact@argan-oil.ma ">contact@argan-oil.ma </a><p></p>
  <span data-i18n="phoneNumber">Phone number:</span> <a href="tel:+212 524 335 449 ">+212 524 335 449</a><p></p>
   <span data-i18n="faxNumber">Fax number:</span> <a href="tel:+212 524 457 961 ">+212 524 457 961 </a><p></p>
  <span data-i18n="whatsappTelegram"> Whatsapp / telegram :</span> <a href="tel:+212 600 604 387 ">+212 600 604 387</a>
      </div>
  </div>
  </div>
    <!-- Right column: Business Hours and Social Media Links -->

      <div class="col-md-5">
      <div class="row justify-content-center">
    <div class="col-5">
    <h2 data-i18n="businessHours">Business Hours</h2>
    <pre data-i18n="Hours"> Monday - Friday
        09:00 am - 07:00 pm
        Saturday
        09:00 am - 12:00 pm
        Sunday
        Closed</pre>
        <div class=""style=" width:250%; margin-left:-70%;margin-top:18%;">
        <a href="https://wa.me/+212600604387" class="whatsapp"> <img src="app/views/assets/images/icon/whatsapp.png" alt="Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure"></a>
        <a href="https://www.instagram.com/group_oriental/" class="instagram"> <img src="app/views/assets/images/icon/insta.png" alt="Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure"></a>
        <a href="https://web.facebook.com/grouporiental" class="facebook"> <img src="app/views/assets/images/icon/fb.png" alt="Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure"></a>
        <a href="https://www.youtube.com/@orientalgroupsarlau7063" class="youtube"> <img src="app/views/assets/images/icon/youtube.png" alt="Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure"></a>
        <a href="mailto:contact@argan-oil.ma" class="email"> <img src="app/views/assets/images/icon/email.png" alt="Argan oil,argan oil benefits ,organic argan oil ,pure argan oil ,Moroccan argan oil, argan oil for hair ,argan oil for skin ,best argan oil products ,buy argan oil online ,argan oil uses, argan oil cosmetics, argan oil extraction process, cold-pressed argan oil, argan oil moisturizer ,natural beauty products, argan oil anti-aging, Argan oil benefits for skin, prickly pear oil,bulk, beauty products, beauty brand,beauty products online,argan oil of morocco,argan oil for face,argan oil price, 100%pure"></a>
  </div>
  </div>
    </div>
      </div>
      </div>
<!-- Google Maps iframe for displaying location -->
        <div class="mt-3">
      <div class="embed-responsive embed-responsive-16by9" style="width: 110%; height: 500px;margin-left:-4%;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.4353303347075!2d-8.043796925222656!3d31.676665039405027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafec7401bde29f%3A0x3aea484680928271!2sOriental%20GROUP!5e0!3m2!1sfr!2sma!4v1693341043985!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
    </div>
      </div>
      </section>
<?php require "footer.php" ?>

