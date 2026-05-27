<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/_init.php';

use Luntian\Database;
use Luntian\Response;

$user = require_auth_user();
$ref = trim((string) ($_GET['ref'] ?? ''));

if ($ref === '') {
    Response::error('ref query parameter required', 400);
}

$pdo = Database::connection();
$stmt = $pdo->prepare(
    'SELECT reference_code, amount_php, billing_cycle, status, gcash_reference, created_at, updated_at, approved_at
     FROM payments WHERE reference_code = :ref AND user_id = :uid'
);
$stmt->execute(['ref' => $ref, 'uid' => (int) $user['id']]);
$payment = $stmt->fetch();

if (!$payment) {
    Response::error('Payment not found', 404);
}

Response::json(['ok' => true, 'payment' => $payment]);
