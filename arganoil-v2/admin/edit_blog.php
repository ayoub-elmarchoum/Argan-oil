<?php
require_once("nav.php");
?>
</div>

<link rel="stylesheet" href="css/add_article.css">
<link rel="icon" href="app/views/assets/images/image-nav/logo.ico" type="image/x-icon">
<script src="https://cdn.tiny.cloud/1/lkzoubs21hdrap6pl5ew3pgsjnne7bh57bzkxucnitffwq7p/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</div>

<div class="center">
  <h1>Argan Oil</h1><br><br><br>


  <?php
 require_once("../app/models/config.php");
 $db=connectDb();
// ... Autres parties du code ...   
?>

<div class="center">
    <h1>Administration</h1><br><br><br>

    <?php

    // Vérifier si l'ID de l'article est fourni en paramètre d'URL
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $articleId = $_GET['id'];

        // Récupérer les détails de l'article depuis la base de données
        $stmt = $db->prepare("SELECT * FROM blogs WHERE id = ?");
        $stmt->execute([$articleId]);
        $articleDetails = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($articleDetails) {
            // Afficher le formulaire de modification avec les détails pré-remplis
    ?>

<div class="form-container">
    <h1>Ajouter un article</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <br><br>
        <input type="text" name="titre" placeholder="entrer le titre de l'article" value="<?php echo $articleDetails['titre']; ?>"required="" class="form form-control"><br><br>
        <textarea name="contenu" placeholder="entrer le contenu de l'article" class="form form-control"><?php echo $articleDetails['contenu']; ?></textarea><br>
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
        <input type="text" value="<?php echo $articleDetails['keywords']; ?>" name="keywords" placeholder="entrer keywords de l'article (espace entre deux mots)" required="" class="form form-control"><br>
        <div class="file-input"><br><br>
            <input type="file" name="fichier" require><br><br>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary custom-submit-btn">
    </form>
</div>



    <?php
            if (isset($_POST['submit'])) {
                // Récupérer les données du formulaire
                $newTitre = $_POST['titre'];
                $newContenu = $_POST['contenu'];
                $newKeywords = $_POST['keywords'];

                // Conserver l'image existante par défaut
                $name_file = $articleDetails['images_name'];

                // Vérifier si une nouvelle image est envoyée
                if ($_FILES['fichier']['name'] != "") {
                    $content_dir = 'images/';
                    $tmp_file = $_FILES['fichier']['tmp_name'];

                    if (!is_uploaded_file($tmp_file)) {
                        exit('Fichier introuvable');
                    }

                    $type_file = $_FILES['fichier']['type'];
                    if (!strstr($type_file, "jpeg") && !strstr($type_file, 'png')) {
                        exit('Le fichier n\'est pas une image');
                    }

                    $name_file = time() . '.jpg';
                    if (!move_uploaded_file($tmp_file, $content_dir . $name_file)) {
                        exit('Impossible de copier le fichier');
                    }

                    // Supprimer l'ancienne image si elle existe
                    if ($articleDetails['images_name']) {
                        unlink($content_dir . $articleDetails['images_name']);
                    }
                }

                // Mettre à jour les détails de l'article dans la base de données
                $updateArticle = $db->prepare('UPDATE blogs SET titre = ?, contenu = ?, images_name = ?, keywords = ? WHERE id = ?');
                $updateArticle->execute([$newTitre, $newContenu, $name_file, $newKeywords, $articleId]);

                echo "Modifications enregistrées avec succès!";
            }
        } else {
            echo "Article non trouvé.";
        }
    } else {
        echo "ID d'article non valide.";
    }
    ?>

