<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '1125433711469059',
        'client_secret' => '51fb57bec5c529184f8e29aa4da29354',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '371151656945-d6dop0qc0o4uc14jfoaq22faihd4mfd9.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],
    
    'github' => [
        'client_id' => '46679250936430be0b7b',
        'client_secret' => '85c12af9290c4b1a668bed2bef334528743abc1c',
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],

];
