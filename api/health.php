<?php

declare(strict_types=1);

require_once __DIR__ . '/_init.php';

use Luntian\Response;

$checks = ['app' => true, 'database' => false];

try {
    \Luntian\Database::connection()->query('SELECT 1');
    $checks['database'] = true;
} catch (Throwable $e) {
    $checks['database_error'] = env('APP_ENV') === 'local' ? $e->getMessage() : 'unavailable';
}

Response::json([
    'ok' => true,
    'service' => 'luntian-ai',
    'checks' => $checks,
]);
