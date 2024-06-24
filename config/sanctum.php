<?php

use Laravel\Sanctum\Sanctum;

return [

    'stateful' => explode(',',
     env('SANCTUM_STATEFUL_DOMAINS',
      'localhost,127.0.0.1')),

    'guard' => ['web', 'sanctum'],

    'expiration' => 1440, // 1440 minutes = 1 day

    'token_prefix' => env('SANCTUM_TOKEN_PREFIX', ''),

    'middleware' => [
        'authenticate_session' => Laravel\Sanctum\Http\Middleware\AuthenticateSession::class,
        'encrypt_cookies' => Illuminate\Cookie\Middleware\EncryptCookies::class,
        'validate_csrf_token' => Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class,
    ],

];
