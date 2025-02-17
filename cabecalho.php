<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blanc</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<?php session_start(); ?>
    <header class="header">
        <a href="index.php" class="label">Blanc</a>
        <div class="separator"></div>
        <div class="separator"></div>
        <nav class="nav-links">
        <a href="#" class="nav-item">Novos</a>
        <a href="#" class="nav-item">Brincos</a>
        <a href="#" class="nav-item">Colares</a>
        <a href="#" class="nav-item">Pulseiras</a>
        <a href="#" class="nav-item">NewsLatter</a>
        <a href="login.php" class="nav-item">Login</a>
        <?php if (isset($_SESSION["admin"]) && $_SESSION["admin"] === true): ?>
          <a class="nav-item" href="admin_tools.php">Admin Tools</a>
        <?php endif; ?>
        </nav>
    </header>
