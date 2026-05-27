<?php
// Database connection helper — returns a PDO singleton.
// Usage: require_once __DIR__.'/env.php'; $pdo = require_once __DIR__.'/db.php';

require_once __DIR__ . '/env.php';

// Read connection settings from environment
$dbHost = getenv('DB_HOST') ?: ($_ENV['DB_HOST'] ?? '127.0.0.1');
$dbName = getenv('DB_NAME') ?: ($_ENV['DB_NAME'] ?? 'luntian');
$dbUser = getenv('DB_USER') ?: ($_ENV['DB_USER'] ?? 'root');
$dbPass = getenv('DB_PASS') ?: ($_ENV['DB_PASS'] ?? '');
$dbPort = getenv('DB_PORT') ?: ($_ENV['DB_PORT'] ?? '3306');

// Use a static variable to return the same PDO instance
static $pdo = null;
if ($pdo instanceof PDO) {
    return $pdo;
}

$dsn = "mysql:host={$dbHost};port={$dbPort};dbname={$dbName};charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
    return $pdo;
} catch (PDOException $e) {
    // Fail fast during development. In production, handle/log appropriately.
    error_log('Database connection failed: ' . $e->getMessage());
    // Optionally display a friendly message without leaking credentials
    die('Database connection failed. Check server logs.');
}
