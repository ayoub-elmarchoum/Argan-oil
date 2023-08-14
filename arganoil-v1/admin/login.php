<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
    session_start();

     // Inclure la connexion à la base de données
    
require_once("../app/models/config.php");?>
   <?php /*if (isset($_POST['login'])) {
        // Handle login form submission
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        $stmt = $db->prepare("SELECT username,password FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($admin) {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            
            // Update the hashed password in the database
            $updateStmt = $db->prepare("UPDATE users SET password = ? WHERE username = ?");
            $updateStmt->execute([$hashedPassword, $username]);
            $passStmt = $db->prepare("SELECT password FROM users WHERE username = ?");
            $passStmt->execute([$username]);
            $pass = $passStmt->fetch(PDO::FETCH_ASSOC);
            $asString = implode(', ', $pass);

         

        }
       
        
        try {
            if ( password_verify($asString, $hashedPassword) ) {
                // Successful login, set session variables
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
        
                // Redirect to the dashboard after successful login
                header('Location: admin.php');
                exit;
            } else {
                // Invalid credentials, display an error message
                echo '<p>Invalid username or password.</p>';
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    ?>*/?>
<?php
// LOOOOOOGIIIN....
if (isset($_POST['login'])) {
    // Données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password']; // Mot de passe en clair
     $db=connectDb();
    // Requête SQL pour récupérer le mot de passe haché de la base de données
    $stmt = $db->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $hashedPasswordFromDB = $stmt->fetchColumn();

    // Tentative de connexion infructueuse
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
        $_SESSION['username'] = $username;

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








   <div class="container">
        <h1>Login to Admin Dashboard</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>