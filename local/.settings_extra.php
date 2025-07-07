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

    
];
