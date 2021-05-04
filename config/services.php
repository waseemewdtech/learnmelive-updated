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
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => 'http://localhost/meeting_site/public/login/google/callback',
    ],
    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect' => 'http://localhost/meeting_site/public/login/facebook/callback',
    ],
    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => 'http://example.com/callback-url',
    ],

    'firebase' => [
        'api_key' => 'AIzaSyBruFwByQj7hW1gLDZoSD-_pjJk7oCsqCo',
        'auth_domain' => 'learnme-51ddb.firebaseapp.com',
        'database_url' => 'https://learnme-51ddb.firebaseio.com',
        'secret' => '',
        'storage_bucket' => 'learnme-51ddb.appspot.com',
        'project_id' => 'learnme-51ddb',
        'messaging_sender_id' => '1031828631727',
        'appId'=>'1:1031828631727:web:55e541f24d85c3c592645a',
        'public_key'=>'BLkCOGewU0gcDwaqCWQT8s4DL8eeNr05C1N1YNyWxoTby4RyE61BA2R9AVuTaGmJvPuI84hAcIOZ2XAor_A_l7I',
        'server_key'=>'AAAA8D3HcK8:APA91bF6cD0F_XD76FDr_Bd-9Q3baQ2EmoNr0UMjekJ5YIg5Wf9mRfOLtJIq2FBhkoNSBnQCCyTnHRZw_zynPxps0sq7mRXGAieHRErr3skGWKM3Dyp4gXxIVat64gd6hsj-v66YDB9u'
    ],

];
