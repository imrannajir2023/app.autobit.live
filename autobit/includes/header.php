<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$pageTitle = $pageTitle ?? 'AutoBit';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <link rel="stylesheet" href="/autobit/assets/style.css">
</head>
<body>
<div class="site-wrap">
<header class="site-header">
  <div class="container nav-row">
    <a class="brand" href="/autobit/index.php">Autobit<span>.io</span></a>
    <nav class="nav-links">
      <a href="/autobit/index.php">Home</a>
      <a href="/autobit/user/dashboard.php">Trades</a>
      <a href="/autobit/user/wallet.php">Wallet</a>
      <a href="/autobit/user/affiliate.php">Support</a>
    </nav>
    <div class="nav-cta">
      <?php if (!empty($_SESSION['user_id'])): ?>
        <a class="btn btn-ghost" href="/autobit/logout.php">Logout</a>
      <?php else: ?>
        <a class="btn btn-ghost" href="/autobit/login.php">Login</a>
        <a class="btn btn-primary" href="/autobit/register.php">Register</a>
      <?php endif; ?>
    </div>
  </div>
</header>
<main>
