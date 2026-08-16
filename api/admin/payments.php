<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '../_init.php';

use Luntian\AuthHelper;
use Luntian\Database;
use Luntian\Response;

require_admin();

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    $pdo = Database::connection();
    $status = $_GET['status'] ?? 'submitted';
    $stmt = $pdo->prepare(
        'SELECT p.id, p.reference_code, p.amount_php, p.billing_cycle, p.status,
                p.gcash_reference, p.proof_path, p.created_at, p.updated_at,
                u.email, u.display_name
         FROM payments p
         JOIN users u ON u.id = p.user_id
         WHERE p.status = :status
         ORDER BY p.updated_at DESC
         LIMIT 50'
    );
    $stmt->execute(['status' => $status]);
    Response::json(['ok' => true, 'payments' => $stmt->fetchAll()]);
}

if ($method === 'POST') {
    $body = read_json_body();
    $paymentId = $body['paymentId'] ?? '';
    $action = $body['action'] ?? '';

    if ($paymentId === '' || !in_array($action, ['approve', 'reject'], true)) {
        Response::error('paymentId and action (approve|reject) required', 400);
    }

    $pdo = Database::connection();
    $stmt = $pdo->prepare(
        'SELECT p.*, u.id AS user_id FROM payments p
         JOIN users u ON u.id = p.user_id WHERE p.id = :id'
    );
    $stmt->execute(['id' => $paymentId]);
    $payment = $stmt->fetch();

    if (!$payment) {
        Response::error('Payment not found', 404);
    }

    if ($action === 'approve') {
        $pdo->prepare(
            "UPDATE payments SET status = 'approved', approved_at = NOW(), updated_at = NOW() WHERE id = :id"
        )->execute(['id' => $paymentId]);

        AuthHelper::activatePro((string) $payment['user_id'], (string) $payment['billing_cycle']);

        Response::json(['ok' => true, 'status' => 'approved']);
    }

    $note = trim((string) ($body['adminNote'] ?? ''));
    $pdo->prepare(
        "UPDATE payments SET status = 'rejected', admin_note = :note, updated_at = NOW() WHERE id = :id"
    )->execute(['id' => $paymentId, 'note' => $note]);

    Response::json(['ok' => true, 'status' => 'rejected']);
}

Response::error('Method not allowed', 405);
