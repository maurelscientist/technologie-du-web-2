<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Chargement de la liste des etudiants en cours...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #003366;
        /* bleu UPB */
        font-family: Arial, sans-serif;
        color: #fff;
    }

    .loading-box {
        width: 60%;
        text-align: center;
    }

    h2 {
        margin-bottom: 20px;
        color: #ffc107;
        /* jaune accent */
        font-weight: bold;
    }
    </style>
</head>

<body>

    <div class="loading-box">
        <h2>Chargement de la liste en cours...</h2>
        <div class="progress">
            <div id="progressBar" class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                role="progressbar" style="width: 0%">
            </div>
        </div>
    </div>

    <script>
    let progress = 0;
    const bar = document.getElementById("progressBar");

    // Animation de la barre
    const interval = setInterval(() => {
        progress += 10;
        bar.style.width = progress + "%";
        if (progress >= 100) {
            clearInterval(interval);
            // Redirection vers la page principale
            window.location.href = "liste_etudiant.php"; // mets ici ton URL principale
        }
    }, 300); // toutes les 0.3s
    </script>

</body>

</html>