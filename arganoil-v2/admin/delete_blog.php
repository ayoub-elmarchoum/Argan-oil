<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="app/views/assets/images/image-nav/logo.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/delete_blog.css">
    <link rel="stylesheet" href="css/blogg.css">

    <title>Argan Oil</title>
    <style>
       
    </style>
</head>
<body>
<?php
require_once("nav.php");

// Inclure la connexion à la base de données
require_once("../app/models/config.php");
$db=connectDb();

// Traitement de la recherche
if(isset($_GET['search_keyword'])) {
    $searchKeyword = '%' . $_GET['search_keyword'] . '%';
    $req = $db->prepare("SELECT * FROM blogs WHERE titre LIKE :keyword OR contenu LIKE :keyword");
    $req->bindValue(':keyword', $searchKeyword, PDO::PARAM_STR);
} else {
    $req = $db->prepare("SELECT * FROM blogs ORDER BY id DESC");
}

$req->execute();
$articles = $req->fetchAll(PDO::FETCH_ASSOC);

// Suppression d'article si l'ID est fourni en paramètre
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id']) && is_numeric($_GET['id'])) {
    $articleId = $_GET['id'];

    // Supprimer l'article de la base de données
    $deleteArticle = $db->prepare('DELETE FROM blogs WHERE id = ?');
    $deleteArticle->execute([$articleId]);

    // Vous pouvez également supprimer l'image associée ici
    // ...

    // Rediriger après suppression
    header("Location:delete_blog.php");    
}
?>

<form class="search-form" action="" method="get">
    <input class="search-input" type="text" name="search_keyword" placeholder="Search for an article">
    <button class="search-button" type="submit">Search</button>
</form>

<div class="article-list">
    <?php foreach ($articles as $article) : ?>
        <div class="article">
            <img src="../app/views/assets/images/images-blog/<?php echo $article['images_name']; ?>" alt="Article Image">
            <h2><?php echo $article['titre']; ?></h2>
            <p><?php echo $article['contenu']; ?></p>
            <div class="article-actions">
                <a href="modifier.php?id=<?php echo $article['id']; ?>" class="edit">Edit</a>
                <a href="?action=delete&id=<?php echo $article['id']; ?>" class="delete" onclick="return confirm('Are you sure you want to delete this article?')">Delete</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
        
