<?php

declare(strict_types=1);

require_once __DIR__ . '/_init.php';

use Luntian\Database;
use Luntian\GeminiClient;
use Luntian\Response;
use Luntian\UserRepository;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    Response::error('Method not allowed', 405);
}

$user = require_auth_user();
$body = read_json_body();
$message = trim((string) ($body['message'] ?? ''));
$sessionId = isset($body['sessionId']) ? (int) $body['sessionId'] : null;

if ($message === '') {
    Response::error('message is required', 400);
}

if (strlen($message) > 8000) {
    Response::error('message too long', 400);
}

$pdo = Database::connection();
$userId = (int) $user['id'];

if ($sessionId === null || $sessionId <= 0) {
    $title = mb_substr($message, 0, 60);
    $stmt = $pdo->prepare(
        'INSERT INTO chat_sessions (user_id, title) VALUES (:uid, :title) RETURNING id'
    );
    $stmt->execute(['uid' => $userId, 'title' => $title]);
    $sessionId = (int) $stmt->fetchColumn();
} else {
    $check = $pdo->prepare('SELECT id FROM chat_sessions WHERE id = :sid AND user_id = :uid');
    $check->execute(['sid' => $sessionId, 'uid' => $userId]);
    if (!$check->fetch()) {
        Response::error('Session not found', 404);
    }
}

$insertUser = $pdo->prepare(
    'INSERT INTO chat_messages (session_id, role, content) VALUES (:sid, :role, :content)'
);
$insertUser->execute(['sid' => $sessionId, 'role' => 'user', 'content' => $message]);

$systemPrompt = 'You are Luntian AI, a helpful, precise assistant for creative and technical work. '
    . 'Be concise unless the user asks for detail.';

$reply = GeminiClient::chat($message, $systemPrompt);

$insertAi = $pdo->prepare(
    'INSERT INTO chat_messages (session_id, role, content) VALUES (:sid, :role, :content)'
);
$insertAi->execute(['sid' => $sessionId, 'role' => 'assistant', 'content' => $reply]);

$pdo->prepare('UPDATE chat_sessions SET updated_at = NOW() WHERE id = :id')
    ->execute(['id' => $sessionId]);

Response::json([
    'ok' => true,
    'sessionId' => $sessionId,
    'reply' => $reply,
    'isPro' => UserRepository::isPro($user),
]);
