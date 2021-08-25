<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'mvc'),

    /*
   |--------------------------------------------------------------------------
   | Application URL
   |--------------------------------------------------------------------------
   |
   | This URL is used by the console to properly generate URLs when using
   | the Artisan command line tool. You should set this to the root of
   | your application so that it is used when running Artisan tasks.
   |
   */

    'BASE_URL' => env('APP_URL', 'http://localhost:9000'),

    'BASE_DIR' => realpath(__DIR__ . "/../"),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
     |--------------------------------------------------------------------------
     | Application Locale Configuration
     |--------------------------------------------------------------------------
     |
     | The application locale determines the default locale that will be used
     | by the translation service provider. You are free to set this value
     | to any of the locales which will be supported by the application.
     |
     */

    'locale' => 'fa',

    /*
   |--------------------------------------------------------------------------
   | Autoloaded Service Providers
   |--------------------------------------------------------------------------
   |
   | The service providers listed here will be automatically loaded on the
   | request to your application. Feel free to add your own services to
   | this array to grant expanded functionality to your applications.
   |
   */

    'providers' => [
        \App\Providers\AppServiceProvider::class
    ]

];


//
//$temporary = str_replace(BASE_URL, '', explode('?', $_SERVER['REQUEST_URI'])[0]);
//$temporary === "/" ? $temporary = "" : $temporary = substr($temporary, 1);
//define('CURRENT_ROUTE', $temporary);





