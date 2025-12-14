<?php
require 'db.php';
$id = (int)($_GET['id_etudiant'] ?? 0);
$stmt = $pdo->prepare("SELECT * FROM etudiants WHERE id = :id");
$stmt->execute([':id' => $id]);
$e = $stmt->fetch();
if (!$e) { die('Étudiant introuvable'); }

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = trim($_POST['nom'] ?? '');
  $prenoms = trim($_POST['prenoms'] ?? '');
  $genre = $_POST['genre'] ?? '';
  $email = trim($_POST['email'] ?? '');
  $quartier = trim($_POST['quartier'] ?? '');
  $contact = trim($_POST['contact'] ?? '');

  if ($nom === '' || $prenoms === '' || !in_array($genre, ['M','F']) 
    || !filter_var($email, FILTER_VALIDATE_EMAIL) || $quartier === '') {
    $errors[] = 'Vérifiez les champs saisis';
  }
  // Gestion de la photo
  if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    $photoName = uniqid('photo_') . '.' . $ext;
    move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . $photoName);
  } else {
    $photoName = $e['photo']; // garder l’ancienne photo si aucune nouvelle n’est uploadée
  }

  if (!$errors) {
    $sql = "UPDATE etudiants
            SET nom = :nom, prenoms = :prenoms, genre = :genre, email = :email,
             quartier = :quartier, contact = :contact, photo = :photo
            WHERE id = :id";
    $upd = $pdo->prepare($sql);
    $upd->execute([
      ':nom' => $nom,
      ':prenoms' => $prenoms,
      ':genre' => $genre,
      ':email' => $email,
      ':quartier' => $quartier,
      ':contact' => $contact ?: null,
      ':photo' => $photoName,
      ':id' => $id,
    ]);
    header('Location: liste_etudiant.php');
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier étudiant</title>
    <link rel="stylesheet" href="modifier_etudiant.css">
</head>

<body>
    <h1>Modifier étudiant</h1>
    <p><a href="liste_etudiant.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bibi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path
                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
            </svg></a></p>

    <?php if ($errors): ?>
    <div style="color:red;">
        <p><?= htmlspecialchars(implode(', ', $errors)) ?></p>
    </div>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data">
        <label>Nom:<br><input name="nom" value="<?= htmlspecialchars($e['nom']) ?>" required></label><br><br>
        <label>Prenoms:<br><input name="prenoms" value="<?= htmlspecialchars($e['prenoms']) ?>"
                required></label><br><br>
        <label>Genre:<br>
            <select name="genre" required>
                <option value="M" <?= $e['genre']==='M'?'selected':'' ?>>M</option>
                <option value="F" <?= $e['genre']==='F'?'selected':'' ?>>F</option>
            </select>
        </label><br><br>
        <label>Email:<br><input type="email" name="email" value="<?= htmlspecialchars($e['email']) ?>"
                required></label><br><br>
        <label>Quartier:<br><input name="quartier" value="<?= htmlspecialchars($e['quartier']) ?>"
                required></label><br><br>
        <label>Contact (optionnel):<br><input name="contact"
                value="<?= htmlspecialchars($e['contact']) ?>"></label><br><br>
        <label>Photo actuelle:<br>
            <img src="<?= $e['photo'] ? 'uploads/' . htmlspecialchars($e['photo']) : 'images/default_avatar.png' ?>"
                width="100">
        </label><br><br>
        <label>Changer la photo:<br><input type="file" name="photo"></label><br><br>

        <button type="submit">Enregistrer</button>
    </form>
</body>

</html>