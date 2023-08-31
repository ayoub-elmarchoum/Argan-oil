
<?php
require_once("nav.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Argan oil</title>
    <link rel="stylesheet" href="css/rdm.css">
    <link rel="icon" href="../app/views/assets/images/image-nav/logo.ico" type="image/x-icon">


</head>
<body>
<?php
    session_start();

    // Inclure la connexion à la base de données
    require_once("../app/models/config.php");
    $db=connectDb();

    // Vérifier si l'ID de l'article est passé dans l'URL
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $articleId = $_GET['id'];

        // Requête SQL pour récupérer les détails de l'article
        $stmt = $db->prepare("SELECT * FROM blogs WHERE id = ?");
        $stmt->execute([$articleId]);
        $articleDetails = $stmt->fetch(PDO::FETCH_OBJ);
        
        // Vérifier si l'article existe
        if ($articleDetails) {?>
            <div class="container">
            <div class="row">
              <div class="col-md-12">

                <h1 style="color: rgb(125, 86, 40);"><?php echo $articleDetails->titre; ?></h1>
                <img src="../app/views/assets/images/images-blog/<?php echo $articleDetails->images_name; ?>" alt="Image 1" class="img-fluid"> 
                <p style="font-size: 150%;"> <?php echo $articleDetails->contenu; ?></p>
              </div>
            </div>
          </div>


<?php        } else {
            echo "Article introuvable.";
        }
    } else {
        echo "ID d'article non valide.";
    }
?>
</body>
</html>
