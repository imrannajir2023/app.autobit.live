<?php if (session_status() === PHP_SESSION_NONE) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AutoBit</title>
  <link rel="stylesheet" href="/autobit/assets/style.css">
</head>
<body>
<header>
  <h1>AutoBit</h1>
  <nav>
    <a href="/autobit/index.php">Home</a>
    <a href="/autobit/login.php">Login</a>
    <a href="/autobit/register.php">Register</a>
  </nav>
</header>
<main>
