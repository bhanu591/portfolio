<?php
session_start();
require_once __DIR__ . '/includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
        die('Invalid CSRF token');
    }

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if ($name && $email && $subject && $message) {
        $to = 'agency@example.com';
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
        mail($to, $subject, $body, "From: $email");
        $success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Result</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <?php if (!empty($success)): ?>
        <p class="success">Thank you! We will get back to you soon.</p>
    <?php else: ?>
        <p class="error">Something went wrong. Please try again.</p>
    <?php endif; ?>
    <a href="index.php">Return Home</a>
</div>
</body>
</html>
