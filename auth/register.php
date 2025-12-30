<?php
require_once '../config/db.php';

$message = '';
$messageType = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $firstName = trim($_POST['first_name']);
    $lastName  = trim($_POST['last_name']);
    $email     = trim($_POST['email']);
    $password  = $_POST['password'];

    if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
        $message = "All fields are required.";
        $messageType = "error";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format.";
        $messageType = "error";
    } elseif (strlen($password) < 8) {
        $message = "Password must be at least 8 characters.";
        $messageType = "error";
    } else {

        $check = $pdo->prepare("SELECT user_id FROM users WHERE email = :email");
        $check->execute([':email' => $email]);

        if ($check->rowCount() > 0) {
            $message = "Email already registered.";
            $messageType = "error";
        } else {

            $hashed = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare("
                INSERT INTO users (first_name, last_name, email, password_hash)
                VALUES (:fn, :ln, :em, :pw)
            ");

            $stmt->execute([
                ':fn' => $firstName,
                ':ln' => $lastName,
                ':em' => $email,
                ':pw' => $hashed
            ]);

            $message = "Registration successful! You may log in.";
            $messageType = "success";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register | Food Fusion</title>
<link rel="stylesheet" href="../assets/css/auth.css">
</head>

<body class="auth-body">

<div class="auth-wrapper">

  <div class="auth-image">
    <img src="../assets/images/amara.jpg" alt="Food Fusion">
  </div>

  <div class="auth-card">
    <h2>Create Account</h2>

    <?php if ($message): ?>
      <div class="auth-message <?= $messageType ?>">
        <?= htmlspecialchars($message) ?>
      </div>
    <?php endif; ?>

    <form method="POST">
      <input type="text" name="first_name" placeholder="First Name" required>
      <input type="text" name="last_name" placeholder="Last Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" name="password" placeholder="Password (min 8 chars)" required>

      <button type="submit">Register</button>
    </form>

    <p class="auth-switch">
      Already have an account?
      <a href="login.php">Login</a>
    </p>
  </div>

</div>

</body>
</html>
