<?php
require_once __DIR__ . '/../includes/auth.php';
requireAuth();
$pageTitle = 'User Dashboard - Autobit.io';
include __DIR__ . '/../includes/header.php';
?>
<section class="section">
  <div class="container">
    <h2>User Dashboard</h2>
    <p class="sub">Live trade summary and profit snapshots.</p>
    <div class="stats">
      <div class="card stat"><div class="num">$9,842.22</div><div class="label">Wallet Balance</div></div>
      <div class="card stat"><div class="num">12</div><div class="label">Active Trades</div></div>
      <div class="card stat"><div class="num">$1,210.80</div><div class="label">Today Profit</div></div>
    </div>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
