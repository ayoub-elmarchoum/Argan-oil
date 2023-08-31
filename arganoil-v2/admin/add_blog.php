<?php
require_once("nav.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../app/views/assets/images/image-nav/logo.ico" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/add_article.css">
    <script src="https://cdn.tiny.cloud/1/lkzoubs21hdrap6pl5ew3pgsjnne7bh57bzkxucnitffwq7p/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Argan Oil</title>
    <style>
    .file-input {
    margin-top:-22px;
    }
  </style>

</head>
<body>
 
<div class="center">
  

   

    <?php
    if (isset($_GET['action']) && $_GET['action'] === 'add_article') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once("../app/models/config.php");
            $db=connectDb();

            // Validation et nettoyage des données du formulaire
            $titre = trim($_POST['titre']);
            $contenu = trim($_POST['contenu']);
            $keywords= trim ($_POST['keywords']);

            // Validation des champs (vous pouvez ajouter plus de validation ici)
            if (empty($titre) || empty($contenu) || empty($keywords)) {
                exit('Veuillez remplir tous les champs.');
            }

            // Validation et traitement de l'image
            if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] === UPLOAD_ERR_OK) {
                $content_dir = '../app/views/assets/images/images-blog/';
                $tmp_file = $_FILES['fichier']['tmp_name'];

                // Vérification du type de fichier (ajoutez d'autres vérifications si nécessaire)
                $allowed_types = ['image/jpeg', 'image/png'];
                if (!in_array($_FILES['fichier']['type'], $allowed_types)) {
                    exit('Le fichier n\'est pas une image valide.');
                }

                $name_file = time() . '.jpg';
                if (!move_uploaded_file($tmp_file, $content_dir . $name_file)) {
                    exit('Impossible de copier le fichier.');
                }
            } else {
                $name_file = ''; // Aucune image fournie
            }

            // Insertion des données dans la base de données
            $save_article = $db->prepare('INSERT INTO blogs (titre, contenu,keywords ,images_name) VALUES (?, ?, ?,?)');
            $save_article->execute([$titre, $contenu,$keywords, $name_file]);
            echo "Opération réussie.";
        }
    }
    ?>
    
    <div class="form-container">
        <h1>Ajouter un article</h1>
        <form method="POST" action="?action=add_article" enctype="multipart/form-data" class="myform">
            <br><br>
            <input type="text" name="titre" placeholder="entrer le titre de l'article" required="" class="form form-control"><br><br>
            <textarea name="contenu" placeholder="entrer le contenu de l'article" class="form form-control"></textarea><br>
                            <script>
                    tinymce.init({
                    selector: 'textarea',
                    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author name',
                    mergetags_list: [
                        { value: 'First.Name', title: 'First Name' },
                        { value: 'Email', title: 'Email' },
                    ],
                    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
                    });
        </script>
        
            <input type="text" name="keywords" placeholder="entrer keywords de l'article (espace entre deux mots)" required="" class="form form-control">
            
            <br><br>    
            <div class="file-input"><br><br>
            <input type="file" name="fichier" require><br><br>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary custom-submit-btn">
        </form>
    </div>
</div>
             


