<?php
require '../config/db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: community.php");
    exit;
}

if (!isset($_POST['post_id'])) {
    header("Location: community-main.php");
    exit;
}

$sql = "INSERT IGNORE INTO post_likes (post_id, user_id) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['post_id'],
    $_SESSION['user_id']
]);

header("Location: community-main.php");
exit;
