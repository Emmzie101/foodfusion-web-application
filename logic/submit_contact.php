<?php
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header("Location: ../pages/contact.php");
  exit;
}

/* ---------------------------
   Validate reCAPTCHA
---------------------------- */

$recaptchaSecret = "6LfLW0AsAAAAAE1NHn___8F2sKQtxYhxTtNbYLi8";
$recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

if (!$recaptchaResponse) {
  die("reCAPTCHA verification failed.");
}

$ch = curl_init();

curl_setopt_array($ch, [
  CURLOPT_URL => "https://www.google.com/recaptcha/api/siteverify",
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => http_build_query([
    'secret' => $recaptchaSecret,
    'response' => $recaptchaResponse
  ]),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false
]);

$response = curl_exec($ch);
curl_close($ch);

$responseData = json_decode($response);


if (!$responseData->success) {
  die("reCAPTCHA verification failed.");
}

/* ---------------------------
   Sanitize Inputs
---------------------------- */

$name    = trim($_POST['name']);
$email   = trim($_POST['email']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);

if (!$name || !$email || !$subject || !$message) {
  die("Invalid form submission.");
}

/* ---------------------------
   Insert Into Database
---------------------------- */

$sql = "INSERT INTO contact_messages (name, email, subject, message)
        VALUES (?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $subject, $message]);

header("Location: ../pages/contact.php?success=1");
exit;
