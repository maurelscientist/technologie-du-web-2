<?php
    require 'db.php';
    $stmt = $pdo->query("SELECT id, nom, prenoms, genre, email, quartier, contact FROM etudiants ORDER BY nom ASC");
    $etudiants = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants (Vue visiteur)</title>
    <link rel="stylesheet" href="liste_etudiant.css">
    <link rel="stylesheet" href="visiteur.css;">

</head>

<body>
    <h1>LISTE DES ETUDIANTS</h1>


    <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-house-fill" viewBox="0 0 16 16">
            <path
                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
        </svg></a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenoms</th>
                <th>Genre</th>
                <th>Email</th>
                <th>Quartier</th>
                <th>Contact</th>
                <th>Détails</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant): ?>
            <tr>
                <td><?php echo htmlspecialchars($etudiant['id']) ?></td>
                <td><?php echo htmlspecialchars($etudiant['nom']) ?></td>
                <td><?php echo htmlspecialchars($etudiant['prenoms']) ?></td>
                <td><?php echo htmlspecialchars($etudiant['genre']) ?></td>
                <td><?php echo htmlspecialchars($etudiant['email']) ?></td>
                <td><?php echo htmlspecialchars($etudiant['quartier']) ?></td>
                <td><?php echo htmlspecialchars($etudiant['contact']) ?></td>
                <td class="actions"> <a
                        href="details_etudiants_visteurs.php?id_etudiant=<?php echo urlencode($etudiant['id']) ?>"
                        class="setting"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi-bi-eye" viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                        </svg></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>