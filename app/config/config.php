<?php

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'postgresql',
        'host'        => 'localhost',
        'username'    => 'postgres',
        'password'    => 'postgres',
        'dbname'      => 'laravel-pos',
    ),
    'application' => array(
        'controllersDir' => __DIR__ . '/../../app/controllers/',
        'modelsDir'      => __DIR__ . '/../../app/models/',
        'viewsDir'       => __DIR__ . '/../../app/views/',
        'pluginsDir'     => __DIR__ . '/../../app/plugins/',
        'libraryDir'     => __DIR__ . '/../../app/library/',
        'cacheDir'       => __DIR__ . '/../../app/cache/',
        'baseUri'        => '/phalcon-pos/',
    )
));
