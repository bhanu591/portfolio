<?php
session_start();
require_once __DIR__ . '/includes/header.php';

if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
?>
<?php include __DIR__ . '/includes/hero.php'; ?>
<?php include __DIR__ . '/includes/about.php'; ?>
<?php include __DIR__ . '/includes/skills.php'; ?>
<?php include __DIR__ . '/includes/projects.php'; ?>
<?php include __DIR__ . '/includes/testimonials.php'; ?>
<?php include __DIR__ . '/includes/clients.php'; ?>
<?php include __DIR__ . '/includes/seo.php'; ?>
<?php include __DIR__ . '/includes/process.php'; ?>
<?php include __DIR__ . '/includes/contact.php'; ?>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
