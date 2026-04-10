<?php
require_once __DIR__ . '/../includes/auth.php';
requireAuth();
$pageTitle = 'Withdraw - Autobit';
include __DIR__ . '/../includes/header.php';
?>
<section class="form-panel card">
  <h2>Withdraw</h2>
  <form>
    <label>Amount (USD)</label>
    <input type="number" min="10" placeholder="500">
    <label>Wallet Address</label>
    <input type="text" placeholder="Paste your wallet address">
    <button class="btn btn-primary" type="submit">Request Withdraw</button>
  </form>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
