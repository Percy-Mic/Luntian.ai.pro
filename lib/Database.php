<?php

declare(strict_types=1);

namespace Luntian;

use PDO;
use PDOException;

final class Database
{
    private static ?PDO $pdo = null;

    public static function connection(): PDO
    {
        if (self::$pdo !== null) {
            return self::$pdo;
        }

        $url = env('DATABASE_URL');
        if ($url === null || $url === '') {
            throw new PDOException('DATABASE_URL is not set in .env');
        }

        $parts = parse_url($url);
        if ($parts === false || !isset($parts['host'])) {
            throw new PDOException('Invalid DATABASE_URL');
        }

        $host = $parts['host'];
        $port = $parts['port'] ?? 5432;
        $user = $parts['user'] ?? '';
        $pass = $parts['pass'] ?? '';
        $db = ltrim($parts['path'] ?? '/defaultdb', '/');

        $query = [];
        if (isset($parts['query'])) {
            parse_str($parts['query'], $query);
        }
        $sslmode = $query['sslmode'] ?? 'prefer';

        $dsn = "pgsql:host={$host};port={$port};dbname={$db};sslmode={$sslmode}";

        self::$pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);

        return self::$pdo;
    }
}
