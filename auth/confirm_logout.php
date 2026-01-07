<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: ../index.php");
  exit;
}

$email = trim($_POST['email'] ?? '');

if (!$email) {
  die("Email required.");
}

// Fetch logged-in user's email
$stmt = $pdo->prepare("SELECT email FROM users WHERE user_id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user || strtolower($user['email']) !== strtolower($email)) {
  die("Email does not match logged-in account.");
}

// Destroy session
session_unset();
session_destroy();

// Redirect to home
header("Location: ../index.php");
exit;
