<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => '',
        'secret' => '',
    ],

    'facebook' => [
        'client_id' => '513845902100524',
        'client_secret' => '135699237e16cd3a50d2cbfec3a5e58c',
        'redirect' => 'http://profile.icchebazar.com/auth/facebook',
    ],

    'github' => [
        'client_id' => 'aa6339c4d7499184f890',
        'client_secret' => '0799967b134b64c547afdbdfb7d4b764d11ab235',
        //'redirect' => 'http://profile.icchebazar.com/callback_github',
        'redirect' => 'http://profile.icchebazar.com/auth/github',
    ],


    'google' => [
        'client_id' => '962268422122-8bl7pjsobho0bvsncajbtll8gn506gic.apps.googleusercontent.com',
        'client_secret' => 'gq9bPo6iXqZRUI7bu_pd7Xov',
       // 'redirect' => 'http://profile.icchebazar.com/callback_google_plus',
        'redirect' => 'http://profile.icchebazar.com/auth/google',
    ],

    'linkedin' => [
        'client_id' => '75mxu9rect3eu9',
        'client_secret' => 'nhb38cOo7PIOckFr',
        //'redirect' => 'http://profile.icchebazar.com/callback_linkedin',
        'redirect' => 'http://profile.icchebazar.com/auth/linkedin',
    ],
];
