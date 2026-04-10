<?php
$pageTitle = 'Login - Autobit.io';
include __DIR__ . '/includes/header.php';
?>
<section class="form-panel card">
  <h2>Login / Register</h2>
  <p class="sub">Access wallet, trades, and live profit reports.</p>
  <form>
    <label>Email</label>
    <input type="email" placeholder="[email protected]">
    <label>Password</label>
    <input type="password" placeholder="********">
    <button class="btn btn-primary" type="submit">Sign In</button>
  </form>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
