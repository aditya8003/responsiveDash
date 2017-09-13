<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */
     'google' => [
        'client_id' => '375545428177-9e05j5k2i8rh51tq2tnjjhttnebnkkoq.apps.googleusercontent.com',
        'client_secret' => 'N4m1WpxR8Zwuqy-IjOnlK9Tu',
        'redirect' => 'http://localhost/fistar/public/login/google/callback',
    ],
    'facebook' => [
        'client_id' => '174353219774410',
        'client_secret' => 'c6c1d066d0389402ce9e777b7df5357d',
        'redirect' => 'http://localhost/fistar/public/social/handle/facebook',
    ],
    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
