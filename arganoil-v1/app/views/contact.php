<?php 
include_once 'sub.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewporgb(255, 255, 255)dth=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/views/assets/css/contact.css">
    <title>Argan Oil</title>
    <script src="map.js"></script>
    <title>Contact Us</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<!--navbar--> 
<nav>

<p>add nav bar </p>
<?php require 'nav.php'?>
   </nav>
  
    <h1>Contact Us</h1>
    <div id="contact">
    <?php if(!empty($statusMsg)){ ?>
    <div class="status-msg <?php echo $status; ?>"><?php echo htmlspecialchars($statusMsg);?></div>
<?php } ?>
    <form action="" method="post" class="cnt-form">

        <div class="form-input">
            <label for="name">Name</label><br>
            <input type="text" name="name" placeholder="Enter your name" value="<?php echo !empty($postData['name'])? htmlspecialchars($postData['name']):''; ?>"  autocomplete="off"><br>
            <?php if (!empty($valE['name'])) { ?>
            <p class="error-msg"><?php echo $valE['name']; ?></p>
        <?php } ?>
        </div>
        <div class="form-input">
            <label for="phone" >Phone number</label><br>
            <input type="text" name="phone" placeholder="Enter your phone" value="<?php echo !empty($postData['phone'])? htmlspecialchars($postData['phone']):''; ?>"  autocomplete="off"><br>
            <?php if (!empty($valE['phone'])) { ?>
            <p class="error-msg"><?php echo $valE['phone']; ?></p>
        <?php } ?>
        </div>
        <div class="form-input">
            <label for="email">Email</label><br>
            <input type="email" name="email" placeholder="Enter your email" value="<?php echo !empty($postData['email'])? htmlspecialchars($postData['email']):''; ?>"  autocomplete="off"><br>
            <?php if (!empty($valE['email'])) { ?>
            <p class="error-msg"><?php echo $valE['email']; ?></p>
        <?php } ?>
        
        </div>
        <div class="form-input">
            <label for="subject">Subject</label><br>
            <input type="text" name="subject" placeholder="Enter subject" value="<?php echo !empty($postData['subject'])? htmlspecialchars($postData['subject']):''; ?>"  autocomplete="off"><br>
            <?php if (!empty($valE['subject'])) { ?>
            <p class="error-msg"><?php echo $valE['subject']; ?></p>
        <?php } ?>    
        </div>
        <div class="form-input">
            <label for="message">Message</label><br>
            <textarea name="message" placeholder="Type your message here"  autocomplete="off"><?php echo !empty($postData['message'])? htmlspecialchars($postData['message']):''; ?></textarea><br>
            <?php if (!empty($valE['message'])) { ?>
            <p class="error-msg"><?php echo $valE['message']; ?></p>
        <?php } ?>
        </div>
        <div class="form-input">
            <div name="reca" class="g-recaptcha" data-sitekey="<?php echo $siteKey;?>"> </div>
            <?php if (!empty($valE['reca'])) { ?>
            <p class="error-msg"><?php echo $valE['reca']; ?></p>
        <?php } ?>
        </div>
        <input type="submit" name="submit" class="btn" value="Send">
    </form>
    </div>
            </div>
    <div class="infos">
<div class="Argan">
    <h2>Argan oil Morocco</h2>
  <div id="ori">  <p>Oriental group N°200 Lot Elmassar,Sidi Ghanem Industrial Estate Route de Safi, 40 000 Marrakech, MOROCCO</p></div>
   <div id="ental"> <p>Email: <a href="mailto:contact@argan-oil.ma ">contact@argan-oil.ma </a></p>
    <p>Phone number: <a href="tel:+212 524 335 449 ">+212 524 335 449 </a></p>
        <p>Fax number: <a href="tel:+212 524 457 961 ">+212 524 457 961 </a></p>
        
       <p> Whatsapp/ wechat / telegram : <a href="tel:+212 600 604 387 ">+212 600 604 387</a></p>
    </form>
</div>

</div>
<div class="hours">
   <div class="day">
    <h2>Business Hours</h2>
    <pre>Monday - Friday
        09:00 am - 07:00 pm
        Saturday
        09:00 am - 12:00 pm
        Sunday
        Closed</pre></div> 

        <div id="social-icons">
       <div id="icon">
        <a href="https://wa.me/1234567890" class="whatsapp"> <img src="app/views/assets/images/icon/whatsapp.png" alt="whatsapp"></a>
        <a href="https://www.instagram.com/group_oriental/" class="instagram"> <img src="app/views/assets/images/icon/insta.png" alt="instagram"></a>
        <a href="https://web.facebook.com/grouporiental" class="facebook"> <img src="app/views/assets/images/icon/fb.png" alt="facebook"></a>
        <a href="https://www.youtube.com/@orientalgroupsarlau7063" class="youtube"> <img src="app/views/assets/images/icon/youtube.png" alt="youtube"></a>
        <a href="mailto:contact@argan-oil.ma" class="email"> <img src="app/views/assets/images/icon/email.png" alt="email"></a>
        </div>
            </div>
    </div>
    </div>
</div>
    <div id="map">
    
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6790.87102922457!2d-8.041222!3d31.67666!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafec7401bde29f%3A0x3aea484680928271!2sOriental%20GROUP!5e0!3m2!1sfr!2sma!4v1691413404940!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php require 'footer.php'?>

