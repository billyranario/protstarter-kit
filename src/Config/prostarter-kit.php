<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Authentication Password Grant (Passport)
    |--------------------------------------------------------------------------
    |
    | This config requires laravel passport to be installed.
    |
    | to generate `sail artisan passport:client --password`
    | set password grant client name to: psk-password-grant
    |
    | to generate `sail artisan passport:client --personal`
    | set password grant client name to: psk-personal-access

    |
    */
    'password_grant' => 'psk-password-grant',
    'personal_access' => 'psk-personal-access',
];