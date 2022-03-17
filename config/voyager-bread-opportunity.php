<?php

return [

    /*
     * If enabled for voyager-bread-opportunity package.
     */
    'enabled' => env('VOYAGER_BREAD_OPPORTUNITY_ENABLED', true),

    /*
     * The config_key for voyager-bread-opportunity package.
     */
    'config_key' => env('VOYAGER_BREAD_OPPORTUNITY_CONFIG_KEY', 'joy-voyager-bread-opportunity'),

    /*
     * The route_prefix for voyager-bread-opportunity package.
     */
    'route_prefix' => env('VOYAGER_BREAD_OPPORTUNITY_ROUTE_PREFIX', 'joy-voyager-bread-opportunity'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadOpportunity\\Http\\Controllers',
    ],
];
