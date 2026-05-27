<?php

declare(strict_types=1);

namespace Luntian;

final class Response
{
    public static function json(array $data, int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json; charset=utf-8');
        header('Cache-Control: no-store');
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
        exit;
    }

    public static function error(string $message, int $status = 400, ?array $extra = null): void
    {
        $body = ['ok' => false, 'error' => $message];
        if ($extra !== null) {
            $body = array_merge($body, $extra);
        }
        self::json($body, $status);
    }
}
