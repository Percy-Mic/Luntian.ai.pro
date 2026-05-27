<?php
// Database connection helper — returns a PDO singleton.
// Usage: require_once __DIR__.'/env.php'; $pdo = require_once __DIR__.'/db.php';

require_once __DIR__ . '/env.php';

// Use a static variable to return the same PDO instance
static $pdo = null;
if ($pdo instanceof PDO) {
    return $pdo;
}

// Determine connection settings. Prefer DATABASE_URL, fall back to individual DB_* vars.
$databaseUrl = getenv('DATABASE_URL') ?: ($_ENV['DATABASE_URL'] ?? null);
$driver = null;
$host = $dbName = $user = $pass = $port = null;
$extraParams = [];

if ($databaseUrl) {
    $parts = parse_url($databaseUrl);
    $scheme = $parts['scheme'] ?? '';
    // Normalize scheme to driver
    if (strpos($scheme, 'postgres') !== false) {
        $driver = 'pgsql';
    } elseif (strpos($scheme, 'mysql') !== false) {
        $driver = 'mysql';
    } else {
        $driver = $scheme;
    }
    $user = $parts['user'] ?? null;
    $pass = $parts['pass'] ?? null;
    $host = $parts['host'] ?? null;
    $port = $parts['port'] ?? null;
    $path = $parts['path'] ?? null;
    if ($path) {
        $dbName = ltrim($path, '/');
    }
    if (!empty($parts['query'])) {
        parse_str($parts['query'], $extraParams);
    }
} else {
    $driver = getenv('DB_DRIVER') ?: ($_ENV['DB_DRIVER'] ?? 'mysql');
    $host = getenv('DB_HOST') ?: ($_ENV['DB_HOST'] ?? '127.0.0.1');
    $dbName = getenv('DB_NAME') ?: ($_ENV['DB_NAME'] ?? 'luntian');
    $user = getenv('DB_USER') ?: ($_ENV['DB_USER'] ?? 'root');
    $pass = getenv('DB_PASS') ?: ($_ENV['DB_PASS'] ?? '');
    $port = getenv('DB_PORT') ?: ($_ENV['DB_PORT'] ?? null);
}

// Defaults
if (empty($driver)) {
    $driver = 'mysql';
}

// Common PDO options
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    if ($driver === 'pgsql' || $driver === 'postgres' || $driver === 'postgresql') {
        $port = $port ?: 5432;
        $host = $host ?: '127.0.0.1';
        $dbName = $dbName ?: 'postgres';
        // Build DSN and include SSL params where available
        $dsn = "pgsql:host={$host};port={$port};dbname={$dbName}";
        // prefer sslmode from query or env
        $sslmode = $extraParams['sslmode'] ?? getenv('DB_SSLMODE') ?: getenv('PGSSLMODE') ?: null;
        if ($sslmode) {
            $dsn .= ";sslmode={$sslmode}";
        }
        // optional root cert path (local file) - Aiven provides CA cert to download
        $sslroot = $extraParams['sslrootcert'] ?? getenv('DB_SSLROOTCERT') ?: getenv('PGSSLROOTCERT') ?: null;
        if ($sslroot) {
            $dsn .= ";sslrootcert={$sslroot}";
        }

        $pdo = new PDO($dsn, $user, $pass, $options);
        return $pdo;
    } else {
        // default to MySQL
        $port = $port ?: 3306;
        $host = $host ?: '127.0.0.1';
        $dbName = $dbName ?: 'luntian';
        $charset = 'utf8mb4';
        $dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset={$charset}";
        $pdo = new PDO($dsn, $user, $pass, $options);
        return $pdo;
    }
} catch (PDOException $e) {
    error_log('Database connection failed: ' . $e->getMessage());
    die('Database connection failed. Check server logs.');
}
