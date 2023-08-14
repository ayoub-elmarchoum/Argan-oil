<!DOCTYPE html>
<html>
<head>
    <title>Article Details</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
<?php
    session_start();

    // Inclure la connexion à la base de données
    require_once("database.php");

    // Vérifier si l'ID de l'article est passé dans l'URL
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $articleId = $_GET['id'];

        // Requête SQL pour récupérer les détails de l'article
        $stmt = $db->prepare("SELECT * FROM all_articles WHERE id = ?");
        $stmt->execute([$articleId]);
        $articleDetails = $stmt->fetch(PDO::FETCH_OBJ);
        
        // Vérifier si l'article existe
        if ($articleDetails) {
            echo '<div class="col-md-4">';
            echo '<img src="images/' . $articleDetails->images_name . '" alt="Image" class="img-fluid">';
            echo '<h1 style="color: rgb(125, 86, 40);" class="title">' . $articleDetails->titre . '</h1>';
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
</html>
