<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="app/views/assets/images/image-nav/logo.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/navbar.css">
    <title>Argan Oil</title>
</head>
<body>
    <header>
        <!-- LOGO -->
        <p>Admin</p>
        <div class="group">
            <ul class="navigation">
                <li><a href="add_blog.php">add blog</a></li>
                <li><a href="delete_blog.php">delete blog</a></li>
                <li><a href="blog2.php">blog</a></li>
                <li><a href="#">Disabled</a></li>
            </ul>
            <div class="search">
                <span class="icon">
                    <ion-icon name="search-circle-outline" class="searchbtn"></ion-icon>
                    <ion-icon name="close-circle-outline" class="closebtn"></ion-icon>
                </span>
            </div>
            <ion-icon name="grid-outline" class="menuToggle"></ion-icon>
        </div>
        <div class="searchbox">
            <input type="text" placeholder="Search here ...">
        </div>
        <div class="link-content">
       
   <?php 
       session_start();

       if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
           echo '<a href="?logout=true">Logout</a>';
           if (isset($_GET['logout']) && $_GET['logout'] === "true") {
               // Perform logout operations here
               session_destroy(); // Destroy the session
               header('Location: login.php'); // Redirect to the login page
               exit; // Stop script execution
           }
       } else {
           header('Location: login.php'); // Redirect to login page if user is not logged in
           exit; // Stop script execution
       }
   ?>
</div>
    </header>
    <main>
    
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script >
    let searchBtn = document.querySelector('.searchbtn');
    let closeBtn = document.querySelector('.closebtn');
    let searchBox = document.querySelector('.searchbox');
    let navigation = document.querySelector('.navigation');
    let menuToggle= document.querySelector('.menuToggle');
    let header = document.querySelector('header');

    searchBtn.onclick = function(){
        searchBox.classList.add('active');
        closeBtn.classList.add('active');
        searchBtn.classList.add('active');
        menuToggle.classList.add('hide');
        header.classList.remove('open');
    }
    
    closeBtn.onclick = function(){
        searchBox.classList.remove('active');
        closeBtn.classList.remove('active');
        searchBtn.classList.remove('active');
        menuToggle.classList.remove('hide');
    }
    menuToggle.onclick = function(){
        header.classList.toggle('open');
        searchBox.classList.remove('active');
        closeBtn.classList.remove('active');
        searchBtn.classList.remove('active');
    }
    </script>


</body>
</html>