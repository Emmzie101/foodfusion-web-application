<?php
require_once '../config/db.php';

if (!isset($_GET['id'])) {
  die("Invalid request.");
}

$id = (int) $_GET['id'];

$stmt = $pdo->prepare("SELECT file_path FROM resources WHERE resource_id = ?");
$stmt->execute([$id]);
$file = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$file) {
  die("Resource not found.");
}

$filepath = "../assets/resources/" . $file['file_path'];

if (!file_exists($filepath)) {
  die("File does not exist.");
}

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
header('Content-Length: ' . filesize($filepath));
readfile($filepath);
exit;
?>