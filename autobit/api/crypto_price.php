<?php
header('Content-Type: application/json');

echo json_encode([
    'symbol' => $_GET['symbol'] ?? 'BTCUSDT',
    'price' => null,
    'message' => 'Hook this endpoint to a real price feed.'
]);
