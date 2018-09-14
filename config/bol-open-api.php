<?php

return [

	/*
    |--------------------------------------------------------------------------
    | Access Key
    |--------------------------------------------------------------------------
    |
    | This is the public key you get from the open api
    |
    */
	'access-key' => env('BOL_OPEN_API_PUBLIC_KEY', ''),

	/*
    |--------------------------------------------------------------------------
    | Response format
    |--------------------------------------------------------------------------
    |
    | Either 'xml' or 'json'.
    |
    */
	'response-format' => 'json',

	/*
    |--------------------------------------------------------------------------
    | Debug mode
    |--------------------------------------------------------------------------
    |
    | Feel free to put anything you want here. Currently the default is just
	| 'always in debug mode if the environment is not production and debug
	| is set to true'. This prevents mistakes like leaving debug mode on while
	| your application is set to production.
    */

	'debug' => env('APP_ENV') != 'production' && env('APP_DEBUG'),

];