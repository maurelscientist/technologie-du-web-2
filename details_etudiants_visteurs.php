<?php
require 'db.php';
$id = (int)($_GET['id_etudiant'] ?? 0);
$stmt = $pdo->prepare("SELECT * FROM etudiants WHERE id = :id");
$stmt->execute([':id' => $id]);
$e = $stmt->fetch();
if (!$e) { die('Étudiant introuvable'); }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Détails étudiant</title>
    <link rel="stylesheet" href="details_etudiant.css">
</head>

<body>

    <h1>Détails de l’étudiant</h1>
    <p><a class="btn" href="visiteur.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path
                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
            </svg></a></p>

    <div class="details-container">
        <div class="photo-box">
            <img src="<?= $e['photo'] ? 'uploads/' . htmlspecialchars($e['photo']) : 'images/default_avatar.png' ?>"
                alt="Photo étudiant" class="profile-img">
        </div>
        <div class="info-box">
            <h2>Informations de l’étudiant</h2>
            <table>
                <tr>
                    <th>Id</th>
                    <td><?= htmlspecialchars($e['id']) ?></td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td><?= htmlspecialchars($e['nom']) ?></td>
                </tr>
                <tr>
                    <th>Prenoms</th>
                    <td><?= htmlspecialchars($e['prenoms']) ?></td>
                </tr>
                <tr>
                    <th>Genre</th>
                    <td><?= htmlspecialchars($e['genre']) ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= htmlspecialchars($e['email']) ?></td>
                </tr>
                <tr>
                    <th>Quartier</th>
                    <td><?= htmlspecialchars($e['quartier']) ?></td>
                </tr>
                <tr>
                    <th>Contact</th>
                    <td><?= htmlspecialchars($e['contact']) ?></td>
                </tr>
            </table>
            <br>
        </div>
    </div>

</body>

</html>