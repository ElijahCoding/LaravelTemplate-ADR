<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Modules Pattern Aliases
     |--------------------------------------------------------------------------
     |
     | Root folder contains modules
     | Array with folders that will be created and search by Service Provider
     | Active modules - array of modules that will be included by Service Provider
     |
     */

    'root' => 'Agro',

    'folders' => [
        'Routes' => 'Routes',
        'Migrations' => 'Migrations',
        'Models' => 'Models',
        'Controllers' => 'Controllers',
        'Repositories' => 'Repositories',
        'Transformers' => 'Transformers'
    ],

    'active' => [
        'System'
    ]
];
