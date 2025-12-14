<?php
require 'db.php';
require "functions.php"; 
    if (!isset($_SESSION["user_id"])) { 
    header("Location: login.php"); 
    exit; 
    } 

$stmt = $pdo->query("SELECT id, nom, prenoms, genre, email, quartier, contact FROM etudiants ORDER BY nom ASC");
$etudiants = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
    <link rel="stylesheet" href="liste_etudiant.css">
    <style>
    /* Style de la sidebar */
    .sidebar {
        height: 100%;
        width: 0;
        /* cachée par défaut */
        position: fixed;
        top: 0;
        left: 0;
        background-color: aliceblue;
        overflow-x: hidden;
        transition: 0.3s;
        padding-top: 60px;
    }

    .sidebar a,
    .sidebar button {
        border: none;
        padding: 10px 20px;
        text-decoration: none;
        font-size: 18px;
        color: #f1f1f1;
        display: block;
        transition: 0.2s;
    }

    .sidebar button {
        background-color: aliceblue;
        padding-right: 88px;
    }

    .sidebar button:hover {
        background-color: #575757;

    }

    .sidebar a:hover {
        background-color: #575757;
    }

    .sidebar {
        position: absolute;
        top: 15px;
        right: 25px;
        font-size: 30px;
        color: white;
        cursor: pointer;
    }

    .closebtn {
        position: absolute;
        top: 15px;
        right: 25px;
        font-size: 30px;
        color: black;
        cursor: pointer;
    }

    /* Bouton pour ouvrir la sidebar */
    .openbtn {
        font-size: 16px;
        cursor: pointer;
        background-color: #333;
        color: white;
        padding: 10px 15px;
        border: none;
        margin-bottom: 15px;
    }

    .openbtn:hover {
        background-color: #444;
    }
    </style>
</head>

<body>
    <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION["username"]); ?> !</h2>
    <h1>LISTE DES ETUDIANTS</h1>

    <!-- Bouton pour ouvrir la sidebar -->
    <button class="openbtn" onclick="openSidebar()">☰ Menu</button>

    <!-- Sidebar cachée -->
    <div id="mySidebar" class="sidebar">
        <span class="closebtn" onclick="closeSidebar()">&times;</span>
        <a class="btn" href="ajout_etudiant.php" style="color:black">Ajouter un étudiant</a>
        <button class="btn" id="toggleMode" style="color:black">changer de Mode</button>
        <a class="btn" href="index.php" style="color: black;">accueil</a>
        <a href="visiteur.php" style="color:black;">visiteur</a>
        <a href="logout.php" style="color: black;">Se déconnecter</a>

    </div>


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
                <th>Actions</th>
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
                <td class="actions">
                    <a href="details_etudiant.php?id_etudiant=<?php echo urlencode($etudiant['id']) ?>"
                        class="setting"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                        </svg></a>
                    <a href="modifier_etudiant.php?id_etudiant=<?php echo urlencode($etudiant['id']) ?>"
                        class="setting"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                        </svg></a>
                    <a href="supprimer_etudiant.php?id_etudiant=<?php echo urlencode($etudiant['id']) ?>"
                        onclick="return confirm('Supprimer cet étudiant ?');" class="suppr"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path
                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                        </svg></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script>
    function openSidebar() {
        document.getElementById("mySidebar").style.width = "250px";
    }

    function closeSidebar() {
        document.getElementById("mySidebar").style.width = "0";
    }
    const btn = document.getElementById('toggleMode');
    btn.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        btn.textContent = document.body.classList.contains('dark-mode') ?
            " Mode clair" :
            " Mode sombre";
    });
    </script>
</body>

</html>