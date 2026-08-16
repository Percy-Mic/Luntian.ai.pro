<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/_init.php';

use Luntian\AuthHelper;
use Luntian\Database;
use Luntian\Response;

require_admin();

$method = $_SERVER['REQUEST_METHOD'];

// ---------------------------------------------------------------------
// GET: Fetch Payments by Status
// ---------------------------------------------------------------------
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
    exit;
}

// ---------------------------------------------------------------------
// POST: Process Payment Actions (Approve / Reject)
// ---------------------------------------------------------------------
if ($method === 'POST') {
    $body = read_json_body();
    $paymentId = $body['paymentId'] ?? '';
    $action = $body['action'] ?? '';

    if ($paymentId === '' || !in_array($action, ['approve', 'reject'], true)) {
        Response::error('paymentId and action (approve|reject) required', 400);
    }

    $pdo = Database::connection();

    // Fetch existing payment
    $stmt = $pdo->prepare(
        'SELECT p.*, u.id AS user_id 
         FROM payments p
         JOIN users u ON u.id = p.user_id 
         WHERE p.id = :id'
    );
    $stmt->execute(['id' => $paymentId]);
    $payment = $stmt->fetch();

    if (!$payment) {
        Response::error('Payment not found', 404);
    }

    // Prevent re-processing finalized payments
    if ($payment['status'] !== 'submitted') {
        Response::error('Payment has already been processed', 400);
    }

    // Process Action
    if ($action === 'approve') {
        try {
            $pdo->beginTransaction();

            $pdo->prepare(
                "UPDATE payments SET status = 'approved', approved_at = NOW(), updated_at = NOW() WHERE id = :id"
            )->execute(['id' => $paymentId]);

            AuthHelper::activatePro((string) $payment['user_id'], (string) $payment['billing_cycle']);

            $pdo->commit();
            Response::json(['ok' => true, 'status' => 'approved']);
            exit;
        } catch (\Throwable $e) {
            $pdo->rollBack();
            Response::error('Failed to activate subscription: ' . $e->getMessage(), 500);
        }
    } else { // Reject
        $note = trim((string) ($body['adminNote'] ?? ''));

        $pdo->prepare(
            "UPDATE payments SET status = 'rejected', admin_note = :note, updated_at = NOW() WHERE id = :id"
        )->execute(['id' => $paymentId, 'note' => $note]);

        Response::json(['ok' => true, 'status' => 'rejected']);
        exit;
    }
}

Response::error('Method not allowed', 405);
