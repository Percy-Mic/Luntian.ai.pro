<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/_init.php';

use Luntian\Response;

Response::json([
    'ok' => true,
    'firebase' => [
        'apiKey' => env('FIREBASE_API_KEY', 'AIzaSyAhUfQJCLTahQgwTqQgnruK2V70HG_Qifc'),
        'authDomain' => env('FIREBASE_AUTH_DOMAIN', 'luntian-ai-pro.firebaseapp.com'),
        'projectId' => env('FIREBASE_PROJECT_ID', 'luntian-ai-pro'),
        'storageBucket' => env('FIREBASE_STORAGE_BUCKET', 'luntian-ai-pro.firebasestorage.app'),
        'messagingSenderId' => env('FIREBASE_MESSAGING_SENDER_ID', '18068810822'),
        'appId' => env('FIREBASE_APP_ID', '1:18068810822:web:57ce9812468d3d32c5ae47'),
    ],
    'facebookAppId' => env('FIREBASE_FACEBOOK_APP_ID', '3414913002016723
'),
    'appUrl' => app_url(),
]);
