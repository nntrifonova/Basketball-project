<?php

spl_autoload_register(function ($className) {
    $directories = [
        'App\Http\Controllers',
        'App',
        'Http',
       'Controllers',
        'Core',
        'Database',
        'Routes',
    ];
    $projectDir = __DIR__ . '\\';
    $prefix = 'Server\\';
    $prefixLength = strlen($prefix);
    $cleanClassName = substr($className, $prefixLength);
    foreach ($directories as $classDir) {
        $file = $projectDir . $classDir . '\\' . $cleanClassName . '.php';
        var_dump($file);
        $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
        if (file_exists($file)) {
            include $file;
        }
    }
});

//Listen 8080
//<VirtualHost *:8080>
//DocumentRoot "/var/www/html/public/"
//<Directory /var/www/html/public/>
//                DirectoryIndex index.php
//                Options Indexes FollowSymLinks
//                AllowOverride All
//                Require all granted
//</Directory>
//
//</VirtualHost>