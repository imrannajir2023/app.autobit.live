<?php
$pageTitle = 'Register - Autobit';
include __DIR__ . '/includes/header.php';
?>
<section class="form-panel card">
  <h2>Create Account</h2>
  <p class="sub">Start with free trades and upgrade to premium anytime.</p>
  <form>
    <label>Full Name</label>
    <input type="text" placeholder="Your name">
    <label>Email</label>
    <input type="email" placeholder="[email protected]">
    <label>Password</label>
    <input type="password" placeholder="Create password">
    <button class="btn btn-primary" type="submit">Register</button>
  </form>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
