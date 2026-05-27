<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

use Luntian\Response;

$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';

if ($requestMethod === 'OPTIONS') {
    header('Access-Control-Allow-Origin: ' . cors_origin());
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Admin-Secret');
    header('Access-Control-Max-Age: 86400');
    http_response_code(204);
    exit;
}

header('Access-Control-Allow-Origin: ' . cors_origin());
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Admin-Secret');

function cors_origin(): string
{
    $allowed = env('APP_URL', 'http://localhost/luntianAi');
    $origin = $_SERVER['HTTP_ORIGIN'] ?? '';
    if ($origin !== '' && str_starts_with($origin, parse_url($allowed, PHP_URL_SCHEME) . '://' . parse_url($allowed, PHP_URL_HOST))) {
        return $origin;
    }
    if ($origin !== '' && env('APP_ENV') === 'local') {
        return $origin;
    }
    return $allowed;
}

function read_json_body(): array
{
    $raw = file_get_contents('php://input');
    if ($raw === false || $raw === '') {
        return [];
    }
    $data = json_decode($raw, true);
    if (!is_array($data)) {
        Response::error('Invalid JSON body', 400);
    }
    return $data;
}

function require_auth_user(): array
{
    $firebase = \Luntian\FirebaseAuth::userFromRequest();
    if ($firebase === null) {
        Response::error('Sign in required', 401);
    }
    $user = \Luntian\UserRepository::upsertFromFirebase($firebase);
    return $user;
}

function require_admin(): void
{
    $secret = env('ADMIN_SECRET');
    $provided = $_SERVER['HTTP_X_ADMIN_SECRET'] ?? '';
    if ($secret === null || $secret === '' || !hash_equals($secret, $provided)) {
        Response::error('Forbidden', 403);
    }
}
