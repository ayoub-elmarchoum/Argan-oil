<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="app/views/assets/images/image-nav/logo.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Argan Oil</title>
</head>
<body>
<?php
    session_start();
    session_regenerate_id(true);
     
    require_once("../app/models/config.php");?>
 
 <?php
 //
// LOOOOOOGIIIN....
if (isset($_POST['login'])) {
    // Données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password']; // Mot de passe en clair

    $filteredUsername = preg_replace("/[^a-zA-Z0-9_\-]/", "", $username);


    // Requête SQL pour récupérer le mot de passe haché de la base de données
    if (empty($filteredUsername) || empty($password)) {
        // Gérer le cas où des champs sont vides
        $loginErrorMessage = "Veuillez remplir tous les champs.";
    } else {
        $db=connectDb();
        // Requête SQL pour récupérer le mot de passe haché de la base de données
        $stmt = $db->prepare("SELECT password FROM users WHERE username = ?");
        $stmt->execute([$filteredUsername]);
        $hashedPasswordFromDB = $stmt->fetchColumn();

        if ($hashedPasswordFromDB === false || !password_verify($password, $hashedPasswordFromDB)) {
        // Augmenter le compteur de tentatives de connexion échouées
        if (!isset($_SESSION['login_attempts'])) {
            $_SESSION['login_attempts'] = 1;
        } else {
            $_SESSION['login_attempts']++;
        }

        // Vérifier si le nombre maximal de tentatives de connexion a été atteint
        if ($_SESSION['login_attempts'] >= 5) {
            // Verrouiller le compte pour 10 minutes (ou une durée définie)
            $_SESSION['account_locked_until'] = time() + 20; // 10 minutes

            // Message d'erreur pour un compte verrouillé
            $loginErrorMessage = "Trop de tentatives de connexion. Votre compte est verrouillé temporairement.";
        } else {
            // Message d'erreur pour des identifiants incorrects
            $loginErrorMessage = "Nom d'utilisateur ou mot de passe incorrect.";
        }
    } else {
        // Connexion réussie, réinitialiser le compteur de tentatives
        $_SESSION['login_attempts'] = 0;

        // Les informations d'identification sont correctes
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $filteredUsername;

        // Redirection vers le tableau de bord après une connexion réussie
        header('Location: admin.php');
        exit;
    }
}

// Vérifier si le compte est verrouillé
if (isset($_SESSION['account_locked_until']) && $_SESSION['account_locked_until'] > time()) {
    // Afficher un message au visiteur
    echo "Votre compte est actuellement verrouillé. Veuillez réessayer plus tard.";
echo "Compte verrouillé jusqu'à : " . date('Y-m-d H:i:s', $_SESSION['account_locked_until']);
    exit; // Ajouter une sortie pour arrêter l'exécution} else {
    // Afficher le formulaire de connexion
    // ...
}
}
//**** */
// inertion de donner dans LA BD
 /*/// Données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password']; // Mot de passe en clair

    // Hacher le mot de passe
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Requête SQL préparée pour insérer les données
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$username, $hashedPassword]);

    // Fermer la déclaration préparée*/



?>

<div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-- Image -->
                    
                     
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                    <div class="text">
                        <p>Login to Admin Dashboard</p>
                    </div>
                            <form action="" method="post" class="form">
                                <div class="input-field">
                                    <input type="text" id="username" name="username" placeholder="Enter username" required >
                                    
                                </div>
                                <div class="input-field">
                                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                                    
                                </div>
                                <div class="input-field">
                                    <input type="submit" name="login" value="Login">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>