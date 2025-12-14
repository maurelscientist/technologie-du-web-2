<?php 
    require "db.php"; 
    require "functions.php"; 
    if ($_SERVER["REQUEST_METHOD"] === "POST") { 
        if (!check_csrf($_POST["csrf"])) { 
            die("CSRF token invalide."); 
        } 
        $username = trim($_POST["username"]); 
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 
        $stmt = $pdo->prepare("INSERT INTO users1 (username, password) VALUES (?, ?)"); 
        try { 
            $stmt->execute([$username, $password]); 
            header("Location: index.php");
            exit;
        } 
        catch (PDOException $e) { 
            echo "Erreur : " . $e->getMessage(); 
        } 
        exit; 
    } 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription - Gestion UPB</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 70px;
        background-image: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');

    }

    h2 {
        color: #f9f9f9;
        text-align: center;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    form {
        max-width: 400px;
        margin: 30px auto;
        background: white;
        padding: 20px;
        border-radius: 6px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>

    <h2 class="text-center mb-5">Inscription</h2>
    <form method="post">
        <input type="hidden" name="csrf" value="<?php echo csrf_token(); ?>">
        Nom d’utilisateur : <input type="text" name="username" required><br><br>
        Mot de passe : <input type="password" name="password" required><br><br>
        <button type="submit">S'inscrire</button>
    </form>


</html>