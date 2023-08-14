<?php

//require_once("head.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Admin</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?action=add_article">add article</article></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?action=delete_article">supp ou modifier article</article></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


</div>



</div>

<div class="center">
  <h1>Administration</h1><br><br><br>
 

  <?php
if (isset($_GET['action'])) {
  if ($_GET['action'] == 'add_article') {
    require_once("../app/models/config.php");
    if (isset($_POST['submit'])) {
      extract($_POST);
      print_r($_FILES['fichier']);

      $content_dir = '../app/views/assets/images/images-blog/';
      $tmp_file = $_FILES['fichier']["tmp_name"];

      if (!is_uploaded_file($tmp_file)) { 
        exit('le fichier est introuvable');
      }
      $type_file = $_FILES['fichier']['type'];

      if (!strstr($type_file, "jpeg") && !strstr($type_file, 'png')) { 
        exit('ce fichier n est pas une image');
      }

      $name_file = time().'.jpg'; 
    if (!move_uploaded_file($tmp_file, $content_dir.$name_file)) {
      exit('impossible de copier le fichier');
}

      $db=connectDb();
      $save_article = $db->prepare('INSERT INTO all_articles (titre, contenu, images_name) VALUES (?, ?, ?)');
      $save_article->execute(array($titre, $contenu, $name_file));
      echo "Operation reussie";
    } // Fermer la condition if (isset($_POST['submit']))
 
?>

      <h3>Ajouter un article</h3>
      <form method="POST" action="" enctype="multipart/form-data">
        <br><br> 
        <input type="text" name="titre" placeholder="entrer le titre de l'article" required="" class="form form-control"><br>
        <textarea name="contenu" placeholder="entrer le contenu de l'article" class="form form-control"></textarea><br>
        <input type="file" name="fichier"><br><br>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary"> 
      </form>
 
    <?php
    } // Fermer la condition if ($_GET['action'] == 'add_article')
  }
  
  // Fermer la condition if (isset($_GET['action']))

  






    
  

  ?>
</div>
 <?php
session_start();
 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo '<a href="?logout=true">Logout</a>';
    if (isset($_GET['logout']) && $_GET['logout'] === "true") {
        // Effectuer les opérations de déconnexion ici
        session_destroy(); // Détruire la session
        header('Location: login.php'); // Rediriger vers la page de connexion
        exit; // Arrêter l'exécution du script
    }
} else {
    header('Location: login.php'); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit; // Arrêter l'exécution du script
}
?>

<?php
require_once("fot.php");


?>


