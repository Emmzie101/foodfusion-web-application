<?php
require '../config/db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: community-guest.php");
    exit;
}

if (empty($_POST['comment'])) {
    header("Location: community-main.php");
    exit;
}

$sql = "INSERT INTO comments (post_id, user_id, comment)
        VALUES (?, ?, ?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['post_id'],
    $_SESSION['user_id'],
    $_POST['comment']
]);

header("Location: community-main.php");
exit;
