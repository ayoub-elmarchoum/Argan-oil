
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show product </title>
    <link rel="icon" href="app/views/assets/images/image-nav/logo.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="blog.css">
    <style>


    </style>
</head>
<body>
    
<div class="container">
    <h1>Blog Argan Oil</h1>
    <div class="row">
        <?php
        //connect to db
        require_once("../app/models/config.php");
        //select  all blog
        $db=connectDb();
        $req = $db->prepare("SELECT * FROM blogs");
        //show all product after selecting 
        if ($req->execute()) {
            while ($reponse = $req->fetch(PDO::FETCH_OBJ)) {
               
                ?>
             
        <!--div contain proudct -->
        <div class="col-md-4">
            <img src="images/<?php echo $reponse->images_name; ?>" alt="Image 1" class="img-fluid">
            <h1 style="color: rgb(125, 86, 40);"><?php echo $reponse->titre; ?></h1>
           
            <p style="font-size: 150%;"><?php echo $reponse->contenu; ?></p>
            <a href="art_page.php?id=<?php echo $reponse->id; ?>"  class="btn btn-success">Read More</a>
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


</body>
</html>