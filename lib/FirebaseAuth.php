<?php

declare(strict_types=1);

namespace Luntian;

final class FirebaseAuth
{
    /** @return array{uid: string, email: ?string, name: ?string, picture: ?string, provider: string} */
    public static function verifyIdToken(string $idToken): array
    {
        $apiKey = env('FIREBASE_API_KEY');
        if ($apiKey === null || $apiKey === '') {
            Response::error('Firebase is not configured', 503);
        }

        $url = 'https://identitytoolkit.googleapis.com/v1/accounts:lookup?key=' . rawurlencode($apiKey);
        $payload = json_encode(['idToken' => $idToken], JSON_THROW_ON_ERROR);

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 20,
        ]);
        $raw = curl_exec($ch);
        $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($raw === false) {
            Response::error('Could not verify sign-in', 502);
        }

        $data = json_decode($raw, true);
        if ($status >= 400 || empty($data['users'][0])) {
            Response::error('Invalid or expired sign-in. Please sign in again.', 401);
        }

        $user = $data['users'][0];
        $provider = 'password';
        if (!empty($user['providerUserInfo'][0]['providerId'])) {
            $provider = (string) $user['providerUserInfo'][0]['providerId'];
        }

        return [
            'uid' => (string) ($user['localId'] ?? ''),
            'email' => isset($user['email']) ? (string) $user['email'] : null,
            'name' => isset($user['displayName']) ? (string) $user['displayName'] : null,
            'picture' => isset($user['photoUrl']) ? (string) $user['photoUrl'] : null,
            'provider' => $provider,
        ];
    }

    public static function bearerToken(): ?string
    {
        $header = $_SERVER['HTTP_AUTHORIZATION'] ?? $_SERVER['REDIRECT_HTTP_AUTHORIZATION'] ?? '';
        if (preg_match('/^Bearer\s+(.+)$/i', $header, $m)) {
            return trim($m[1]);
        }
        return null;
    }

    /** @return array{uid: string, email: ?string, name: ?string, picture: ?string, provider: string}|null */
    public static function userFromRequest(): ?array
    {
        $token = self::bearerToken();
        if ($token === null || $token === '') {
            return null;
        }
        return self::verifyIdToken($token);
    }
}
