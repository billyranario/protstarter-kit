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
    | set password grant client name to: pfs-password-grant
    |
    | to generate `sail artisan passport:client --personal`
    | set password grant client name to: pfs-personal-access

    |
    */
    'password_grant' => 'pfs-password-grant',
    'personal_access' => 'pfs-personal-access',
];