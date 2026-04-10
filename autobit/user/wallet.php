<?php
require_once __DIR__ . '/../includes/auth.php';
requireAuth();
$pageTitle = 'Wallet - Autobit';
include __DIR__ . '/../includes/header.php';
?>
<section class="form-panel card">
  <h2>Wallet</h2>
  <p class="sub">Deposit and track balances in one place.</p>
  <label>Available Balance</label>
  <input type="text" value="$9,842.22" readonly>
  <a class="btn btn-primary" href="/autobit/user/deposit.php">Go to Deposit</a>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
