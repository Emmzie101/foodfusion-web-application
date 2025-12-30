<?php
require_once '../config/db.php';
session_start();

$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $message = "Email and password required.";
        $messageType = "error";
    } else {

        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            $message = "Invalid login credentials.";
            $messageType = "error";
        } elseif ($user['lockout_until'] && strtotime($user['lockout_until']) > time()) {
            $message = "Account temporarily locked.";
            $messageType = "error";
        } elseif (!password_verify($password, $user['password_hash'])) {

            $attempts = $user['failed_login_attempts'] + 1;

            if ($attempts >= 3) {
                $lock = date('Y-m-d H:i:s', strtotime('+3 minutes'));
                $pdo->prepare("UPDATE users SET failed_login_attempts=:a, lockout_until=:l WHERE user_id=:id")
                    ->execute([':a'=>$attempts, ':l'=>$lock, ':id'=>$user['user_id']]);
                $message = "Account locked due to failed attempts.";
            } else {
                $pdo->prepare("UPDATE users SET failed_login_attempts=:a WHERE user_id=:id")
                    ->execute([':a'=>$attempts, ':id'=>$user['user_id']]);
                $message = "Invalid login credentials.";
            }

            $messageType = "error";
        } else {

            $pdo->prepare("UPDATE users SET failed_login_attempts=0, lockout_until=NULL WHERE user_id=:id")
                ->execute([':id'=>$user['user_id']]);

            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_email'] = $user['email'];

            header("Location: ../community.php");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login | Food Fusion</title>
<link rel="stylesheet" href="../assets/css/auth.css">
</head>

<body class="auth-body">

<div class="auth-wrapper">

  <div class="auth-image">
    <img src="../assets/images/amara-food.jpg" alt="Food Fusion">
  </div>

  <div class="auth-card">
    <h2>Welcome Back</h2>

    <?php if ($message): ?>
      <div class="auth-message <?= $messageType ?>">
        <?= htmlspecialchars($message) ?>
      </div>
    <?php endif; ?>

    <form method="POST">
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>

    <p class="auth-switch">
      New here?
      <a href="register.php">Create account</a>
    </p>
  </div>

</div>

</body>
</html>
