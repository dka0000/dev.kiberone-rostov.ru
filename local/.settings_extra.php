<?php

return [


// 'cache' => [
//     'value' => [
//         'type' => 'memcache',
//         'memcache' => [
//             'host' => 'unix:///mytemp/memcached.sock',
//             'port' => '0',
//             //'host' => '127.0.0.1',
//             //'port' => '11211',
//         ],
//         'sid' => '#01',
//         //'sid' => $_SERVER["DOCUMENT_ROOT"]."#01"
//     ],
// ],
// 'cache' => [
//     'value' => [
//         'type' => [
//             'class_name' => '\\Bitrix\\Main\\Data\\CacheEngineMemcache',
//             'extension' => 'memcache'
//         ],
//         'memcache' => [
//             'host' => 'unix:///mytemp/memcached.sock',
//             'port' => '0',
//         ],
//         'sid' => "#02"
//     ],
// ],



'session' => [
    'value' => [
        'lifetime' => 14400,
        'mode' => 'separated',
        'handlers' => [
            'kernel' => 'encrypted_cookies',
            'general' => [
                'type' => 'database',
            ],
        ],
    ],
],
// 'session' => [
//     'value' => [
//         'lifetime' => 14400,
//         'mode' => 'separated',
//         'handlers' => [
//             'kernel' => 'encrypted_cookies',
//             'general' => [
//                 'type' => 'memcache',
//                 'port' => '0',
//                 'host' => 'unix:///mytemp/memcached.sock',
//             ],
//         ],
//     ],
// ],


'exception_handling' => [
    'value' => [
        'debug' => true,
        'handled_errors_types' => E_ALL & ~E_NOTICE & ~E_USER_NOTICE & ~E_DEPRECATED,
        'exception_errors_types' => E_ALL & ~E_NOTICE & ~E_USER_NOTICE & ~E_DEPRECATED & ~E_WARNING,
        'ignore_silence' => false,
        'assertion_throws_exception' => true,
        'assertion_error_type' => 256,
        'log' => [
            'class_name' => \Otus\Diag\FileExceptionHandlerLogCustom::class,
            'required_file' => '/php_interface/Diag/fileexceptionhandlerlogcustom.php',
            'settings' => [
                #'file' => '/var/log/php/exceptions.log',
                'file' => 'local/logs/exceptions.log',
                'log_size' => 1000000,
            ],
        ],
    ],
    'readonly' => false,
],

    
];
