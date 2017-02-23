<?php

return [
    // 'base_path' => '/',
    'base_path' => 'http://127.0.0.1/yona-cms/public/',

    'database'  => [
        'adapter'  => 'Mysql',
        'host'     => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'dbname'   => 'yona-cms',
        'charset'  => 'utf8',
    ],

    'memcache'  => [
        'host' => '127.0.0.1',
        'port' => 11211,
    ],

    'memcached'  => [
        'host' => '127.0.0.1',
        'port' => 11211,
    ],

    'cache'     => 'file', // memcache, memcached
];