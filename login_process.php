<?php 
    require "db.php"; 
    require "functions.php"; 
    if (!check_csrf($_POST["csrf"])) { 
    die("Token CSRF invalide."); 
    } 
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
    $stmt = $pdo->prepare("SELECT * FROM users1 WHERE username = ?"); 
    $stmt->execute([$username]); 
    $user = $stmt->fetch(PDO::FETCH_ASSOC); 
    if ($user && password_verify($password, $user["password"])) { 
    // Connexion OK 
    $_SESSION["user_id"] = $user["id"]; 
    $_SESSION["username"] = $user["username"]; 
    header("Location: chargement.php"); 
    exit; 
    } else { 
    echo "Identifiants incorrects. <a href='login.php'>Réessayer</a>"; 
    }   