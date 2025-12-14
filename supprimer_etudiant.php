<?php
require 'db.php';
$id = (int)($_GET['id_etudiant'] ?? 0);

$stmt = $pdo->prepare("DELETE FROM etudiants WHERE id = :id");
$stmt->execute([':id' => $id]);
$OK =$stmt->execute([':id' => $id]);
header('Location: liste_etudiant.php');
exit; 