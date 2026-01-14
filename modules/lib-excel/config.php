<?php

return [
    '__name' => 'lib-excel',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-excel.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-excel' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibExcel\\Library' => [
                'type' => 'file',
                'base' => 'modules/lib-excel/library'
            ]
        ],
        'files' => []
    ]
];