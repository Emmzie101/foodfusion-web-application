<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../config/db.php';
session_start();

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    ob_start(); 

    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        die("Email and password are required.");
    }

    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        die("Invalid login credentials.");
    }

    if ($user['lockout_until'] !== null && strtotime($user['lockout_until']) > time()) {
        die("Account locked. Please try again later.");
    }

    if (!password_verify($password, $user['password_hash'])) {

        $attempts = $user['failed_login_attempts'] + 1;

        if ($attempts >= 3) {
            $lockoutTime = date('Y-m-d H:i:s', strtotime('+3 minutes'));

            $sql = "UPDATE users
                    SET failed_login_attempts = :attempts, lockout_until = :lockout
                    WHERE user_id = :id";

            $pdo->prepare($sql)->execute([
                ':attempts' => $attempts,
                ':lockout' => $lockoutTime,
                ':id' => $user['user_id']
            ]);

            die("Account locked due to multiple failed attempts.");
        }

        $sql = "UPDATE users
                SET failed_login_attempts = :attempts
                WHERE user_id = :id";

        $pdo->prepare($sql)->execute([
            ':attempts' => $attempts,
            ':id' => $user['user_id']
        ]);

        die("Invalid login credentials.");
    }

    $sql = "UPDATE users
            SET failed_login_attempts = 0, lockout_until = NULL
            WHERE user_id = :id";

    $pdo->prepare($sql)->execute([
        ':id' => $user['user_id']
    ]);

    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['user_email'] = $user['email'];

    echo "Login successful.";
    $message = ob_get_clean();
}

$_SESSION['success'] = "Login successful.";
header("Location: ../dashboard.php");
exit;

$_SESSION['error'] = "Invalid login credentials.";
header("Location: login.php");
exit;

?>
