<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des Étudiants - Gestion UPB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        margin: 0;
        font-family: system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
        background-image: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
        color: #1a1a1a;
        line-height: 1.6;
        width: 100%;
        background-size: cover;

    }

    .container {
        max-width: 600px;
        margin: 100px auto;
        padding: 20px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .btn-option {
        display: inline-block;
        margin: 10px;
        padding: 15px 30px;
        font-size: 18px;
        color: #fff;
        background-color: #003366;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    </style>
</head>

<body>

    <div class="container">
        <h1>Choisissez votre mode de connexion</h1>
        <div>
            <!-- Bouton Administrateur -->
            <a href="login.php" class="btn btn-option btn-admin">
                Administrateur
            </a>

            <!-- Bouton Visiteur -->
            <a href="cchargement2.php" class="btn btn-option btn-admin">
                Visiteur
            </a>
        </div>
    </div>

</body>

</html>