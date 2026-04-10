<?php
$pageTitle = 'Home - Autobit';
include __DIR__ . '/includes/header.php';
?>

<section class="hero">
  <div class="container hero-grid">
    <div>
      <span class="badge">Registration Bonus • 2x Premium Shot</span>
      <h1>The Unbeatable AI for Safe Automated Crypto Trading</h1>
      <p>Autobit-inspired landing experience with dark UI, trust-focused messaging, and high-conversion sections for users.</p>
      <a class="btn btn-primary" href="/autobit/register.php">Register</a>
      <a class="btn btn-ghost" href="#about">About us</a>
    </div>
    <div class="card">
      <h3>Premium Trade</h3>
      <p class="sub">Average Profit 15–20% per day</p>
      <ul>
        <li>Commission: 20% of Profit</li>
        <li>Cost per Shot: $1000</li>
        <li>Risk of Loss: 0%</li>
        <li>Duration: 1 Day</li>
      </ul>
    </div>
  </div>
</section>

<div class="container stats">
  <div class="card stat"><div class="num">32,469,793,457</div><div class="label">Total trades</div></div>
  <div class="card stat"><div class="num">$48,544,759,910,670</div><div class="label">Total profit</div></div>
  <div class="card stat"><div class="num">$255,204,107,105,698</div><div class="label">Total trade volume</div></div>
</div>

<section id="about" class="section">
  <div class="container">
    <h2>Why Autobit?</h2>
    <p class="sub">Whether you’re a beginner or experienced trader, this layout mirrors app.autobit.live style and structure.</p>
    <div class="feature-grid">
      <div class="card"><h3>100% Success Rate</h3><p class="sub">High-confidence automated AI strategy execution.</p></div>
      <div class="card"><h3>Real-Time Reporting</h3><p class="sub">Track trade performance instantly with transparent metrics.</p></div>
      <div class="card"><h3>24/7 Support</h3><p class="sub">Get help any time via support channels and helper tools.</p></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container card">
    <h2>Top Active Trades</h2>
    <p class="sub">Preview of AI-powered trades.</p>
    <table class="trade-table">
      <thead><tr><th>Coin</th><th>Amount</th><th>Profit</th><th>Details</th></tr></thead>
      <tbody>
        <tr><td>BTC</td><td>1,731,000.00</td><td class="profit">+1,783,583.55 USD</td><td><a href="#">View</a></td></tr>
        <tr><td>ETH</td><td>98,684.00</td><td class="profit">+382,847.31 USD</td><td><a href="#">View</a></td></tr>
        <tr><td>XRP</td><td>1,474,000.00</td><td class="profit">+3,408,554.38 USD</td><td><a href="#">View</a></td></tr>
      </tbody>
    </table>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
