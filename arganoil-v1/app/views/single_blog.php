<!DOCTYPE html>
<html>
<head>
    <title>Article Details</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="app/views/assets/css/contact.css">
    <style>
.img-fluid,.title{
    width:50%;
    margin-left :25% ;
}
.title{

    width: 20%;
    margin-left :10% ;
}

      
</style>
</head>

<body>
    <!--navbar--> 
<nav>

<?php require 'nav.php'?>
  
 
</nav>
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
            echo '<div class="col-md-4">';
            echo '<img src="app/views/assets/images/images-blog/' . $articleDetails->images_name . '" alt="seokeyword" class="img-fluid">';
            echo '<h2 style="color: rgb(125, 86, 40);" class="title">' . $articleDetails->titre . '</h2>';
            echo '<p style="font-size: 150%;">' . $articleDetails->contenu . '</p>';
            echo '</div>';
        } else {
            echo "Article introuvable.";
        }
    } else {
        echo "ID d'article non valide.";
    }
?>
</body>

<footer>footer ici </footer>
<?php require 'footer.php'?>

</html>
