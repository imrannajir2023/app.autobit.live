<?php
require_once __DIR__ . '/../includes/auth.php';
requireAuth();
$pageTitle = 'Deposit - Autobit';
include __DIR__ . '/../includes/header.php';
?>
<section class="form-panel card">
  <h2>Deposit</h2>
  <form>
    <label>Amount (USD)</label>
    <input type="number" min="10" placeholder="1000">
    <label>Method</label>
    <select><option>USDT (TRC20)</option><option>BTC</option><option>ETH</option></select>
    <button class="btn btn-primary" type="submit">Create Deposit</button>
  </form>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
