<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/_init.php';

use Luntian\Database;
use Luntian\Response;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    Response::error('Method not allowed', 405);
}

$user = require_auth_user();
$body = read_json_body();
$cycle = $body['billingCycle'] ?? 'monthly';

if (!in_array($cycle, ['monthly', 'yearly'], true)) {
    Response::error('billingCycle must be monthly or yearly', 400);
}

$amount = $cycle === 'yearly'
    ? (float) (env('GCASH_PRO_YEARLY_PHP', '14390') ?? '14390')
    : (float) (env('GCASH_PRO_MONTHLY_PHP', '1499') ?? '1499');

$reference = 'LTN-' . strtoupper(bin2hex(random_bytes(4)));

$pdo = Database::connection();
$stmt = $pdo->prepare(
    'INSERT INTO payments (user_id, reference_code, amount_php, billing_cycle, status)
     VALUES (:uid, :ref, :amount, :cycle, :status)
     RETURNING id, reference_code, amount_php, billing_cycle, status, created_at'
);
$stmt->execute([
    'uid' => (int) $user['id'],
    'ref' => $reference,
    'amount' => $amount,
    'cycle' => $cycle,
    'status' => 'pending',
]);

$payment = $stmt->fetch();

Response::json([
    'ok' => true,
    'payment' => $payment,
    'paymentPageUrl' => app_url() . '/payment-gcashPage.php?ref=' . urlencode($reference),
]);
