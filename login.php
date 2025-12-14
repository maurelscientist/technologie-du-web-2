<?php 
    require "functions.php"; 
    $errors = [];
?> 
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <h1>Connexion administrateur</h1>
    <?php if ($errors): ?>
    <div class="error">
        <?php foreach ($errors as $e) echo "<p>".htmlspecialchars($e)."</p>"; ?>
    </div>
    <?php endif; ?>
    <form method="post" action="login_process.php">
        <input type="hidden" name="csrf" value="<?php echo csrf_token(); ?>">
        <label>Nom d’utilisateur:<br><input name="username" required></label><br><br>
        <label>Mot de passe:<br><input type="password" name="password" required></label><br><br>
        <button type="submit">Se connecter</button>
        <a href="visiteur.php">Se connecter comme visiteur</a>
  </form>
</body>

</html>