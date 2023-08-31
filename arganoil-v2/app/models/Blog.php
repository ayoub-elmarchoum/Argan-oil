<?php
// app/models/Blog.php

class Blog {
    // Fonction pour récupérer tous les blogs depuis la base de données
    public static function getAllBlogs() {
        // Utiliser la fonction connectDb() définie dans config.php pour établir une connexion à la base de données
        require_once("config.php");
        $db=connectDb();
        //select  all blog
        $req = $db->prepare("SELECT * FROM blogs ORDER BY id DESC");
        
    return $req;
    }

  
  public static function getSingleBlogs() {
    // Utiliser la fonction connectDb() définie dans config.php pour établir une connexion à la base de données
    require_once("config.php");
    $db=connectDb();
    //select  all blog
    $req = $db->prepare("SELECT * FROM blogs WHERE id = ?");
    
return $req;
}
public static function getlatestBlog() {
  // Utiliser la fonction connectDb() définie dans config.php pour établir une connexion à la base de données
  require_once("config.php");
  $db=connectDb();
  //select  all blog
  $req = $db->prepare("SELECT * FROM blogs ORDER BY id DESC LIMIT 3");
  
return $req;
}

}




?>
