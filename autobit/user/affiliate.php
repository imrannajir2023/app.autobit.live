<?php
require_once __DIR__ . '/../includes/auth.php';
requireAuth();
$pageTitle = 'Support - Autobit';
include __DIR__ . '/../includes/header.php';
?>
<section class="section">
  <div class="container card">
    <h2>Support / Affiliate</h2>
    <p class="sub">Invite users and contact support 24/7 like the Autobit layout flow.</p>
    <p>Your referral link:</p>
    <input type="text" value="https://autobit.local/ref/USER123" readonly>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
