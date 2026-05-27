<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/_init.php';

use Luntian\Database;
use Luntian\Response;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    Response::error('Method not allowed', 405);
}

$user = require_auth_user();
$reference = trim((string) ($_POST['reference_code'] ?? ''));
$gcashRef = trim((string) ($_POST['gcash_reference'] ?? ''));

if ($reference === '' || $gcashRef === '') {
    Response::error('reference_code and gcash_reference are required', 400);
}

if (!isset($_FILES['proof']) || $_FILES['proof']['error'] !== UPLOAD_ERR_OK) {
    Response::error('Payment screenshot (proof) is required', 400);
}

$file = $_FILES['proof'];
$allowed = ['image/jpeg', 'image/png', 'image/webp'];
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $file['tmp_name']);
finfo_close($finfo);

if (!in_array($mime, $allowed, true)) {
    Response::error('Proof must be JPG, PNG, or WebP', 400);
}

if ($file['size'] > 5 * 1024 * 1024) {
    Response::error('Proof file must be under 5MB', 400);
}

$pdo = Database::connection();
$stmt = $pdo->prepare(
    'SELECT id, status FROM payments WHERE reference_code = :ref AND user_id = :uid'
);
$stmt->execute(['ref' => $reference, 'uid' => (int) $user['id']]);
$payment = $stmt->fetch();

if (!$payment) {
    Response::error('Payment not found', 404);
}

if (!in_array($payment['status'], ['pending', 'submitted'], true)) {
    Response::error('This payment can no longer be updated', 400);
}

$ext = match ($mime) {
    'image/jpeg' => 'jpg',
    'image/png' => 'png',
    default => 'webp',
};

$uploadDir = dirname(__DIR__, 2) . '/public/uploads/payment-proofs';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

$filename = $reference . '-' . time() . '.' . $ext;
$dest = $uploadDir . '/' . $filename;
if (!move_uploaded_file($file['tmp_name'], $dest)) {
    Response::error('Failed to save proof image', 500);
}

$relativePath = 'public/uploads/payment-proofs/' . $filename;

$update = $pdo->prepare(
    "UPDATE payments SET status = 'submitted', gcash_reference = :gref, proof_path = :path, updated_at = NOW()
     WHERE id = :id"
);
$update->execute([
    'gref' => $gcashRef,
    'path' => $relativePath,
    'id' => (int) $payment['id'],
]);

Response::json([
    'ok' => true,
    'message' => 'Payment proof submitted. We will verify within 24 hours and activate Pro on approval.',
    'status' => 'submitted',
]);
