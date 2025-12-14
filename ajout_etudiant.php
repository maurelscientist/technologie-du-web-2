<?php
require 'db.php';

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = trim($_POST['nom'] ?? '');
  $prenoms = trim($_POST['prenoms'] ?? '');
  $genre = $_POST['genre'] ?? '';
  $email = trim($_POST['email'] ?? '');
  $quartier = trim($_POST['quartier'] ?? '');
  $contact = trim($_POST['contact'] ?? '');

  // Validation
  if ($nom === '') $errors[] = 'Nom requis';
  if ($prenoms === '') $errors[] = 'Prenoms requis';
  if (!in_array($genre, ['M','F'])) $errors[] = 'Genre invalide';
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email invalide';
  if ($quartier === '') $errors[] = 'Quartier requis';

  // Gestion photo
  $photoName = null;
  if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    $photoName = uniqid('photo_') . '.' . $ext;
    move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . $photoName);
  }

  if (!$errors) {
    $sql = "INSERT INTO etudiants (nom, prenoms, genre, email, quartier, contact, photo)
            VALUES (:nom, :prenoms, :genre, :email, :quartier, :contact, :photo)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      ':nom' => $nom,
      ':prenoms' => $prenoms,
      ':genre' => $genre,
      ':email' => $email,
      ':quartier' => $quartier,
      ':contact' => $contact ?: null,
      ':photo' => $photoName,
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
    <title>Ajouter un étudiant</title>
    <link rel="stylesheet" href="ajout_etudiant.css">
</head>

<body>
    <h1>Ajouter un étudiant</h1>
    <?php if ($errors): ?>
    <div style="color:red;"><?= implode(', ', $errors) ?></div>
    <?php endif; ?>
    <form method="post" enctype="multipart/form-data">
        <label>Nom:<br><input name="nom" required></label><br><br>
        <label>Prenoms:<br><input name="prenoms" required></label><br><br>
        <label>Genre:<br>
            <select name="genre" required>
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
        </label><br><br>
        <label>Email:<br><input type="email" name="email" required></label><br><br>
        <label>Quartier:<br><input name="quartier" required></label><br><br>
        <label>Contact:<br><input name="contact"></label><br><br>
        <label>Photo:<br><input type="file" name="photo"></label><br><br>
        <button type="submit">Valider</button>
    </form>
</body>

</html>