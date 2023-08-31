<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="app/views/assets/images/image-nav/logo.ico" type="image/x-icon">

    <title>Argan Oil Blogs </title>
    <link rel="stylesheet" href="css/blogg.css">
    <style>
 
    </style>
</head>
<body>
    <?php require_once("nav.php"); ?>
    <div class="container">
        <h1 class="page-title">Welcome to Our Blog</h1>
        <form class="search-form" action="" method="get">
            <input class="search-input" type="text" name="search_keyword" placeholder="Search for an article">
            <button class="search-button" type="submit">Search</button>
        </form>
        <div class="row">
            <?php
               require_once("../app/models/config.php");
               $db=connectDb();

            if(isset($_GET['search_keyword'])) {
                $searchKeyword = $_GET['search_keyword'];
                $req = $db->prepare("SELECT * FROM blogs WHERE titre LIKE :keyword OR contenu LIKE :keyword");
                $req->bindValue(':keyword', '%' . $searchKeyword . '%', PDO::PARAM_STR);
            } else {
                $req = $db->prepare("SELECT * FROM blogs ORDER BY id DESC" );
            }

            if ($req->execute()) {
                while ($reponse = $req->fetch(PDO::FETCH_OBJ)) {
                    ?>
                    <div class="my-col">
                        <img src="../app/views/assets/images/images-blog/<?php echo $reponse->images_name; ?>" alt="<?php echo $reponse->keywords; ?>" class="my-img">
                        <h2 class="my-title"><?php echo $reponse->titre; ?></h2>
                        <p class="my-description">
                            <?php
                            echo substr($reponse->contenu, 0, 150) . '...';
                            ?>
                        </p>
                        <a href="single_blog.php?id=<?php echo $reponse->id; ?>" class="my-btn">Read More</a>
                    </div>
                    <?php
                }
            } else {
                var_dump($req->errorInfo()); // Debugging for query execution errors
            }
            ?>
        </div>
    </div>
</body>
</html>
