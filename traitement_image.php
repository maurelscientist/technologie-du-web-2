<?php
require 'db.php';

$id = (int)($_POST['id_etudiant'] ?? 0);

if ($id <= 0) {
    die("ID étudiant invalide.");
}

if (!isset($_FILES['photo']) || $_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
    die("Erreur lors du téléchargement du fichier.");
}

$fileTmp = $_FILES['photo']['tmp_name'];
$fileName = basename($_FILES['photo']['name']);
$targetDir = "uploads/";
$targetFile = $targetDir . uniqid("photo_") . "_" . $fileName;

// Vérifier si c’est une vraie image
$check = getimagesize($fileTmp);
if ($check === false) {
    die("Le fichier n'est pas une image valide.");
}

// Vérifier si le fichier existe déjà
if (file_exists($targetFile)) {
    die("Un fichier portant ce nom existe déjà.");
}

// Déplacer le fichier
if (!move_uploaded_file($fileTmp, $targetFile)) {
    die("Erreur lors du déplacement du fichier.");
}

// Mettre à jour la base de données
$sql = "UPDATE etudiants SET photo = :photo WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':photo' => basename($targetFile),
    ':id' => $id
]);

// Redirection vers la page détails
header("Location: detail_etudiant.php?id_etudiant=" . urlencode($id));
exit;
?>