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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '900399429495-g5jmt35k7ij1hilvoug78t1i34pq29l5.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://futurevalueinnovators.com/callback/google',
    ],

    'facebook' => [
        'client_id' => '220195750698940',
        'client_secret' => '86ec558bc00984fc77b2c737f68a66e8',
        'redirect' => 'https://futurevalueinnovators.com/callback/facebook',
    ],

];
