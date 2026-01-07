<?php
require_once '../config/db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Invalid request');
}

$content = trim($_POST['content'] ?? '');
$imageName = null;

if (!empty($_FILES['image']['name'])) {
    $imageName = time() . '_' . basename($_FILES['image']['name']);
    move_uploaded_file(
        $_FILES['image']['tmp_name'],
        "../uploads/$imageName"
    );
}

$sql = "INSERT INTO posts (user_id, content, image)
        VALUES (:user_id, :content, :image)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':user_id' => $_SESSION['user_id'],
    ':content' => $content,
    ':image'   => $imageName
]);

header("Location: community-main.php");
exit;
