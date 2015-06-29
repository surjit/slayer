<?php

/*
* --------------------------------------------------------
* PhalconSlayer Autoloader
* ---------------------------------------------------------
* This config is based on the Phalcon\Loader class
*  visit: https://docs.phalconphp.com/en/latest/api/Phalcon_Loader.html
*/
return [
    'dirs' => [

    ],
    
    'namespaces' => [
        // Do not edit below if you don't know what you're doing.
        'App\Acl'                 => APP_ROOT . '/app/Acl/',
        'App\Console'             => APP_ROOT . '/app/Console/',
        'App\Controllers'         => APP_ROOT . '/app/Controllers/',
        'App\Exceptions'          => APP_ROOT . '/app/Exceptions/',
        'App\Models'              => APP_ROOT . '/app/Models/',
        'App\Services'            => APP_ROOT . '/app/Services/',
        'App\Services\Acl'        => APP_ROOT . '/app/Services/Acl/',
        'App\Services\Service'    => APP_ROOT . '/app/Services/Service/',
        'Bootstrap\Console\Phinx' => APP_ROOT . '/bootstrap/src/Console/Phinx/',
        'Bootstrap\Console'       => APP_ROOT . '/bootstrap/src/Console/',
        'Bootstrap\Phalcon\Mvc'   => APP_ROOT . '/bootstrap/src/Phalcon/Mvc/',
        'Bootstrap\Facades'       => APP_ROOT . '/bootstrap/src/Facades/',
        'Bootstrap\Services'      => APP_ROOT . '/bootstrap/src/Services/',
        'Bootstrap\Exceptions'    => APP_ROOT . '/bootstrap/src/Exceptions/',
    ]
];