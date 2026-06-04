<?php

declare(strict_types=1);

namespace Luntian;

final class GeminiClient
{
    public static function chat(string $message, ?string $systemPrompt = null): string
    {
        $apiKey = env('GEMINI_API_KEY');
        if ($apiKey === null || $apiKey === '') {
            Response::error('Gemini API is not configured on the server.', 503);
        }

        $model = env('GEMINI_MODEL', 'gemini-2.0-flash');
        $url = 'https://generativelanguage.googleapis.com/v1beta/models/'
            . rawurlencode($model)
            . ':generateContent?key=' . rawurlencode($apiKey);

        $contents = [];
        if ($systemPrompt !== null && $systemPrompt !== '') {
            $contents[] = [
                'role' => 'user',
                'parts' => [['text' => "System instructions:\n" . $systemPrompt]],
            ];
            $contents[] = [
                'role' => 'model',
                'parts' => [['text' => 'Understood. I will follow those instructions.']],
            ];
        }
        $contents[] = [
            'role' => 'user',
            'parts' => [['text' => $message]],
        ];

        $payload = json_encode([
            'contents' => $contents,
            'generationConfig' => [
                'temperature' => 0.7,
                'maxOutputTokens' => 2048,
            ],
        ], JSON_THROW_ON_ERROR);

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 60,
        ]);

        $raw = curl_exec($ch);
        $errno = curl_errno($ch);
        $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($errno !== 0 || $raw === false) {
            Response::error('Could not reach Gemini API.', 502);
        }

        $data = json_decode($raw, true);
        if ($status >= 400) {
            $msg = $data['error']['message'] ?? 'Gemini request failed';
            Response::error((string) $msg, 502);
        }

        $text = $data['candidates'][0]['content']['parts'][0]['text'] ?? null;
        if (!is_string($text) || $text === '') {
            Response::error('Empty response from Gemini.', 502);
        }

        return $text;
    }
}
