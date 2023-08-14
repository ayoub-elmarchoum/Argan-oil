<!-- app/views/blog.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show product </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="app/views/assets/css/contact.css">
    <link rel="stylesheet" href="app/views/assets/css/blog.css">
    <style>


    </style>
</head>
<body>
 <!--navbar--> 
<nav>

<p>add nav bar </p>
<?php require 'nav.php'?>
   
 
<div>
</nav>
<h1>Blog</h1>

<div class="container">
    <h1>NOS ARTICLES</h1>
    <div class="row">
        <?php
        //appel a la page blog.php dans model qui permet de recuperer des post a partir de la bd (static getAllBlogs()) 
        require_once("app/models/blog.php");
        $req = Blog::getAllBlogs();
        //show all product after selecting 
        if ($req->execute()) {
            while ($reponse = $req->fetch(PDO::FETCH_OBJ)) {
               
                ?>
        
        <!--div contain proudct -->
        <div class="col-md-4">
            <img src="app/views/assets/images/images-blog/<?php echo $reponse->images_name; ?>" alt="seokeyword" class="img-fluid">
            <h3 style="color: rgb(125, 86, 40);"><?php echo $reponse->titre; ?></h3>
           
            <p style="font-size: 150%;">  
            <?php
                 $contenuAbrege = substr($reponse->contenu, 0, 50);
                  if (strlen($reponse->contenu) > 50) {
                         echo $contenuAbrege . "...";
                   } else {
                         echo $contenuAbrege;
              }?>
              
            </p>
            <a href="index.php?page=single_blog&id=<?php echo $reponse->id; ?>"  class="btn btn-success">Read More</a>
            <div class="space">
              
            </div>
        </div>
        <?php }
        } else {
            var_dump($req->errorInfo()); // Debugging for query execution errors
        }
        ?>
    </div>

</div>
<?php require 'footer.php'?>

