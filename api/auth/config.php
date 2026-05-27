<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/_init.php';

use Luntian\Response;

Response::json([
    'ok' => true,
    'firebase' => [
        'apiKey' => env('FIREBASE_API_KEY', ''),
        'authDomain' => env('FIREBASE_AUTH_DOMAIN', ''),
        'projectId' => env('FIREBASE_PROJECT_ID', ''),
        'storageBucket' => env('FIREBASE_STORAGE_BUCKET', ''),
        'messagingSenderId' => env('FIREBASE_MESSAGING_SENDER_ID', ''),
        'appId' => env('FIREBASE_APP_ID', ''),
    ],
    'facebookAppId' => env('FIREBASE_FACEBOOK_APP_ID', ''),
    'appUrl' => app_url(),
]);
