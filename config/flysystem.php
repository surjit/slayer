<?php

return [

    'local' => [
        'class'  => Components\Flysystem\Local::class,
        'config' => [
            'path' => BASE_PATH,
        ],
    ],

    // 's3' => [
    //     'class'  => Components\Flysystem\S3::class,
    //     'config' => [
    //         'credentials' => [
    //             'key'    => 'key here',
    //             'secret' => 'secret here'
    //         ],
    //         'region'  => 'us-east-1',
    //         'version' => 'latest',
    //         'bucket'  => 'your bucket',
    //     ],
    // ],

];
